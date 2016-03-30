@extends('admin.layouts.dashboard')


@section('content')
    <h1>Liste des évenements publiés</h1>

        <ul id="event_list">
            <li class="bold_list">Nom</li>
            <li class="bold_list">Dates de l'évenement</li>
            <li class="bold_list">Modifier / Supprimer</li>
        </ul>
        @foreach($events as $event)
                @if($event->status == 'en cours')
                    <ul class="element_list">
                        @if($event->status == 'a venir')
                            <li class="color_orange"></li>
                        @endif

                        @if($event->status == 'en cours')
                            <li class="color_green"></li>
                        @endif

                        @if($event->status == 'terminer')
                            <li class="color_grey"></li>
                        @endif

                        <li class="name_list">
                            {{$event->name}}
                        </li>
                        <li class="date_list">
                            du
                            {{$event->event_date_begin}}
                            au
                            {{$event->event_date_end}}
                        </li>
                        <ul class="edit_list">
                            <li><a href="{{url('edit', $event->id)}}"><i class="fa fa-pencil-square-o"></i></a></li>
                            <li><a href="{{url('delete', $event->id)}}"><i class="fa fa-trash"></i></a></li>
                        </ul>
                    </ul>
                @endif
        @endforeach
        @foreach($events as $event)
            @if($event->status == 'a venir')
                <ul class="element_list">
                    @if($event->status == 'a venir')
                        <li class="color_orange"></li>
                    @endif

                    @if($event->status == 'en cours')
                        <li class="color_green"></li>
                    @endif

                    @if($event->status == 'terminer')
                        <li class="color_grey"></li>
                    @endif

                    <li class="name_list">
                        {{$event->name}}
                    </li>
                    <li class="date_list">
                        du
                        {{$event->event_date_begin}}
                        au
                        {{$event->event_date_end}}
                    </li>
                    <ul class="edit_list">
                        <li><a href="{{url('edit', $event->id)}}"><i class="fa fa-pencil-square-o"></i></a></li>
                        <li><a href="{{url('delete', $event->id)}}"><i class="fa fa-trash"></i></a></li>
                    </ul>
                </ul>
            @endif
        @endforeach
        @foreach($events as $event)
            @if($event->status == 'terminer')
                <ul class="element_list">
                    @if($event->status == 'a venir')
                        <li class="color_orange"></li>
                    @endif

                    @if($event->status == 'en cours')
                        <li class="color_green"></li>
                    @endif

                    @if($event->status == 'terminer')
                        <li class="color_grey"></li>
                    @endif

                    <li class="name_list">
                        {{$event->name}}
                    </li>
                    <li class="date_list">
                        du
                        {{$event->event_date_begin}}
                        au
                        {{$event->event_date_end}}
                    </li>
                    <ul class="edit_list">
                        <li><a href="{{url('edit', $event->id)}}"><i class="fa fa-pencil-square-o"></i></a></li>
                        <li><a href="{{url('delete', $event->id)}}"><i class="fa fa-trash"></i></a></li>
                    </ul>
                </ul>
            @endif
        @endforeach

        <div id="legend">
            <section class="legend_element">
                <div class="green_legend"></div>
                <p>Evenement en cours</p>
            </section>
            <section class="legend_element">
                <div class="orange_legend"></div>
                <p>Evenement à venir</p>
            </section>
            <section class="legend_element">
                <div class="grey_legend"></div>
                <p>Evenement terminer</p>
            </section>

        </div>
    @stop