<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Visitante
 *
 * @property $id
 * @property $nombreCompleto
 * @property $cedula
 * @property $relacionPrisionero
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Visitante extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreCompleto', 'cedula', 'relacionPrisionero'];



}
