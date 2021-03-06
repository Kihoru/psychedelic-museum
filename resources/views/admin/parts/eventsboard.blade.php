@extends('admin.layouts.dashboard')


@section('content')
<h1>Créer un évenement</h1>

<form enctype="multipart/form-data" action="{{url('dashboard')}}" method="POST" id="createEvent">
    <div class="form_line">
        <label>Titre de l'évenement : </label>
        <div class="input_form">
            <input type="text" name="name">
        </div>

    </div>
    <div class="form_line">
        <label>Date du début de l'évenement : </label>
        <div class="input_form">
            <input id="date_begin" type="text" name="event_date_begin">
        </div>
        <label>Date de fin de l'évenement : </label>
        <div class="input_form">
            <input id="date_end" type="text" name="event_date_end">
        </div>
        <p>(sous forme jj-mm-aaaa)</p>
    </div>
    <div class="form_line">
        <label>Localisation de l'évenement : </label>
        <div class="input_form">
            <input id="localisation" type="text" name="localisation">
        </div>
    </div>
    <div class="form_line">
        <label>Description de l'évenement : </label>
        <div class="input_form">
            <textarea name="content"></textarea>
        </div>
    </div>
    <div class="form_line">
        <label>Ajouter une image : </label>
        <div class="input_form">
            <input class="pic" type="file" name="picture">
        </div>
    </div>
    <div class="form_line">
        <label>Ajouter une vidéo youtube : </label>
        <div class="input_form">
            <input type="text" name="video_uri">
        </div>

        <div id="youtube_helper">
            <p id="help">?</p>
            <img id="screen_youtube" src="{{url('assets/css/pictures/youtube_share.JPG')}}">
        </div>

        {{csrf_field()}}

        <input class="send_event" type="submit" name="validate_create_event" value="Publier">
    </div>



</form>
@stop