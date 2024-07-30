<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Visita
 *
 * @property $id
 * @property $prisonero_id
 * @property $visitantes_id
 * @property $InicioVisita
 * @property $finVisita
 * @property $guardia_id
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Visita extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['prisonero_id', 'visitantes_id', 'InicioVisita', 'finVisita', 'guardia_id'];



}
