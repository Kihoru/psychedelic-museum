<!DOCTYPE html>
<html lang="fr">
<head>
    <title>dashboard</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="{{url('assets/css/app.min.css')}}">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
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
        $(function() {
            $('#date_begin').datepicker({ dateFormat: 'dd/mm/yy' });
            $('#date_end').datepicker({ dateFormat: 'dd/mm/yy' });
            $('#date_edit_end').datepicker({ dateFormat: 'dd/mm/yy' });
            $('#date_edit_begin').datepicker({ dateFormat: 'dd/mm/yy' });
        });
    </script>
</body>
</html>

