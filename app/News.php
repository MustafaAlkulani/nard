<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class News extends Model
{
    use Notifiable;
    //
    protected $table='news';
    protected $fillable = [
    'title', 'detail', 'type','updated_at','id'
];

}
