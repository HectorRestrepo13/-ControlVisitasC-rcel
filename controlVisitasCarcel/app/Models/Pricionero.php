<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pricionero
 *
 * @property $id
 * @property $nombreCompleto
 * @property $fechaNacimiento
 * @property $fechaIngreso
 * @property $delitoCometido
 * @property $celdaAsignada
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pricionero extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreCompleto', 'fechaNacimiento', 'fechaIngreso', 'delitoCometido', 'celdaAsignada'];



}
