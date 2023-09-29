@extends('master')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-100" src="<?= asset('img/carousel/foto01.png'); ?>" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Slider One Item</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
         Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-100" src="<?= asset('img/carousel/foto02.png'); ?>" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Slider One Item</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore.
         Deserunt excepturi quas vero.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-100" src="<?= asset('img/carousel/foto03.png'); ?>" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Slider One Item</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
         Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-100" src="<?= asset('img/carousel/foto04.jpg'); ?>" alt="Fourth slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Slider One Item</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
         Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-100" src="<?= asset('img/carousel/foto05.png'); ?>" alt="Fifth slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Slider One Item</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
         Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Section 1 -->
<div class="section-1-container section-container" id="section-1">
    <div class="container">
        <div class="row">
            <div class="col section-1 section-description wow fadeIn">
                <h2>O que nós fazemos</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-4 section-2-box wow fadeInUp">
                <img src="<?= asset('img/estrutural.png'); ?>" alt="">
            </div>
            <div class="col-8 section-2-box wow fadeInLeft">
                <h3>Projeto Estrutural</h3>
                <p class="medium-paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    Ut wisi enim ad minim veniam, quis nostrud. 
                    Exerci tation ullamcorper suscipit <a href="#">lobortis nisl</a> ut aliquip ex ea commodo consequat. 
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. 
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-8 section-2-box wow fadeInLeft">
                <h3>Interiores</h3>
                <p class="medium-paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    Ut wisi enim ad minim veniam, quis nostrud. 
                    Exerci tation ullamcorper suscipit <a href="#">lobortis nisl</a> ut aliquip ex ea commodo consequat. 
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. 
                </p>
            </div>
            <div class="col-4 section-2-box wow fadeInUp">
                <img src="<?= asset('img/interior.png'); ?>" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-4 section-2-box wow fadeInUp">
                <img src="<?= asset('img/lazer.png'); ?>" alt="">
            </div>
            <div class="col-8 section-2-box wow fadeInLeft">
                <h3>Lazer</h3>
                <p class="medium-paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    Ut wisi enim ad minim veniam, quis nostrud. 
                    Exerci tation ullamcorper suscipit <a href="#">lobortis nisl</a> ut aliquip ex ea commodo consequat. 
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. 
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Section 2 -->
<div class="section-2-container section-container section-container-gray-bg" id="section-2">
    <div class="container">
        <div class="row">
            <div class="col section-2 section-description wow fadeIn">
            </div>
        </div>
        <div class="row">
            <div class="col-8 section-2-box wow fadeInLeft">
                <h3>Sobre nós</h3>
                <p class="medium-paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    Ut wisi enim ad minim veniam, quis nostrud. 
                    Exerci tation ullamcorper suscipit <a href="#">lobortis nisl</a> ut aliquip ex ea commodo consequat. 
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. 
                </p>
            </div>
            <div class="col-4 section-2-box wow fadeInUp">
                <img src="<?= asset('img/williamSantos.png'); ?>" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Section 1 -->
<div class="section-3-container section-container" id="section-3">
    <!-- Footer -->
    <div class="page-footer font-small blue pt-4">
        <a href="http://wa.me/5561985568375" target="_blank" class="btn"
            title="Solicitação de orçamento por Whatsapp">
            <i class="fa-brands fa-whatsapp fa fa-lg mx-2"></i><br>Whatsapp
        </a>
        <a href="https://www.instagram.com/williamsantos.arq/" target="_blank" class="btn" tile="Instagram">
            <i class="fa-brands fa-instagram fa-lg mx-2"></i><br>Instagram
        </a>
        <a href="mailto:" type="_blank" class="btn" title="E-mail">
            <i class="fa-regular fa-envelope fa fa-lg mx-2"></i><br>E-mail
        </a>
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2023 Copyright:
            <a href="#"> <b>BluePuzzle</b></a>
        </div>
        <!-- Copyright -->
    </div>
</div>
<!-- Footer -->
@endsection