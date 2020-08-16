<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class News_video extends Model
{
    use Notifiable;
    //
    protected $table='news_video';
    protected $fillable = [
        'title', 'detail', 'type','path',
    ];
}
