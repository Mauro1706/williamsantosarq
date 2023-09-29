@extends('master')

@section('content')
<!-- <h1 class="text-center my-5">Arquiteto <b>Willian Santos</b></h1> -->

<div class="text-center">
    <img class="logo bd-placeholder-img rounded-circle" src="<?= asset('img/logo.png'); ?>" alt="">
    <br>
    <img class="logo-nome iphone" src="<?= asset('img/logo-william-santos3.png'); ?>" alt="">
</div>

<div class="container text-center my-4">
    <a href="http://wa.me/5561985568375" target="_blank" class="btn btn-dark col-sm-8">
        <i class="fa-brands fa-whatsapp fa fa-lg mx-2"></i>Whatsapp
    </a>
</div>

<div class="container text-center my-4">
    <a href="https://www.instagram.com/williamsantos.arq/" target="_blank" class="btn btn-dark col-sm-8">
        <i class="fa-brands fa-instagram fa-lg mx-2"></i>Instagram
    </a>
</div>

<div class="container text-center my-4">
    <a href="mailto:" type="_blank" class="btn btn-dark col-sm-8">
        <i class="fa-regular fa-envelope fa fa-lg mx-2"></i>E-mail
    </a>
</div>

<div class="container text-center my-4">
    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeB42GIz-29S7ji6Ejt-I3-NRLsUPEyxMYdXouNRfv_yftEag/viewform?usp=sf_link"
        type="_blank" 
        class="btn btn-dark col-sm-8">
        <i class="fa-solid fa-money-bill-trend-up fa fa-lg mx-2"></i>Orçamento
    </a>
</div>

@endsection