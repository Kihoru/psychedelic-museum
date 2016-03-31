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

    static function getNextEvent()
    {
        $now = Carbon::now()->timestamp;
        $events = Event::all();
        $eventNexts = [];
        foreach($events as $event)
        {
            $dateBegin = Carbon::parse($event->event_date_begin)->timestamp;
            if($dateBegin > $now)
            {
                $eventNexts[$dateBegin] = $event;
            }
        }
        asort($eventNexts);
        return array_shift($eventNexts);
        //var_dump(array_shift($eventNexts));
    }
    static function getFutureEvents()
    {
        $now = Carbon::now()->timestamp;
        $events = Event::all();
        $eventNexts = [];
        foreach($events as $event)
        {
            $dateBegin = Carbon::parse($event->event_date_begin)->timestamp;
            if($dateBegin > $now)
            {
                $eventNexts[] = $event;
            }
        }
        return $eventNexts;
        //var_dump(array_shift($eventNexts));
    }
}
