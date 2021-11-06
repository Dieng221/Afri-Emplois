@extends('layout/body')

@section('inscription')


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
                    <h1 class="text-white">S'inscrire</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Accueil</a></li>
							<li>S'inscrire</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner shop-account">
            <!-- Product -->
            <div class="container">
                <div class="row">
					<div class="col-md-12 text-center">
						<h3 class="font-weight-700 m-t0 m-b20">Créer un compte</h3>
					</div>
				</div>
                <div class="row">
					<div class="col-md-12 m-b30">
						<div class="p-a30 border-1  max-w500 m-auto">
							<div class="tab-content">
								<form id="login" action="/inscription.store" method="post" class="tab-pane active">
                                    @csrf
									<h4 class="font-weight-700">Information personnelle</h4>
									<p class="font-weight-600">Si vous avez un compte chez nous, veuillez vous connecter.</p>
									<div class="form-group">
										<label class="font-weight-700">Nom *</label>
										<input name="nom" required="" class="form-control" placeholder=" Entrer votre nom" type="text">
									</div>
									<div class="form-group">
										<label class="font-weight-700">Prenom *</label>
										<input name="prenom" required="" class="form-control" placeholder="Entrer votre prenom" type="text">
									</div>
									<div class="form-group">
										<label class="font-weight-700">E-MAIL *</label>
										<input name="email" required="" class="form-control" placeholder="Entrer votre email" type="email">
									</div>
                                    <div class="form-group">
										<label class="font-weight-700">Status *</label>
                                        <select name='statut'>
                                            <option>Candidat</option>
                                            <option>Recruteur</option>
                                        </select>
									</div>
									<div class="form-group">
										<label class="font-weight-700">Mot de passe *</label>
										<input name="password" required="" class="form-control " placeholder="Entrer votre mot de passe" type="password">
									</div>
                                    <div class="form-group">
										<label class="font-weight-700">Confirmer le mot de passe *</label>
										<input name="password_confirmation" required="" class="form-control " placeholder="Confirmer votre mot de passe" type="password">
									</div>
									<div class="text-left">
										<button class="site-button button-lg outline outline-2">S'incrire</button>
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
