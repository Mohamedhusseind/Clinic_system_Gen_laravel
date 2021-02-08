<?php

namespace App\Repositories;

use App\Models\Reseptionist;
use App\Repositories\BaseRepository;

/**
 * Class ReseptionistRepository
 * @package App\Repositories
<<<<<<< HEAD:app/Repositories/ReceptionistRepository.php
 * @version January 7, 2021, 2:08 pm UTC
=======
 * @version January 17, 2021, 12:55 pm UTC
>>>>>>> 2de66a7b8df2aa48179fb6dbca349b72710b0b72:app/Repositories/ReseptionistRepository.php
*/

class ReseptionistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'name',
        'email',
<<<<<<< HEAD:app/Repositories/ReceptionistRepository.php
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
>>>>>>> 2de66a7b8df2aa48179fb6dbca349b72710b0b72:app/Repositories/ReseptionistRepository.php
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
        return Reseptionist::class;
    }
}
