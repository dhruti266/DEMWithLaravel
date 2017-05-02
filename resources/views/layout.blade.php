<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Molle:400i" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/add_transaction.css') }}">
    <link rel="stylesheet" href="{{ url('css/datepicker.css') }}">
    <link rel="stylesheet" href="{{ url('css/history.css') }}">

    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
</head>
<body>

<div id="wrapper" class="container">

    <header>
        <div class="row header">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> DEM</div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"> Daily Expense Manager</div>
        </div>
    </header>

    <div id="contents">
        @yield('content')
    </div>

    <footer>
        <a class="pull-right" href="/folder_view/vs.php?s=E:\GitHub\DailyExpenseManager\index.php" target="_blank">View
            Source</a>
        <address>
            <strong>Contact Us</strong>
            <a href="mailto:#dhruti.parekh@georgebrown.ca">dhruti.parekh@georgebrown.ca</a>
        </address>
        <section class="share">
            <a href="https://twitter.com/?lang=en" target="_blank"><span class="fa fa-twitter"></span></a>
            <a href="https://www.facebook.com/" target="_blank"><span class="fa fa-facebook"></span></a>
            <a href="https://www.google.ca/" target="_blank"><span class="fa fa-google-plus"></span></a>
        </section>
        <p>Copyright ©2016 Daily Expense Manager. All rights reserved.</p>
    </footer>

</div>


</body>
</html>