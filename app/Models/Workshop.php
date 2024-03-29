<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{
    public function events()
    {
        return $this->hasMany('App\Models\Event', 'id', 'event_id');
    }

}
