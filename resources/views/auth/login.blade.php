<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{url('assets/css/app.min.css')}}">
    <title>Login</title>
</head>
<body>
<form action="{{url('login')}}" method="post">
    {{csrf_field()}}
    <label>Email:</label>
    <input name="email" value="{{old('email')}}" type="email" placeholder="Votre mail...">

    @if($errors->has('email'))
        <span class="error">{{$errors->first('email')}}</span>
    @endif

    <label>Mot de passe:</label>
    <input type="text" name="password" placeholder="Votre mot de passe...">

    <label>Se souvenir de moi:</label>
    <input type="radio" name="remember" value="remember">

    <input name="submitButton" type="submit" value="Envoyer">

    @if(Session::has('message'))
        <span class="warning {{Session::get('alert')}}">{{Session::get('message')}}</span>
    @endif
</form>
</body>
</html>