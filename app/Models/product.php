<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class product
 * @package App\Models
 * @version January 4, 2021, 10:16 am UTC
 *
 * @property \App\Models\Doctor $doctor
 * @property integer $doctor_id
 * @property string $name
 * @property string $description
 * @property integer $quantity
 * @property integer $price
 */
class product extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'doctor_id',
        'name',
        'description',
        'quantity',
        'price'
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
        'description' => 'string',
        'quantity' => 'integer',
        'price' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'doctor_id' => 'required',
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'quantity' => 'required|integer',
        'price' => 'required|integer',
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
}
