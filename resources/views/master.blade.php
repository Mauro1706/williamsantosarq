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
</head>
@include('template.banner')
<body>
    @include('template.menu')
    <div class="container my-2">
        @yield('content')
    </div>

    @include('template.footer')
    <script src="<?= asset('js/app.js'); ?>"></script>
</body>

</html>