<?php

namespace App\Repositories;

use App\Models\Pantalla;
use InfyOm\Generator\Common\BaseRepository;

class PantallaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pantalla::class;
    }
}
