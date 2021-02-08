<?php

namespace App\Repositories;

use App\Models\Receptionist;
use App\Repositories\BaseRepository;

/**
 * Class ReceptionistRepository
 * @package App\Repositories
 * @version January 7, 2021, 2:08 pm UTC
*/

class ReceptionistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'name',
        'email',
        'phone',
        'address',
        'email_verified_at',
        'password',
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
        return Receptionist::class;
    }
}
