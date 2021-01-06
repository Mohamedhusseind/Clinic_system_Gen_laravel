<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class recipe
 * @package App\Models
 * @version January 4, 2021, 10:18 am UTC
 *
 * @property \App\Models\Doctor $doctor
 * @property \App\Models\Patient $patient
 * @property integer $doctor_id
 * @property integer $patient_id
 * @property string $product_name
 * @property string $description
 */
class recipe extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'recipes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'doctor_id',
        'patient_id',
        'product_name',
        'description'
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
        'product_name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'doctor_id' => 'required',
        'patient_id' => 'required',
        'product_name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'updated_at' => 'required',
        'created_at' => 'required',
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
