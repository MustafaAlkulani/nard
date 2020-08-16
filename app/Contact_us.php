<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Contact_us extends Model
{
    use Notifiable;
    //
    protected $table='contact_us';
    protected $fillable = [
        'contact_name', 'email', 'subject','message','view','type',
    ];


}
