@extends('layout/body')

@section('connexion')


<div class="page-wraper">
<div id="loading-area"></div>
    <!-- header -->
        @include('layout/header')
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr2.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Connexion</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Accueil</a></li>
							<li>Login</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner-2 shop-account">
            <!-- Product -->
            <div class="container">
                <div class="row">
					<div class="col-md-12 text-center">
						<h3 class="font-weight-700 m-t0 m-b20">Connectez-vous à votre compte</h3>
					</div>
				</div>
                <div>
					<div class="max-w500 m-auto m-b30">
						<div class="p-a30 border-1 seth">
							<div class="tab-content nav">
								<form id="login" method="POST" action="/connexion.store" class="tab-pane active col-12 p-a0 ">
                                    @csrf
                                    @if (Session('message'))
                                    {{session('message')}}
                                    @endif
									<h4 class="font-weight-700">Connexion</h4>
									<p class="font-weight-600">Si vous avez un compte chez nous, veuillez vous connecter.</p>
									<div class="form-group">
										<label class="font-weight-700">E-MAIL *</label>
										<input name="email" required="" class="form-control" placeholder="Entrer votre email" type="email">
									</div>
									<div class="form-group">
										<label class="font-weight-700">Mot de passe *</label>
										<input name="password" required="" class="form-control " placeholder="Entrer votre mot de passe" type="password">
									</div>
									<div class="text-left">
										<button class="site-button m-r5 button-lg">Connexion</button>
										<a data-toggle="tab" href="#forgot-password" class="m-l5"><i class="fa fa-unlock-alt"></i> Mot de passe</a>
									</div>
								</form>
								<form id="forgot-password" class="tab-pane fade  col-12 p-a0">
									<h4 class="font-weight-700">Mot de passe oublier ?</h4>
									<p class="font-weight-600">Nous vous enverrons un e-mail pour réinitialiser votre mot de passe.</p>
									<div class="form-group">
										<label class="font-weight-700">E-MAIL *</label>
										<input name="dzName" required="" class="form-control" placeholder="Entrer votre mot de passe" type="email">
									</div>
									<div class="text-left">
										<a class="site-button outline gray button-lg" data-toggle="tab" href="#login">Retour</a>
										<button class="site-button pull-right button-lg">Connexion</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Product END -->
		</div>
		<!-- contact area  END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
        @include('layout/footer')
    <!-- Footer END -->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>

@endsection
