<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Refrigerios extends Model
{
    //
    use Notifiable;

    protected $table = 'eventos.refrigerios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion','status',
    ];
}
