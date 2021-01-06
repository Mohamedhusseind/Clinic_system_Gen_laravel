<?php

namespace App\Repositories;

use App\Models\product;
use App\Repositories\BaseRepository;

/**
 * Class productRepository
 * @package App\Repositories
 * @version January 4, 2021, 10:16 am UTC
*/

class productRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'doctor_id',
        'name',
        'description',
        'quantity',
        'price'
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
        return product::class;
    }
}
