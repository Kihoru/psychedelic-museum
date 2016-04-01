<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use Carbon\Carbon;
use App\Picture;
use App\Http\Requests\EventRequest;

class FrontController extends Controller
{
    public function index(Event $event)
    {
        $eventNext = $event->getNextEvent();
        $eventDayDate = substr($eventNext->event_date_begin, 0, 2);
        $eventMonthDate = $this->selectMonth(substr($eventNext->event_date_begin, 3, 2));
        return view('front.parts.index', compact('eventNext', 'eventDayDate', 'eventMonthDate'));
    }

    public function selfie()
    {
        return view('front.parts.selfie');
    }

    public function agenda(Event $event)
    {
        $eventsFuture = $event->getFutureEvents();
        $eventNext = $event->getNextEvent();
        $eventDayDate = substr($eventNext->event_date_begin, 0, 2);
        $eventMonthDate = $this->selectMonth(substr($eventNext->event_date_begin, 3, 2));
        $eventDayEnd = substr($eventNext->event_date_end, 0, 2);
        $eventMonthEnd = $this->selectMonth(substr($eventNext->event_date_end, 3, 2));
        $picture = $eventNext->picture;
        //var_dump($eventsFuture);
        return view('front.parts.agenda',
            compact(
            'eventNext',
            'eventDayDate',
            'eventMonthDate',
            'eventDayEnd',
            'eventMonthEnd',
            'picture',
            'eventsFuture'));
    }

    public function history()
    {
        return view('front.parts.history');
    }

    public function sendSelfie()
    {
        return view('front.parts.index');
    }

    public function selectMonth($month)
    {
        if($month == '01'){
            return 'Janvier';
        }
        elseif($month == '02')
        {
            return 'Février';
        }
        elseif($month == '03')
        {
            return 'Mars';
        }
        elseif($month == '04')
        {
            return 'Avril';
        }
        elseif($month == '05')
        {
            return 'Mai';
        }
        elseif($month == '06')
        {
            return 'Juin';
        }
        elseif($month == '07')
        {
            return 'Juillet';
        }
        elseif($month == '08')
        {
            return 'Aout';
        }
        elseif($month == '09')
        {
            return 'Septembre';
        }
        elseif($month == '10')
        {
            return 'Octobre';
        }
        elseif($month == '11')
        {
            return 'Novembre';
        }
        elseif($month == '12')
        {
            return 'Décembre';
        }
    }

}
