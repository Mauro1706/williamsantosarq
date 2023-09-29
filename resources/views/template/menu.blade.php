<nav class="navbar navbar-expand-lg navbar-dark fixed-top text-center navtop">
  <div class="container" style="max-width:25em">
  
    <!-- open sidebar menu -->
    <a class="btn btn-menu open-menu" href="#" role="button">
        Menu
    </a>

    <img class="logo-nome text-center" src="<?= asset('img/logo-william-santos4.png'); ?>" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeB42GIz-29S7ji6Ejt-I3-NRLsUPEyxMYdXouNRfv_yftEag/viewform?usp=sf_link"
        target="_blank"
        class="btn btn-orcamento col-sm-8"
        style="left: 25em;">
        Solicitar Orçamento
    </a>
  </div>
</nav>

<!-- Wrapper -->
<div class="wrapper">

			<!-- Sidebar -->
			<nav class="sidebar light">
				
				<!-- close sidebar menu -->
				<div class="dismiss">
					<i class="fas fa-arrow-left"></i>
				</div>
				
				<div class="logo">
            <img class="bd-placeholder-img rounded-circle" src="<?= asset('img/logo.png'); ?>" alt="">
            <br>
            <img class="logo-nome iphone" src="<?= asset('img/logo-william-santos3.png'); ?>" alt="">
				</div>
				
				<ul class="list-unstyled menu-elements">
					{{-- <li class="active">
						<a class="scroll-link" href="#top-content"><i class="fas fa-home"></i> Home</a>
					</li> --}}
					<li>
						<a class="scroll-link" href="#section-1"><i class="fa fa-solid fa-shop"></i> O que nós fazemos</a>
					</li>
					<li>
						<a class="scroll-link" href="#section-2"><i class="fa fa-circle-info"></i> Sobre nós</a>
					</li>
					{{-- <li>
						<a class="scroll-link" href="#section-6"><i class="fas fa-envelope"></i> Contact us</a>
					</li>
					<li>
						<a href="#otherSections" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
							<i class="fas fa-sync"></i>Other sections
						</a>
						<ul class="collapse list-unstyled" id="otherSections">
							<li>
								<a class="scroll-link" href="#section-3">Our projects</a>
							</li>
							<li>
								<a class="scroll-link" href="#section-4">We think that...</a>
							</li>
						</ul>
					</li> --}}
				</ul>
				
				<div class="to-top">
					<a class="btn btn-primary btn-customized-3" href="#" role="button">
	                    <i class="fas fa-arrow-up"></i> Top
	                </a>
				</div>
				
				{{-- <div class="dark-light-buttons">
					<a class="btn btn-primary btn-customized-4 btn-customized-dark" href="#" role="button">Dark</a>
					<a class="btn btn-primary btn-customized-4 btn-customized-light" href="#" role="button">Light</a>
				</div> --}}
			
			</nav>
			<!-- End sidebar -->
</div>