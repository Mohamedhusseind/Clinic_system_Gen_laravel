<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Doctor
 * @package App\Models
<<<<<<< HEAD
 * @version January 7, 2021, 2:02 pm UTC
=======
 * @version January 17, 2021, 12:52 pm UTC
>>>>>>> 2de66a7b8df2aa48179fb6dbca349b72710b0b72
 *
 * @property integer $type
 * @property string $name
 * @property string $email
<<<<<<< HEAD
 * @property string $phone
 * @property string $address
=======
>>>>>>> 2de66a7b8df2aa48179fb6dbca349b72710b0b72
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $phone
 * @property string $address
 */
class Doctor extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'type',
        'name',
        'email',
<<<<<<< HEAD
        'phone',
        'address',
        'email_verified_at',
        'password',
        'remember_token'
=======
        'email_verified_at',
        'password',
        'remember_token',
        'phone',
        'address'
>>>>>>> 2de66a7b8df2aa48179fb6dbca349b72710b0b72
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'integer',
        'name' => 'string',
        'email' => 'string',
<<<<<<< HEAD
        'phone' => 'string',
        'address' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
=======
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string',
        'phone' => 'string',
        'address' => 'string'
>>>>>>> 2de66a7b8df2aa48179fb6dbca349b72710b0b72
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type' => 'required|integer',
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
<<<<<<< HEAD
        'phone' => 'required|string|max:255',
        'address' => 'required|string|max:255',
=======
>>>>>>> 2de66a7b8df2aa48179fb6dbca349b72710b0b72
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:255',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
<<<<<<< HEAD
        'deleted_at' => 'nullable'
=======
        'phone' => 'required|string|max:100',
        'address' => 'required|string|max:100'
>>>>>>> 2de66a7b8df2aa48179fb6dbca349b72710b0b72
    ];

    
}
