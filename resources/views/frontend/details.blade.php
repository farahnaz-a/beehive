
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>B.hive | {{ $data->title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="{{ asset('uploads/portifolios') }}/{{ $data->image }}">


    <!-- Favicon -->

    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">

    <!-- all css here -->

    <link rel="stylesheet" href="{{ asset('proj_detail_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('proj_detail_assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('proj_detail_assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('proj_detail_assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('proj_detail_assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('proj_detail_assets/css/style.css') }}">
    <script src="{{ asset('proj_detail_assets/js/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script>
        $(document).ready(function () {
            $("#lang_flip").click(function () {
                $("#lang_panel").slideToggle("fast");
            });
        });
        $(document).ready(function () {
            $("#currency_flip").click(function () {
                $("#currency_panel").slideToggle("fast");
            });
        });
    </script>

</head>

<body>

    <!--=================Header Section Start===============-->

    <header>
        <div class="main_menu">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <nav class="navbar navbar-expand-lg py-0">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <h3 class="color_purple">b.hives</h3>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="">Comment ca marche ?</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Aide / Faq</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Nous concernant</a>
                                    </li>
                                </ul>
                                <div class="button text-center d-block d-lg-none pt-15 pb-20">
                                    <a href="{{ route('login') }}">Connection</a>
                                </div>
                            </div>
                            <div class="button d-none d-lg-block">
                                <a href="#">Connection</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- =================Header Section End=================== -->

    <!--==================Project Details Page Start================-->

    <section id="project_page" class="">
        <div class="container">
            <div class="project_icon d-flex justify-content-end pb-20">
                <h4><i class="far fa-heart"></i>Favoris</h4>
                <h4>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}&display=popup">
                        <i class="fas fa-external-link-alt"></i>Partager
                    </a>
                    </h4>
            </div>
            <!-- project banner -->
            <div class="project_banner" style="background-image: url({{ asset('uploads/portfolios') }}/{{ $data->image }});">
                <h2>{{ $data->title }}</h2>
                <div class="location">
                    <p><i class="fas fa-map-marker-alt"></i>{{ $data->city_name }}, France</p>
                </div>
                <div class="d-flex">
                    <h5>{{ $data->quantity_of_bricks }} Briques</h5>
                    <h5>540 Investisseurs</h5>
                    <h5>80% Financé</h5>
                </div>
            </div>
        </div>
        <!-- Project Tab -->
        <div class="container">
            <div class="project_tab position-relative">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                            aria-controls="pills-home" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Photos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                            aria-controls="pills-contact" aria-selected="false">Investisseurs</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <!-- description -->
                    <div class="tab-pane fade show active description" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="mapouter mb-35">
                                    <div class="gmap_canvas">
                                        <iframe width="100%" height="100%" id="gmap_canvas"
                                            src="{{ $data->map }}"
                                            frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"></iframe>
                                    </div>
                                </div>
                                <p>
                                   {{ $data->short_desc }}
                                </p>
                                <p>
                                    {{ $data->long_desc }}
                                </p>
                                <div class="profile_avatar">
                                    <img src="{{ asset('proj_detail_assets/images/project/Avatar.jpg') }}" alt="not-found">
                                    <div class="info">
                                        <h3>Melanie Parmentier</h3>
                                        <p><i class="fas fa-map-marker-alt"></i>Marseille, France</p>
                                        <h5>Projet<span>1</span></h5>
                                        <h5>Niveau<span>Débutant</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div id="" class="">
                                    <div id="card_sticky" class="all_cards">
                                        <div class="card card-1">
                                            <h2>Balance actuelle</h2>
                                            <h5>0 €</h5>
                                        </div>
                                        <div class="card card-2">
                                            <h2>{{ $data->price }} €</h2>
                                            <p>Sur 345,000 € de départ</p>
                                            <h5>{{ $data->ry }} r.o.i</h5>
                                            <p>Revenu annuel actuel</p>
                                            <div class="button mt-15">
                                                <a href="#">investir</a>
                                            </div>
                                        </div>
                                        <div class="card card-2">
                                            <h2 class="pb-10">Prochaines étapes </h2>
                                            <p>{{ $data->next_desc_1 }}</p>
                                            <p>{{ $data->next_desc_2 }}</p>
                                            <p>{{ $data->next_desc_3 }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photos -->
                    <div class="tab-pane fade photos" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="image image-1" style="background-image: url({{ asset('uploads/portfolios') }}/{{ $data->image }});
                                background-position: 0px -200px;"></div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($data->get_images as $key => $item)
                               @if($key == 0)
                               <div class="col-lg-7 col-md-6">
                                <div class="image image-2" style="background-image: url({{ asset('uploads/portfolios') }}/{{ $item->multi_image }});
                                background-position: 0px 0px;"></div>
                            </div>
                               @endif 
                            @endforeach
                            <div class="col-lg-5 col-md-6">
                           @foreach($data->get_images as $key => $value)
                               @if($key > 0)
                                <div class="image image-3" style="background-image: url({{ asset('uploads/portfolios') }}/{{ $item->multi_image }});
                                background-position: 0px 0px;"></div>
                               @endif
                               @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- investisseurs -->
                    <div class="tab-pane fade investors" id="pills-contact" role="tabpanel"
                        aria-labelledby="pills-contact-tab">
                        <h2 class="text-center pb-40">Investisseurs</h2>
                        <div class="all_investors">
                            <div class="row">
                                {{-- <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="investors_card text-center">
                                        <div class="img">
                                            <img src="images/project/invest-card-1.jpeg" alt="not-found">
                                        </div>
                                        <div>
                                            <h4>Alexandre Aubert</h4>
                                            <p><i class="fas fa-map-marker-alt"></i>Praha, Czech Republic</p>
                                        </div>
                                        <div class="number">
                                            <h5>12</h5>
                                            <i class="fas fa-th-large"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="investors_card text-center">
                                        <div class="img">
                                            <img src="images/project/invest-card-2.jpeg" alt="not-found">
                                        </div>
                                        <div>
                                            <h4>Alexandre Aubert</h4>
                                            <p><i class="fas fa-map-marker-alt"></i>Praha, Czech Republic</p>
                                        </div>
                                        <div class="number">
                                            <h5>12</h5>
                                            <i class="fas fa-th-large"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="investors_card text-center">
                                        <div class="img">
                                            <img src="images/project/invest-card-3.png" alt="not-found">
                                        </div>
                                        <div>
                                            <h4>Alexandre Aubert</h4>
                                            <p><i class="fas fa-map-marker-alt"></i>Praha, Czech Republic</p>
                                        </div>
                                        <div class="number">
                                            <h5>12</h5>
                                            <i class="fas fa-th-large"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="investors_card text-center">
                                        <div class="img">
                                            <img src="images/project/invest-card-4.jpeg" alt="not-found">
                                        </div>
                                        <div>
                                            <h4>Alexandre Aubert</h4>
                                            <p><i class="fas fa-map-marker-alt"></i>Praha, Czech Republic</p>
                                        </div>
                                        <div class="number">
                                            <h5>12</h5>
                                            <i class="fas fa-th-large"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="investors_card text-center">
                                        <div class="img">
                                            <img src="images/project/invest-card-1.jpeg" alt="not-found">
                                        </div>
                                        <div>
                                            <h4>Alexandre Aubert</h4>
                                            <p><i class="fas fa-map-marker-alt"></i>Praha, Czech Republic</p>
                                        </div>
                                        <div class="number">
                                            <h5>12</h5>
                                            <i class="fas fa-th-large"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="investors_card text-center">
                                        <div class="img">
                                            <img src="images/project/invest-card-2.jpeg" alt="not-found">
                                        </div>
                                        <div>
                                            <h4>Alexandre Aubert</h4>
                                            <p><i class="fas fa-map-marker-alt"></i>Praha, Czech Republic</p>
                                        </div>
                                        <div class="number">
                                            <h5>12</h5>
                                            <i class="fas fa-th-large"></i>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-lg-10">
                                    <h5>No investors yet</h5>
                                </div>
                            </div>
                            <div class="investors_bg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Hive -->
        <div class="about_hive">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 pt-40">
                        <h2>Quoi de <span>+</span> concernant ce Hive</h2>
                        <p>{{ $data->about_desc }}</p>
                    </div>
                    <div class="col-lg-8 pt-40">
                        <div class="row">
                            <div class="col-lg-9 ml-auto">
                                <img src="{{ asset('uploads/portfolios') }}/{{ $data->about_image_1 }}" class="img-fluid" alt="not-found">
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('uploads/portfolios') }}/{{ $data->about_image_2 }}" class="img-fluid" alt="not-found">
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('uploads/portfolios') }}/{{ $data->about_image_3 }}" class="img-fluid" alt="not-found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="project_footer pt-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer_item">
                            <h3>b.hives</h3>
                            <div id="lang_flip" class="toggle_flip footer_language mt-20">
                                Language <i class="fas fa-chevron-down"></i>
                                <div id="lang_panel" class="toggle_pannel">
                                    <a href="">English</a>
                                    <a href="">French</a>
                                </div>
                            </div>
                            <div id="currency_flip" class="footer_language toggle_flip">
                                Currency <i class="fas fa-chevron-down"></i>
                                <div id="currency_panel" class="toggle_pannel">
                                    <a href="">Eur €</a>
                                    <a href="">Pound £</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer_item">
                            <h4>b.hives</h4>
                            <a href="#">A propos de nous</a>
                            <a href="#">Jobs</a>
                            <a href="#">Presse</a>
                            <a href="#">Actus</a>
                            <a href="#">Glossaire</a>
                            <a href="#">FAQ</a>
                            <a href="#">Plan du site</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer_item">
                            <h4>Legal</h4>
                            <a href="#">Trust & Safety</a>
                            <a href="#">Travel Credit</a>
                            <a href="#">Airbnb Citizen</a>
                            <a href="#">Business Travel</a>
                            <a href="#">Guidebooks</a>
                            <a href="#">Airbnbmag</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer_item">
                            <h4>Decouvrir</h4>
                            <a href="#">CGU & CGV</a>
                            <a href="">Protection des donnees</a>
                            <a href="#">Politique des cookies</a>
                            <a href="#">Apporteurs de projet</a>
                        </div>
                    </div>
                </div>
                <div class="copy_right d-flex justify-content-between">
                    <p>© b.hives, Inc.</p>
                    <div class="icon d-flex">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==================Project Details Page End================-->


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary modal_btn" data-toggle="modal"
        data-target="#exampleModalCenter">investir</button>

    <!-- Modal -->
    <div class="modal invest_modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalCenterTitle">
                        Aperçu
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal_1">
                    <h2 class="color_green">5,000 €</h2>
                    <p class="pt-10">Balance disponible</p>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="montant">Montant (Eur)</label>
                                    <input type="text" id="montant" class="form-control" placeholder="A partir de 20 €">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="briques">Briques</label>
                                    <input type="text" id="briques" class="form-control" placeholder="Briques">
                                </div>
                            </div>
                        </div>
                        <p><b>Montant :</b> 245,000€ atteint sur 427,000 €</p>
                        <p><b>Briques :</b> 3,500 sur 21,350 </p>
                        <p class="color_purple"><b>1 brique = 20€</b></p>
                        <p class="termsandcondition d-none">
                            <input type="checkbox">
                            Tu reconnais avoir pris connaissance des <span class="color_green">terms et conditions d'utilisation</span>
                        </p>
                        <div class="modal-footer text-center mt-25">
                            <button type="button" class="continue_btn m-auto">Continuer</button>
                        </div>
                    </form>
                </div>
                <div class="modal-body modal_2">
                    <h2 class="color_green">5,000 €</h2>
                    <p class="pt-10">Balance disponible</p>
                    <div class="modal-footer text-center mt-30">
                        <button type="button" class="continue_btn m-auto">Thank you! Your submission has been
                            received!</button>
                    </div>
                    <script>
                        $('.continue_btn').click(function () {
                            $('.modal_1').hide()
                            $('.modal_2').show()
                        })
                    </script>
                </div>
            </div>
        </div>
    </div>

    <!-- JS here -->
    
    <script src="{{ asset('proj_detail_assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>

    <script src="{{ asset('proj_detail_assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('proj_detail_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('proj_detail_assets/js/aos.js') }}"></script>
    <script src="{{ asset('proj_detail_assets/js/script.js') }}"></script>
    <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function () {
            myFunction()
        };

        // Get the navbar
        var tab_menu = document.getElementById("pills-tab");

        // Get the offset position of the navbar
        var sticky_tab = tab_menu.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky_tab ) {
                tab_menu.classList.add("sticky_tab")
            } else {
                tab_menu.classList.remove("sticky_tab");
            }
        }
    </script>
    
</body>

</html>