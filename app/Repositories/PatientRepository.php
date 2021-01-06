<?php

namespace App\Repositories;

use App\Models\Patient;
use App\Repositories\BaseRepository;

/**
 * Class PatientRepository
 * @package App\Repositories
 * @version January 2, 2021, 8:23 pm UTC
*/

class PatientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'reception_id',
        'patient_name',
        'status',
        'age',
        'address',
        'phone',
        'gender'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Patient::class;
    }
}
