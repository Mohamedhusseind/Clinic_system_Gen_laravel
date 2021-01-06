<?php

namespace App\Repositories;

use App\Models\invoice;
use App\Repositories\BaseRepository;

/**
 * Class invoiceRepository
 * @package App\Repositories
 * @version January 4, 2021, 9:46 am UTC
*/

class invoiceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'reception_id',
        'patient_id',
        'patient_name',
        'patient_status',
        'reservation_price',
        'phone'
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
        return invoice::class;
    }
}
