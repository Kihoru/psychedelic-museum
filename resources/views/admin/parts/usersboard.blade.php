@extends('admin.layouts.dashboard')


@section('content')
<h1>Liste des utilisateurs</h1>
<ul class="info_users_list">
    <li>Utilisateur</li>
    <li>Email</li>
    <li>Password</li>
    <li>Supprimer</li>
</ul>

    @foreach($users as $user)
        <ul class="users_list">
            <li>{{$user->name}}</li>
            <li>{{$user->email}}</li>
            <li>Password crypté</li>
            @if($user->name == 'admin')
                <li></li>
            @else
            <li>
                <a href="{{url('deleteUser', $user->id)}}"><i class="fa fa-trash"></i></a>
            </li>
            @endif
        </ul>
    @endforeach


    <h1 class="create_user_title">Créer un utilisateur</h1>
    <form action="{{url('createUser')}}" method="POST" class="user_form">
        <ul>
            <li>
                <label>Nom d'utilisateur :</label>
                <input type="text" name="name">
            </li>
            <li>
                <label>Email :</label>
                <input type="email" name="email">
            </li>
            <li>
                <label>Mot de passe :</label>
                <input type="password" name="password">
            </li>
            <li>
                <label>Vérifier votre mot de passe :</label>
                <input type="password" name="password_verif">
            </li>
            <li>
                {{csrf_field()}}
                <input type="submit" class="send_event" name="submit_user">
            </li>
        </ul>
    </form>
@stop