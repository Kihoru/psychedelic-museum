<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $dates = ['dob'];

    protected $fillable=[
        'name',
        'event_date_begin',
        'event_date_end',
        'abstract',
        'content',
        'video_uri'
    ];

    public function picture(){
        return $this->hasOne('App\Picture');
    }
}
