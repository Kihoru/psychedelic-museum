@extends('front.layouts.master')


@section('content')
    <div class="wrapper_content">
        <h1 id="agenda_title">Agenda</h1>

        <section id="next-event">
            <div id="section_next_event">
                <h1>{{$eventDayDate}}</h1>
                <h2>{{$eventMonthDate}}</h2>
                <p class="toDate">Jusqu'au {{$eventDayEnd}} {{$eventMonthEnd}}</p>
                <input type="button" id="event_go" value="Participer">
                <p class="where"><i class="fa fa-map-marker"></i> {{$eventNext->localisation}}</p>
            </div>
            <div id="description_event">
                <div id="text_event">
                    <h1>{{$eventNext->name}}</h1>
                    <p class="desc_event">{{$eventNext->content}}</p>
                </div>
                <div class="img_event">
                    <img src="{{$picture->uri}}">
                </div>
            </div>
        </section>
        <section id="events">
            <h1>Prochains évenements</h1>
            <?php use App\Event; ?>
            @foreach($eventsFuture as $event)
                <div class="events_future">
                    <div class="future_left">
                        <h1><?php echo substr($event->event_date_begin, 0, 2);?></h1>
                        <h2><?php

                            $month = substr($event->event_date_end, 3, 2);

                            if($month == '01')
                            {
                                $month = 'Janvier';
                            }
                            elseif($month == '02')
                            {
                                $month = 'Février';
                            }
                            elseif($month == '03')
                            {
                                $month = 'Mars';
                            }
                            elseif($month == '04')
                            {
                                $month = 'Avril';
                            }
                            elseif($month == '05')
                            {
                                $month = 'Mai';
                            }
                            elseif($month == '06')
                            {
                                $month = 'Juin';
                            }
                            elseif($month == '07')
                            {
                                $month = 'Juillet';
                            }
                            elseif($month == '08')
                            {
                                $month = 'Aout';
                            }
                            elseif($month == '09')
                            {
                                $month = 'Septembre';
                            }
                            elseif($month == '10')
                            {
                                $month = 'Octobre';
                            }
                            elseif($month == '11')
                            {
                                $month = 'Novembre';
                            }
                            elseif($month == '12')
                            {
                                $month = 'Décembre';
                            }

                            echo $month.' ';

                            ?></h2>
                        <p class="jusquau"> Jusqu'au
                            <?php

                            echo substr($event->event_date_end, 0, 2);

                            $monthEnd = substr($event->event_date_end, 3, 2);

                            if($monthEnd == '01')
                            {
                                $monthEnd = 'Janvier';
                            }
                            elseif($monthEnd == '02')
                            {
                                $monthEnd = 'Février';
                            }
                            elseif($monthEnd == '03')
                            {
                                $monthEnd = 'Mars';
                            }
                            elseif($monthEnd == '04')
                            {
                                $monthEnd = 'Avril';
                            }
                            elseif($monthEnd == '05')
                            {
                                $monthEnd = 'Mai';
                            }
                            elseif($monthEnd == '06')
                            {
                                $monthEnd = 'Juin';
                            }
                            elseif($monthEnd == '07')
                            {
                                $monthEnd = 'Juillet';
                            }
                            elseif($monthEnd == '08')
                            {
                                $monthEnd = 'Aout';
                            }
                            elseif($monthEnd == '09')
                            {
                                $monthEnd = 'Septembre';
                            }
                            elseif($monthEnd == '10')
                            {
                                $monthEnd = 'Octobre';
                            }
                            elseif($monthEnd == '11')
                            {
                                $monthEnd = 'Novembre';
                            }
                            elseif($monthEnd == '12')
                            {
                                $monthEnd = 'Décembre';
                            }

                            echo ' '.$monthEnd;

                            ?>
                        </p>
                    </div>
                    <div class="future_right">
                        <p class="localisation_events_future">
                            <i class="fa fa-map-marker"></i>
                            {{$event->localisation}}
                        </p>
                        <p class="abstract">
                            {{$event->abstract}}
                        </p>
                    </div>
                    <a class="button_more" href="#">+ D'INFOS</a>
                </div>
            @endforeach
        </section>
    </div>
@stop

