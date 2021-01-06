<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class invoice
 * @package App\Models
 * @version January 4, 2021, 9:46 am UTC
 *
 * @property \App\Models\Patient $patient
 * @property \App\Models\Receptionist $reception
 * @property integer $reception_id
 * @property integer $patient_id
 * @property string $patient_name
 * @property string $patient_status
 * @property string $reservation_price
 * @property string $phone
 */
class invoice extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'invoices';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'reception_id',
        'patient_id',
        'patient_name',
        'patient_status',
        'reservation_price',
        'phone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'reception_id' => 'integer',
        'patient_id' => 'integer',
        'patient_name' => 'string',
        'patient_status' => 'string',
        'reservation_price' => 'string',
        'phone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'reception_id' => 'required',
        'patient_id' => 'required',
        'patient_name' => 'required|string|max:255',
        'patient_status' => 'required|string|max:255',
        'reservation_price' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function reception()
    {
        return $this->belongsTo(\App\Models\Receptionist::class, 'reception_id');
    }
}
