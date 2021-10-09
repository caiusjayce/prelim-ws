<?php

namespace App\Repositories;

use App\Models\Pricing;
use App\Repositories\BaseRepository;

/**
 * Class PricingRepository
 * @package App\Repositories
 * @version October 8, 2021, 7:02 am UTC
*/

class PricingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return Pricing::class;
    }
}
