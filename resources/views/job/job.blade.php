@extends('layout.body')

@section('container')


<div class="page-wraper">
<div id="loading-area"></div>
	<!-- header -->
        @include('layout.header')
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Liste des emplois</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Accueil</a></li>
							<li>Liste des emplois</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
			<!-- Browse Jobs -->
			<div class="section-full bg-white browse-job content-inner-2">
				<div class="container">
					<div class="row">
						<div class="col-xl-9 col-lg-8">
							<h5 class="widget-title font-weight-700 text-uppercase">Emplois récents</h5>
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
                                                    <li><i class="fa fa-bookmark-o"></i>{{$emploi->email}}</li>
													<li><i class="fa fa-map-marker"></i>{{$emploi->pays}}, {{$emploi->ville}}</li>
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
            <!-- Browse Jobs END -->
		</div>
    </div>
    <!-- Content END-->
	<!-- Footer -->
        @include('layout.footer')
    <!-- Footer END -->
    <button class="scroltop fa fa-chevron-up"></button>
</div>

@endsection
