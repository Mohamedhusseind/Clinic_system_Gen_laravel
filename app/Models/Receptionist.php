<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Receptionist
 * @package App\Models
 * @version January 2, 2021, 7:53 pm UTC
 *
 * @property \App\Models\Doctor $doctor
 * @property \Illuminate\Database\Eloquent\Collection $invoices
 * @property \Illuminate\Database\Eloquent\Collection $patients
 * @property integer $doctor_id
 * @property string $name
 * @property string $phone
 * @property string $address
 * @property string $email
 * @property string $password
 */
class Receptionist extends Authenticatable
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'receptionists';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'doctor_id',
        'name',
        'phone',
        'address',
        'email',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'doctor_id' => 'integer',
        'name' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'email' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'doctor_id' => 'required',
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'password' => 'required|string|max:255'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function doctor()
    {
        return $this->belongsTo(\App\Models\Doctor::class, 'doctor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function invoices()
    {
        return $this->hasMany(\App\Models\Invoice::class, 'reception_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function patients()
    {
        return $this->hasMany(\App\Models\Patient::class, 'reception_id');
    }
}
