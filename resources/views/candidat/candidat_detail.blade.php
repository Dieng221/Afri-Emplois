@extends('layout/body')

@section('candidat_detail')

<!-- header -->
    @include('layout/header')
<!-- header END -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-4 mb-5 mb-lg-0 wow fadeIn">
            <div class="card border-0 shadow">
                <img src="https://www.bootdey.com/img/Content/avatar/avatar6.png" alt="...">
                <div class="card-body p-1-9 p-xl-5">
                    <div class="mb-4">
                        <h3 class="h4 mb-0">{{ $id->nom }}</h3>
                        <span class="text-primary">{{ $id->statut }}</span>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-3"><a href="#!"><i class="far fa-envelope display-25 me-3 text-secondary"></i>{{ $id->email }}</a></li>
                        <li class="mb-3"><a href="#!"><i class="fas fa-mobile-alt display-25 me-3 text-secondary"></i>{{ $id->salaire }}</a></li>
                        <li><a href="#!"><i class="fas fa-map-marker-alt display-25 me-3 text-secondary"></i>{{ $id->pays }}, {{ $id->ville }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="ps-lg-1-6 ps-xl-5">
                <div class="mb-5 wow fadeIn">
                    <div class="text-start mb-1-6 wow fadeIn">
                        <h2 class="h1 mb-0 text-primary">A propos</h2>
                    </div>
                    <p>{{ $id->description }}</p>
                </div>
                <div class="mb-5 wow fadeIn">
                    <div class="text-start mb-1-6 wow fadeIn">
                        <h2 class="mb-0 text-primary">Expérience</h2>
                    </div>
                    <div class="row mt-n4">
                        <div class="col-sm-6 col-xl-4 mt-4">
                            <div class="card text-center border-0 rounded-3">
                                <div class="card-body">
                                    <i class="ti-bookmark-alt icon-box medium rounded-3 mb-4"></i>
                                    <h3 class="h5 mb-3">Education</h3>
                                    <p class="mb-0">{{ $id->universite }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4 mt-4">
                            <div class="card text-center border-0 rounded-3">
                                <div class="card-body">
                                    <i class="ti-pencil-alt icon-box medium rounded-3 mb-4"></i>
                                    <h3 class="h5 mb-3">Formation</h3>
                                    <p class="mb-0">{{ $id->formation }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4 mt-4">
                            <div class="card text-center border-0 rounded-3">
                                <div class="card-body">
                                    <i class="ti-medall-alt icon-box medium rounded-3 mb-4"></i>
                                    <h3 class="h5 mb-3">Outils maîtrisés</h3>
                                    <p class="mb-0">{{ $id->outils }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
    @include('layout/footer')
<!-- Footer END -->

@endsection
