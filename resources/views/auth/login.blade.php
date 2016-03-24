<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{url('assets/css/app.min.css')}}">
    <title>Login</title>
</head>
<body>

    <div id="login">
        <div class="wrapper">
            <h1>Connexion au <span class="boldiful">dashboard</span></h1>
            <form action="{{url('login')}}" method="post">
                {{csrf_field()}}
                <div class="login_form_element">
                    <label>Adresse email :</label>
                    <input name="email" value="{{old('email')}}" type="email" placeholder="Votre mail...">
                </div>

                @if($errors->has('email'))
                    <span class="error">{{$errors->first('email')}}</span>
                @endif
                <div class="login_form_element">
                    <label>Mot de passe :</label>
                    <input type="password" name="password" placeholder="Votre mot de passe...">
                </div>
                <div class="login_form_element">
                    <label class="remember">Se souvenir de moi :</label>
                    <input class="remember" type="checkbox" name="remember" value="remember">
                </div>
                <input name="submitButton" type="submit" value="Envoyer" id="submit_button">

                @if(Session::has('message'))
                    <span class="warning {{Session::get('alert')}}">{{Session::get('message')}}</span>
                @endif
            </form>


            <a class="return_button" href="{{back()}}">Retour au site</a>
        </div>
    </div>

</body>
</html>