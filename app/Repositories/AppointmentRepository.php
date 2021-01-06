<?php

namespace App\Repositories;

use App\Models\Appointment;
use App\Repositories\BaseRepository;

/**
 * Class AppointmentRepository
 * @package App\Repositories
 * @version January 4, 2021, 10:19 am UTC
*/

class AppointmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'doctor_id',
        'patient_id',
        'status',
        'diagnosis'
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
        return Appointment::class;
    }
}
