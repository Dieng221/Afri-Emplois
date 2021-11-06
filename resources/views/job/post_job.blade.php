@extends('layout/body')

@section('post_job')

<div class="page-wraper">
    <div id="loading-area"></div>
        <!-- header -->
            @include('layout/header')
        <!-- header END -->
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="dez-bnr-inr overlay-black-dark" style="background-image:url(images/banner/bnr1.jpg);">
                <div class="container">
                    <div class="dez-bnr-inr-entry">
                        <h1 class="text-white">Poste d'emplois</h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="#">Home</a></li>
                                <li>Poste d'emplois</li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            <!-- contact area -->
            <div class="content-block">
                <!-- Submit Resume -->
                <div class="section-full bg-white submit-resume content-inner-2">
                    <div class="container">
                        <form method="POST" action="/job.store">
                            @csrf
                            <div class="form-group">
                                <label>Nom complet</label>
                                <input type="text" class="form-control" placeholder="Nom complet" name="nom">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="info@gmail.com" name="email">
                            </div>
                            <div class="form-group">
                                <label>Pays</label>
                                <input type="text" class="form-control" placeholder="Entrer votre pays" name="pays">
                            </div>
                            <div class="form-group">
                                <label>Ville</label>
                                <input type="text" class="form-control" placeholder="London" name="ville">
                            </div>
                            <div class="form-group">
                                <label>Proféssion</label>
                                <input type="text" class="form-control" placeholder="Developpeur web" name="profession">
                            </div>
                            <div class="form-group">
                                <label>Photo</label>
                                <div class="custom-file">
                                    <input type="file" class="site-button" id="customFile" name="photo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Salaire</label>
                                <input type="text" class="form-control" placeholder="8XXXXXFCFA" name="salaire">
                            </div>
                            <div class="form-group">
                                <label>Catégorie</label>
                                <input type="text" class="form-control" placeholder="Entrer la catégorie" name="categorie">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" placeholder="Description" name="description"></textarea>
                            </div>
                            <button type="submit" class="site-button">Envoyer</button>
                        </form>
                    </div>
                </div>
                <!-- Submit Resume END -->
            </div>
        </div>
        <!-- Content END-->
        <!-- Footer -->
            @include('layout/footer')
        <!-- Footer END -->
        <button class="scroltop fa fa-chevron-up"></button>
    </div>
    <script type="text/javascript">

                $("#exp-slider-range").slider({
                    range: true,
                    min: 0,
                    max: 10,
                    //values: [0, 10],
                    slide: function(event, ui) {
                        var min = ui.values[0],
                            max = ui.values[1];
                          $('#' + this.id).prev().val( min + " year - " + max + " year");
                    }
                });

                $("#salary-slider-range").slider({
                    range: true,
                    min: 10,
                    max: 100,
                    //values: [10, 1000],
                    slide: function(event, ui) {
                        var min = ui.values[0],
                            max = ui.values[1];
                          $('#' + this.id).prev().val(min + "K - " + max + "K");
                    }
                });

    </script>
@endsection
