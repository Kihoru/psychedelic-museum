<!DOCTYPE html>
<html lang="fr">
<head>
    <title>dashboard</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="{{url('assets/css/app.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<body>
    <div id="dashboard-navigation">
        @include('admin.partials.dashboardNav')
    </div>



    <div id="dashboard-content" class="content">
        @yield('content')
    </div>

    <script>

    </script>
</body>
</html>

