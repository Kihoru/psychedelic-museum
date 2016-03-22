@extends('admin.layouts.dashboard')


@section('content')
    <h1>Liste des évenements publiés</h1>

        <ul id="event_list">
            <li class="bold_list">Nom</li>
            <li class="bold_list">Date de l'évenement</li>
            <li class="bold_list">Modifier / Supprimer</li>
        </ul>
        @foreach($events as $event)
            <ul class="element_list">
                <li class="color_red"></li>
                <li class="name_list">
                    {{$event->name}}
                </li>
                <li class="date_list">
                    {{$event->event_date}}
                </li>
                <ul class="edit_list">
                    <li><a href="{{url('edit', $event->id)}}"><i class="fa fa-pencil-square-o"></i></a></li>
                    <li><a href="{{url('delete', $event->id)}}"><i class="fa fa-trash"></i></a></li>
                </ul>
            </ul>
        @endforeach
@stop