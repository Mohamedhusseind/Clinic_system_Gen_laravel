<?php

namespace App\Repositories;

use App\Models\Doctor;
use App\Repositories\BaseRepository;

/**
 * Class DoctorRepository
 * @package App\Repositories
<<<<<<< HEAD
 * @version January 7, 2021, 2:02 pm UTC
=======
 * @version January 17, 2021, 12:52 pm UTC
>>>>>>> 2de66a7b8df2aa48179fb6dbca349b72710b0b72
*/

class DoctorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Doctor::class;
    }
}
