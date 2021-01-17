<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Appointment
 * @package App\Models
 * @version January 4, 2021, 10:19 am UTC
 *
 * @property \App\Models\Doctor $doctor
 * @property \App\Models\Patient $patient
 * @property integer $doctor_id
 * @property integer $patient_id
 * @property string $status
 * @property string $diagnosis
 */
class Appointment extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'appointments';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'doctor_id',
        'patient_id',
        'status',
        'diagnosis'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'doctor_id' => 'integer',
        'patient_id' => 'integer',
        'status' => 'string',
        'diagnosis' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'doctor_id' => 'required',
        'patient_id' => 'required',
        'status' => 'required|string|max:255',
        'diagnosis' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function doctor()
    {
        return $this->belongsTo(\App\Models\Doctor::class, 'doctor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id');
    }
}
