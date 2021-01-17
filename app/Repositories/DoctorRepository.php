<?php

namespace App\Repositories;

use App\Models\Doctor;
use App\Repositories\BaseRepository;

/**
 * Class DoctorRepository
 * @package App\Repositories
 * @version January 17, 2021, 12:52 pm UTC
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
        'email_verified_at',
        'password',
        'remember_token',
        'phone',
        'address'
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
