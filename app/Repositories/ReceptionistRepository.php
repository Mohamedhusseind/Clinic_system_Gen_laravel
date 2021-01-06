<?php

namespace App\Repositories;

use App\Models\Receptionist;
use App\Repositories\BaseRepository;

/**
 * Class ReceptionistRepository
 * @package App\Repositories
 * @version January 2, 2021, 7:53 pm UTC
*/

class ReceptionistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'doctor_id',
        'name',
        'phone',
        'address',
        'email',
        'password'
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
        return Receptionist::class;
    }
}
