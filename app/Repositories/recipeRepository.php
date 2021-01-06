<?php

namespace App\Repositories;

use App\Models\recipe;
use App\Repositories\BaseRepository;

/**
 * Class recipeRepository
 * @package App\Repositories
 * @version January 4, 2021, 10:18 am UTC
*/

class recipeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'doctor_id',
        'patient_id',
        'product_name',
        'description'
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
        return recipe::class;
    }
}
