<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Image_new extends Model
{
    use Notifiable;
    //
    protected $table='image_news';
    protected $fillable = [
        'id_new', 'path',
    ];

}
