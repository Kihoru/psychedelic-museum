<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=[
        'name',
        'event_date',
        'abstract',
        'content',
        'video_uri'
    ];

    public function picture(){
        return $this->hasOne('App\Picture');
    }
}
