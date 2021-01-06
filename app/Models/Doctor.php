<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Doctor
 * @package App\Models
 * @version January 2, 2021, 4:31 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $appointments
 * @property \Illuminate\Database\Eloquent\Collection $products
 * @property \Illuminate\Database\Eloquent\Collection $receptionists
 * @property \Illuminate\Database\Eloquent\Collection $recipes
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $password
 * @property string $address
 * @property string $remember_token
 */
class Doctor extends Authenticatable
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'doctors';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'address',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'password' => 'string',
        'address' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'password' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function appointments()
    {
        return $this->hasMany(\App\Models\Appointment::class, 'doctor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function products()
    {
        return $this->hasMany(\App\Models\Product::class, 'doctor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function receptionists()
    {
        return $this->hasMany(\App\Models\Receptionist::class, 'doctor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function recipes()
    {
        return $this->hasMany(\App\Models\Recipe::class, 'doctor_id');
    }
}
