<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Psychedelic museum project</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="{{url('assets/css/app.min.css')}}">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<body id="main_body">
<div id="main-nav">
    @include('front.partial.nav')
</div>



<div id="main-content">
    @yield('content')
</div>


<div id="main_footer">
    @include('front.partial.footer')
</div>
</body>
</html>

