@extends('admin.layouts.dashboard')


@section('content')
    <h1>Créer un évenement</h1>

    <form enctype="multipart/form-data" action="{{url('edit/'.$event->id)}}" method="POST" id="editEvent">
        <div class="form_line">
            <label>Titre de l'évenement : </label>
            <div class="input_form">
                <input type="text" name="name" value="{{$event->name}}">
            </div>

        </div>
        <div class="form_line">
            <label>Date de l'évenement : </label>
            <div class="input_form">
                <input type="text" name="event_date" value="{{$event->event_date}}">
            </div>
            <p>(sous forme jj/mm/aaaa)</p>
        </div>
        <div class="form_line">
            <label>Description de l'évenement : </label>
            <div class="input_form">
                <textarea name="content">{{$event->content}}</textarea>
            </div>
        </div>
        <div class="form_line">
            <label>Ajouter une image : </label>
            <div class="input_form">
                <input class="pic" type="file" name="picture" value="{{$event->picture}}">
            </div>
        </div>
        <div class="form_line">
            <label>Ajouter une vidéo youtube : </label>
            <div class="input_form">
                <input type="text" name="video_uri" value="{{$event->video_uri}}">
            </div>
            <p>(Partager > Intégrer > ligne iframe)</p>

            {{csrf_field()}}

            <input class="send_event" type="submit" name="validate_edit_event" value="Modifier">
        </div>
    </form>
@stop