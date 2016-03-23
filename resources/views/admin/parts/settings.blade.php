@extends('admin.layouts.dashboard')


@section('content')
<h1>Paramètres</h1>

    <div id="form_settings">
        <h2 class="title_settings_h2">Modifier le nom : <i class="fa fa-pencil-square-o"></i> nom actuel : {{$user->name}}</h2>
        <form class="form_change_settings" action="{{url('sendName')}}" method="POST">
            <label>Veuillez rentrer votre nouveau nom</label>
            <input type="text" name="name">
            <input type="submit" class="send_settings">
            {{csrf_field()}}
        </form>

        <h2 class="title_settings_h2">Modifier l'email : <i class="fa fa-pencil-square-o"></i> email actuel : {{$user->email}}</h2>
        <form class="form_change_settings" action="{{url('sendEmail')}}" method="POST">
            <label>Veuillez rentrer votre nouvel email</label>
            <input type="email" name="email">
            <input type="submit" class="send_settings">
            {{csrf_field()}}
        </form>
        <h2 class="title_settings_h2">Modifier le mot de passe : <i class="fa fa-pencil-square-o"> </i><span>(entre 5 et 20 caractères)</span></h2>
        <form class="form_change_settings" action="{{url('sendPassword')}}" method="POST">
            <label>Veuillez rentrer votre nouveau mot de passe</label>
            <input type="password" name="password">
            <input type="password" name="password_verif">
            <input type="submit" class="send_settings">
            {{csrf_field()}}
        </form>
    </div>

@stop