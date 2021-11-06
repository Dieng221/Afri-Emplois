@extends('layout/body')

@section('index')

<div id="loading-area"></div>
<div class="page-wraper">

    @include('layout/header')

    <div class="page-content">
		<!-- Section Banner -->
		<div class="dez-bnr-inr dez-bnr-inr-md" style="background-image:url(images/main-slider/slide2.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry align-m ">
					<div class="find-job-bx">
						<p class="site-button button-sm">Trouver des opportunités ici</p>
						<h2>Recherchez<br/> <span class="text-primary">l'emploi</span> de votre rêve !</h2>
							<div class="row">
                                <button type="button" class="btn btn-primary btn-lg">Trouver un emploi</button>
                                <button type="button" class="btn btn-secondary btn-lg">Poster des emplois</button>
							</div>
					</div>
				</div>
            </div>
        </div>
		<!-- Section Banner END -->
        <!-- About Us -->
		<div class="section-full job-categories content-inner-2 bg-white" style="background-image:url(../images/pattern/pic1.html);">
			<div class="container">
				<div class="section-head d-flex head-counter clearfix">
					<div class="mr-auto">
						<h2 class="m-b5">Nos Categories</h2>
						<h6 class="fw3">Les catégories d'emplois disponibles</h6>
					</div>
					<div class="head-counter-bx">
						<h2 class="m-b5 counter">174</h2>
						<h6 class="fw3">Emplois Poster</h6>
					</div>
					<div class="head-counter-bx">
						<h2 class="m-b5 counter">120</h2>
						<h6 class="fw3">Temps plein</h6>
					</div>
					<div class="head-counter-bx">
						<h2 class="m-b5 counter">54</h2>
						<h6 class="fw3">Temps partial</h6>
					</div>
				</div>
				<div class="row sp20">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="icon-bx-wraper">
							<div class="icon-content">
								<div class="icon-md text-primary m-b20"><i class="ti-location-pin"></i></div>
								<a href="#" class="dez-tilte">Design, Art & Multimedia</a>
								<p class="m-a0">20 Emplois disponible</p>
								<div class="rotate-icon"><i class="ti-location-pin"></i></div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="icon-bx-wraper">
							<div class="icon-content">
								<div class="icon-md text-primary m-b20"><i class="ti-wand"></i></div>
								<a href="#" class="dez-tilte">Education nationale</a>
								<p class="m-a0">15 Emplois disponibles</p>
								<div class="rotate-icon"><i class="ti-wand"></i></div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="icon-bx-wraper">
							<div class="icon-content">
								<div class="icon-md text-primary m-b20"><i class="ti-wallet"></i></div>
								<a href="#" class="dez-tilte">Comptabilité et Finance</a>
								<p class="m-a0">25 Emplois disponibles</p>
								<div class="rotate-icon"><i class="ti-wallet"></i></div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="icon-bx-wraper">
							<div class="icon-content">
								<div class="icon-md text-primary m-b20"><i class="ti-cloud-up"></i></div>
								<a href="#" class="dez-tilte">Ressource humaine</a>
								<p class="m-a0">18 Emplois disponibles</p>
								<div class="rotate-icon"><i class="ti-cloud-up"></i></div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="icon-bx-wraper">
							<div class="icon-content">
								<div class="icon-md text-primary m-b20"><i class="ti-bar-chart"></i></div>
								<a href="#" class="dez-tilte">Télécommunications</a>
								<p class="m-a0">30 Emplois disponible</p>
								<div class="rotate-icon"><i class="ti-bar-chart"></i></div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="icon-bx-wraper">
							<div class="icon-content">
								<div class="icon-md text-primary m-b20"><i class="ti-tablet"></i></div>
								<a href="#" class="dez-tilte">Agent clientel</a>
								<p class="m-a0">8 Emplois disponibles</p>
								<div class="rotate-icon"><i class="ti-tablet"></i></div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="icon-bx-wraper">
							<div class="icon-content">
								<div class="icon-md text-primary m-b20"><i class="ti-camera"></i></div>
								<a href="#" class="dez-tilte">Construction / Installations</a>
								<p class="m-a0">19 Emplois disponibles</p>
								<div class="rotate-icon"><i class="ti-camera"></i></div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="icon-bx-wraper">
							<div class="icon-content">
								<div class="icon-md text-primary m-b20"><i class="ti-panel"></i></div>
								<a href="#" class="dez-tilte">Santé</a>
								<p class="m-a0">39 Emplois disponibles</p>
								<div class="rotate-icon"><i class="ti-panel"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- About Us END -->
		<!-- Call To Action -->
		<div class="section-full content-inner bg-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 section-head text-center">
						<h2 class="m-b5">Pays Africains</h2>
						<h6 class="fw4 m-b0">Les pays africains ayants postés des emplois</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic1.jpg)">
							<div class="city-info">
								<h5>Côte d'Ivoire</h5>
								<span>70 Emplois</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic2.jpg)">
							<div class="city-info">
								<h5>Mali</h5>
								<span>30 Emplois</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic3.jpg)">
							<div class="city-info">
								<h5>Senegal</h5>
								<span>68 Emplois</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic4.jpg)">
							<div class="city-info">
								<h5>Gambia</h5>
								<span>25 Emplois</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic5.jpg)">
							<div class="city-info">
								<h5>Nigéria</h5>
								<span>65 Emplois</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic6.jpg)">
							<div class="city-info">
								<h5>Guinée</h5>
								<span>23 Emplois</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic7.jpg)">
							<div class="city-info">
								<h5>Burkina</h5>
								<span>13 Emplois</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic8.jpg)">
							<div class="city-info">
								<h5>Maroc</h5>
								<span>33 Emplois</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Call To Action END -->
		<!-- Our Job -->
		<div class="section-full bg-white content-inner-2">
			<div class="container">
				<div class="d-flex job-title-bx section-head">
					<div class="mr-auto">
						<h2 class="m-b5">Emplois récent</h2>
						<h6 class="fw4 m-b0">Plus de 3 emplois récemment ajoutés</h5>
					</div>
					<div class="align-self-end">
						<a href="/candidat" class="site-button button-sm">Parcourir tous les emplois <i class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-9">
						<ul class="post-job-bx">
                            @foreach ($emplois as $emploi)
                            <li>
                                <a href="#">
                                    <div class="d-flex m-b30">
                                        <div class="job-post-company">
                                            <span><img src="images/logo/icon1.png"/></span>
                                        </div>
                                        <div class="job-post-info">
                                            <h4>{{$emploi->profession}}</h4>
                                            <ul>
                                                <li><i class="fa fa-bookmark-o"></i>{{$emploi->nom}}</li>
                                                <li><i class="fa fa-map-marker"></i>{{$emploi->pays}}, {{$emploi->ville}}</li>
                                                <li><i class="fa fa-clock-o"></i>{{$emploi->created_at}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="job-time mr-auto">
                                            <span>Temps plein</span>
                                        </div>
                                        <div class="salary-bx">
                                            <span>{{$emploi->salaire}}</span>
                                        </div>
                                    </div>
                                    <span class="post-like fa fa-heart-o"></span>
                                </a>
                            </li>
                            @endforeach
						</ul>
					</div>
					<div class="col-lg-3">
						<div class="sticky-top">
							<div class="candidates-are-sys m-b30">
								<div class="candidates-bx">
									<div class="testimonial-pic radius"><img src="images/testimonials/pic3.jpg" alt="" width="100" height="100"></div>
									<div class="testimonial-text">
										<p>Je viens de décrocher un emploi auquel j'ai postulé ! J'ai utilisé le site tout le temps pendant ma recherche d'emploi.</p>
									</div>
									<div class="testimonial-detail"> <strong class="testimonial-name">Charlène Kouassi</strong> <span class="testimonial-position">Paris, France</span> </div>
								</div>
							</div>
							<div class="quote-bx">
								<div class="quote-info">
									<h4>Passez à l'étape utilisateur !</h4>
									<p>Créer un compte AfriEmplois et décrochez votre emploi de rêve.</p>
									<a href="/inscription.create" class="site-button">Créer un compte</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Our Job END -->
		<!-- Call To Action -->
		<div class="section-full p-tb70 overlay-black-dark text-white text-center bg-img-fix" style="background-image: url(images/background/bg4.jpg);">
			<div class="container">
				<div class="section-head text-center text-white">
					<h2 class="m-b5">Témoignages</h2>
					<h5 class="fw4">Quelques mots des candidats</h5>
				</div>
				<div class="blog-carousel-center owl-carousel owl-none">
					<div class="item">
						<div class="testimonial-5">
							<div class="testimonial-text">
								<p>Grâce à cette plateforme j'ai pû réaliser mon rêve qui était de revenir en afrique et le servir dans mon domaine.</p>
							</div>
							<div class="testimonial-detail clearfix">
								<div class="testimonial-pic radius shadow">
									<img src="images/testimonials/pic2.jpg" width="100" height="100" alt="">
								</div>
								<strong class="testimonial-name">David Matin</strong>
								<span class="testimonial-position">Etudiant</span>
							</div>
						</div>
					</div>
                    <div class="item">
						<div class="testimonial-5">
							<div class="testimonial-text">
								<p>Très bonne initiative dans la mesure ou il permet de satisfaire les demandes des entreprises.</p>
							</div>
							<div class="testimonial-detail clearfix">
								<div class="testimonial-pic radius shadow">
									<img src="images/testimonials/pic1.jpg" width="100" height="100" alt="">
								</div>
								<strong class="testimonial-name">David Matin</strong>
								<span class="testimonial-position">Employer</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-5">
							<div class="testimonial-text">
								<p>Nous vous remiercions beaucoup, car grâce à j'ai pû décrocher un bon emploi.</p>
							</div>
							<div class="testimonial-detail clearfix">
								<div class="testimonial-pic radius shadow">
									<img src="images/testimonials/pic3.jpg" width="100" height="100" alt="">
								</div>
								<strong class="testimonial-name">David Matin</strong>
								<span class="testimonial-position">Étudiant</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Call To Action END -->
		<!-- Our Latest Blog -->
		<!-- Our Latest Blog -->
	</div>

    @include('layout/footer')

    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up" ></button>
</div>
@endsection
