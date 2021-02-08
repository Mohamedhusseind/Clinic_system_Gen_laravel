<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Patient
 * @package App\Models
 * @version January 7, 2021, 2:22 pm UTC
 *
 * @property \App\Models\Receptionist $createdBy
 * @property \Illuminate\Database\Eloquent\Collection $appointments
 * @property \Illuminate\Database\Eloquent\Collection $invoices
 * @property \Illuminate\Database\Eloquent\Collection $recipes
 * @property integer $created_by
 * @property string $patient_name
 * @property string $status
 * @property string $age
 * @property string $address
 * @property string $phone
 * @property string $gender
 */
class Patient extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'patients';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'created_by',
        'patient_name',
        'status',
        'age',
        'address',
        'phone',
        'gender'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'created_by' => 'integer',
        'patient_name' => 'string',
        'status' => 'string',
        'age' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'gender' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'created_by' => 'required',
        'patient_name' => 'required|string|max:255',
        'status' => 'required|string|max:255',
        'age' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'created_at' => 'required',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function createdBy()
    {
        return $this->belongsTo(\App\Models\Receptionist::class, 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function appointments()
    {
        return $this->hasMany(\App\Models\Appointment::class, 'patient_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function invoices()
    {
        return $this->hasMany(\App\Models\Invoice::class, 'patient_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function recipes()
    {
        return $this->hasMany(\App\Models\Recipe::class, 'patient_id');
    }
}
