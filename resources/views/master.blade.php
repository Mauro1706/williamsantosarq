<!doctype html>
<html lang="bt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?= asset('img/arqws.jpg') ?>" type="image/x-icon">
    <title>ws.arq</title>

    <link rel="stylesheet" href="<?= asset('css/app.css'); ?>">
    <link rel="stylesheet" href="<?= asset('css/arqws.css'); ?>">
    <link rel="stylesheet" href="<?= asset('fontawesome6-web/css/all.css'); ?>">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= asset('assets/css/animate.css'); ?>">
    <link rel="stylesheet" href="<?= asset('assets/css/style.css'); ?>">
    
</head>

<body>
    @include('template.menu')
    <div class="">
        @yield('content')
    </div>
    @include('template.footer')
    <script src="<?= asset('js/app.js'); ?>"></script>

    <!-- Javascript -->
    <script src="<?= asset('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?= asset('assets/js/jquery-migrate-3.0.0.min.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= asset('assets/js/jquery.backstretch.min.js'); ?>"></script>
    <script src="<?= asset('assets/js/wow.min.js'); ?>"></script>
    <script src="<?= asset('assets/js/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?= asset('assets/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
    <script src="<?= asset('assets/js/scripts.js'); ?>"></script>
</body>

</html>