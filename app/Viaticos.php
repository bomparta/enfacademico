<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Viaticos extends Model
{
    //
    use Notifiable;

    protected $table = 'eventos.viaticos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion','status',
    ];
}

