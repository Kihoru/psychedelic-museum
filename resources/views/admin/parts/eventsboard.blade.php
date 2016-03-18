@extends('admin.layouts.dashboard')


@section('content')
<h1>Créer un évenement</h1>

<form action="" method="post">
    <label>Titre de l'évenement : </label>
    <input type="text" name="event-title">

    <label>Date de l'évenement</label>
    <input type="text" name="event-date">

    <label>Description de l'évenement</label>
    <textarea></textarea>

    <label>Ajouter une image</label>
    <input type="file" name="picture">
    <label>Ou collez le lien de l'image</label>
</form>
@stop