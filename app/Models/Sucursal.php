<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Sucursal",
 *      required={Codigo, Nombre, Cant_pantallas},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="Codigo",
 *          description="Codigo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="Nombre",
 *          description="Nombre",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="Contacto",
 *          description="Contacto",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="Telefono",
 *          description="Telefono",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="Cant_pantallas",
 *          description="Cant_pantallas",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Sucursal extends Model
{
    use SoftDeletes;

    public $table = 'sucursals';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Codigo',
        'Nombre',
        'Contacto',
        'Telefono',
        'Cant_pantallas',
        'Hora_ini',
        'Hora_fin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Codigo' => 'string',
        'Nombre' => 'string',
        'Contacto' => 'string',
        'Telefono' => 'string',
        'Cant_pantallas' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Codigo' => 'required',
        'Nombre' => 'required',
        'Cant_pantallas' => 'required'
    ];
}
