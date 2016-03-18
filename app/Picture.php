<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable=[
        'event_id',
        'uri',
        'name'];

    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}
