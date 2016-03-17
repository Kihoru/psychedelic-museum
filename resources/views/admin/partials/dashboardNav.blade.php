<ul class="dashboard_nav">
    <h2>Hello {{$user->name}}</h2>


    <li><a href="">Créer un évenement</a></li>
    <li><a href="">Liste des évenements</a></li>
    <li><a href="">Utilisateurs</a></li>
    <li><a href="">Paramètres</a></li>
    <li><a href="{{url('logout')}}">Déconnexion</a></li><i class="fa fa-sign-out"></i>

</ul>