@extends('layout.body')

@section('profil')
    <!-- header -->
        @include('layout.header')
    <!-- header END -->

    <div class="container">
        <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="account-settings">
                    <div class="user-profile">
                        <div class="user-avatar">
                            <img src="images/testimonials/pic1.jpg" style="border-radius: 50%;" alt="Maxwell Admin">
                        </div>
                        <h5 class="user-name">Dieng Ibrahima</h5>
                    </div>
                    <div class="about">
                        <h5>A propos</h5>
                        <p>Je suis Dieng Ibrahima, Developpeur web/mobile et infographe </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-2 text-primary">Informations personnelle</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="fullName">Nom</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Entrer votre nom">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="website">Prenom</label>
                            <input type="text" class="form-control" id="website" placeholder="Entrer votre prenom">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="eMail">Email</label>
                            <input type="email" class="form-control" id="eMail" placeholder="Entrer votre email">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label class="font-weight-700" for="phone">Statut</label>
                            <select name='statut' id="phone">
                                <option>Candidat</option>
                                <option>Recruteur</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" placeholder="Descripton">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="experience">Formation</label>
                            <input type="text" class="form-control" id="experience" placeholder="Entrer votre formation">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="experience">Outils maitrisé(s)</label>
                            <input type="text" class="form-control" id="experience" placeholder="Entrer les outils maitrisé(s)">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="experience">Salaire</label>
                            <input type="text" class="form-control" id="experience" placeholder="Entrer votre salaire">
                        </div>
                    </div>
                </div>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mt-3 mb-2 text-primary">Adresse</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="Street">Pays</label>
                            <input type="text" class="form-control" id="Street" placeholder="Entrer le pays">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="ciTy">Ville</label>
                            <input type="text" class="form-control" id="ciTy" placeholder="Entrer la ville">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="sTate">Université</label>
                            <input type="text" class="form-control" id="sTate" placeholder="Entrer votre université">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="zIp">Nationalité</label>
                            <input type="text" class="form-control" id="zIp" placeholder="Entrer votre nationalité">
                        </div>
                    </div>
                </div>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right">
                            <button type="button" id="submit" name="submit" class="btn btn-secondary">Annuler</button>
                            <button type="button" id="submit" name="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>

    <!-- Footer -->
        @include('layout.footer')
    <!-- Footer END -->
@endsection
