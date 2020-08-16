<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Setting extends Model
{
    //

    protected  $table ='setting';
    protected  $fillable=[
        'slug','name','type','value',

    ];
}
