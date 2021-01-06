<?php

namespace App\Repositories;

use App\Models\Doctor;
use App\Repositories\BaseRepository;

/**
 * Class DoctorRepository
 * @package App\Repositories
 * @version January 2, 2021, 4:31 pm UTC
*/

class DoctorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'phone',
        'email',
        'password',
        'address',
        'remember_token'
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
