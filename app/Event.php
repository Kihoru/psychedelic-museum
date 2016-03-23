<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Event extends Model
{
    protected $dates = ['dob'];

    protected $fillable=[
        'name',
        'event_date_begin',
        'event_date_end',
        'abstract',
        'localisation',
        'status',
        'content',
        'video_uri'
    ];

    public function picture(){
        return $this->hasOne('App\Picture');
    }
}
