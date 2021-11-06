<header class="site-header mo-left header fullwidth">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion">
                    <a href="/"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- nav toggle button -->
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- extra nav -->
                <div class="extra-nav">
                    @auth
                    <div class="extra-cell">
                        <a href="#" class="site-button"> {{ Auth::user()->nom }}</a>
                        <a href="/deconnexion.destroy" class="site-button"><i class="fa fa-lock"></i>Déconnexion</a>
                    </div>
                    @endauth
                    @guest
                    <div class="extra-cell">
                        <a href="/inscription.create" class="site-button"><i class="fa fa-user"></i> S'inscrire</a>
                        <a href="/connexion.create" class="site-button"><i class="fa fa-lock"></i>Connexion</a>
                    </div>
                    @endguest

                </div>
                <!-- Quik search -->
                <div class="dez-quik-search bg-primary">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                        <span id="quik-search-remove"><i class="flaticon-close"></i></span>
                    </form>
                </div>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                    @auth
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="/">Accueil</i></a>
                        </li>
                        <li>
                            <a href="#">Candidats <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="/job" class="dez-page">Emplois</a></li>
                                <li><a href="/candidat" class="dez-page">Candidats</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Recruteurs <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="/candidat" class="dez-page">Candidats</a></li>
                                <li><a href="/job.create" class="dez-page">Poste d'emplois</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/a_propos">A propos</i></a>
                        </li>
                        <li>
                            <a href="/contact">Contact</i></a>
                        </li>
                    </ul>
                    @endauth
                    @guest
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="/">Home</i></a>
                        </li>
                        <li>
                            <a href="#">Candidats <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="/job" class="dez-page">Emplois</a></li>
                                <li><a href="/candidat" class="dez-page">Candidats</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Recruteurs <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="/candidat" class="dez-page">Candidats</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/a_propos">A propos</i></a>
                        </li>
                        <li>
                            <a href="/contact">Contact</i></a>
                        </li>
                    </ul>
                    @endguest
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
