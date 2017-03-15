<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $fillable = [
         'users_id', 'adress','mark_vechicle','priority','time','comments','driver','date'
    ];
}
