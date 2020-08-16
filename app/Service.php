<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Service extends Model
{
    use Notifiable;
    //
    protected $table='service';
    protected $fillable = [
        'id','name', 'detail', 'image','type'
    ];


}
