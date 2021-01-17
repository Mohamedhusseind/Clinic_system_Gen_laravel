<?php

namespace App\Repositories;

use App\Models\Reseptionist;
use App\Repositories\BaseRepository;

/**
 * Class ReseptionistRepository
 * @package App\Repositories
 * @version January 17, 2021, 12:55 pm UTC
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
        return Reseptionist::class;
    }
}
