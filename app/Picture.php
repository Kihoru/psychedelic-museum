<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable=[
        'uri',
        'name',
        'event_id'];

    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}
