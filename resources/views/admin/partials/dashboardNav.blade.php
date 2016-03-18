<ul class="dashboard_nav">
    <li><h2>Bienvenue <span class="italic-user">{{$user->name}}</span></h2></li>

    @if($classToggleEvents == 'board')
        <li><a class="create blue-clicked" href="{{url('dashboard')}}">Creer un évenement</a></li>
    @else
        <li><a class="create" href="{{url('dashboard')}}">Creer un évenement</a></li>
    @endif
    @if($classToggleEvents == 'list')
        <li><a class="list blue-clicked" href="{{url('eventlist')}}">Liste des évenements</a></li>
    @else
        <li><a class="list" href="{{url('eventlist')}}">Liste des évenements</a></li>
    @endif
    @if($classToggleEvents == 'users')
        <li><a class="users blue-clicked" href="{{url('users')}}">Utilisateurs</a></li>
    @else
        <li><a class="users" href="{{url('users')}}">Utilisateurs</a></li>
    @endif
    @if($classToggleEvents == 'settings')
        <li><a class="settings blue-clicked" href="{{url('settings')}}">Paramètres</a></li>
    @else
        <li><a class="settings" href="{{url('settings')}}">Paramètres</a></li>
    @endif
    <li class="disconnect"><a href="{{url('logout')}}">Déconnexion<i class="fa fa-sign-out"></i></a></li>
</ul>