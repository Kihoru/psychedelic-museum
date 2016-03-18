@extends('admin.layouts.dashboard')


@section('content')
<h1>Créer un évenement</h1>

<form action="" method="post" id="createEvent">
    <div class="form_line">
        <label>Titre de l'évenement : </label>
        <div class="input_form">
            <input type="text" name="event-title">
        </div>

    </div>
    <div class="form_line">
        <label>Date de l'évenement : </label>
        <div class="input_form">
            <input type="text" name="event-date">
        </div>
        <p>(sous forme jj/mm/aaaa)</p>
    </div>
    <div class="form_line">
        <label>Description de l'évenement : </label>
        <div class="input_form">
            <textarea></textarea>
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
            <input type="text">
        </div>
        <p>(Partager > Intégrer > ligne iframe)</p>

        <input class="send_event" type="submit" name="validate_create_event" value="Publier">
    </div>



</form>
@stop