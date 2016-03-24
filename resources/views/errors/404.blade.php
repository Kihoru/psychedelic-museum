<!DOCTYPE html>
<html>
<head>
    <title>Page not found</title>
    <link rel="stylesheet" href="{{url('assets/css/app.min.css')}}">
    <style>
        .error{
            margin: 0 auto;
            width: 100%;
            background: url("assets/css/pictures/backlogin.jpg") 0% 100% no-repeat;
            background-size: cover;
            height: 1000px;
        }

        h1{
            padding-top: 150px;
            font-family: "Helvetica Neue Light", "HelveticaNeue-Light", "Helvetica Neue", Calibri, Helvetica, Arial, sans-serif;
            font-size: 72px;
            font-weight: lighter;
            color: white;
            text-align: center;
        }
        h2{
            font-family: "Helvetica Neue Light", "HelveticaNeue-Light", "Helvetica Neue", Calibri, Helvetica, Arial, sans-serif;
            font-size: 36px;
            font-weight: lighter;
            color: white;
            text-align: center;
        }

        .return_back{
            line-height: 40px;
            width: 120px;
            background-color: #6bbfc3;
            display: block;
            color: white;
            font-family: "Helvetica Neue Light", "HelveticaNeue-Light", "Helvetica Neue", Calibri, Helvetica, Arial, sans-serif;
            text-decoration: none;
            margin-left: 45%;
            text-align: center;
            margin-top: 100px;
        }

        .return_back:hover{
            background-color: #66b5b9;
            cursor: pointer;
        }
        .return_back:active{
            background-color: #589ea1;
            cursor: pointer;
        }

    </style>
</head>
<body>
<div id="404" class="error">
    <div class="content">
        <h1>404 ERROR !!</h1>
        <h2>La page recherchée n'existe pas</h2>
        <a class="return_back" href="{{url('/')}}">Retour au site</a>
    </div>
</div>
</body>
</html>
