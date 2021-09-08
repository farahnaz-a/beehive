@php
    $projects = \App\Models\Portfolio::where('city_name', $data->id)->get();
@endphp
<!DOCTYPE html>
        <!-- Last Published: Tue Aug 24 2021 20:29:02 GMT+0000 (Coordinated Universal Time) -->
        <html data-wf-domain="bhives.webflow.io" data-wf-page="61141f113bebc5a350a2731d"
            data-wf-site="604b733c887fc763fe20f216" data-wf-status="1" lang="en">

        <head>
            <meta charset="utf-8" />
            <title>{{ $data->name }}</title>
            <meta content="{{ $data->name }}" property="og:title" />
            <meta content="{{ $data->name }}" property="twitter:title" />
            <meta content="width=device-width, initial-scale=1" name="viewport" />
            <meta content="Webflow" name="generator" />
            <link href="{{ asset('citydetails/style.css') }}"
                rel="stylesheet" type="text/css" />
            <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript">
            </script>
            <script type="text/javascript">
                WebFont.load({
                    google: {
                        families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic",
                            "Merriweather:300,300italic,400,400italic,700,700italic,900,900italic",
                            "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic",
                            "Varela Round:400", "DM Sans:regular,500,700",
                            "Inter:200,300,regular,500,600,700,800",
                            "Poppins:100,200,300,regular,500,600,700,800,900"
                        ]
                    }
                });

            </script>
            <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
            <script type="text/javascript">
                ! function (o, c) {
                    var n = c.documentElement,
                        t = " w-mod-";
                    n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (
                        n.className += t + "touch")
                }(window, document);

            </script>
            <link href="https://uploads-ssl.webflow.com/604b733c887fc763fe20f216/611de73dc6e3a440a9c0a84e_icon_smll.png"
                rel="shortcut icon" type="image/x-icon" />
            <link href="https://uploads-ssl.webflow.com/604b733c887fc763fe20f216/611de6d9b9d58fcb6b1eb478_icon.png"
                rel="apple-touch-icon" />
            <script src="https://scripts.v1.authpack.io/index.js" data-key="wga-client-key-166b17158ebe25036bb466bc4">
            </script>
            {{-- <script type="text/javascript">
                window.__WEBFLOW_CURRENCY_SETTINGS = {
                    "currencyCode": "USD",
                    "$init": true,
                    "symbol": "$",
                    "decimal": ".",
                    "fractionDigits": 2,
                    "group": ",",
                    "template": "{{wf {\"path\":\"symbol\",\"type\":\"PlainText\"} }} {{wf {\"path\":\"amount\",\"type\":\"CommercePrice\"} }} {{wf {\"path\":\"currencyCode\",\"type\":\"PlainText\"} }}",
                    "hideDecimalForWholeNumbers": false
                };

            </script> --}}
        </head>

        <body class="body-24">
            @auth
            <div data-collapse="medium" data-animation="over-left" data-duration="400" data-doc-height="1" role="banner"
                class="nav-top connected w-nav">
                <div class="navigation-container w-container">
                    <div class="div-block-6387">
                        <div class="w-nav-button"><img
                                src="https://uploads-ssl.webflow.com/604b733c887fc763fe20f216/60e9816bd34c3d51041643fb_60dca32b27ab1d2e3248dab3_menu.svg"
                                loading="lazy" alt="" /></div>
                        <div class="navigation-left headerco"><a href="#" class="brand-8 w-nav-brand"><img
                                    src="https://uploads-ssl.webflow.com/604b733c887fc763fe20f216/611666db24b4ca371ecda4e8_Untitled-3.png"
                                    loading="lazy" width="40" height="40" alt="" /></a></div>
                        <nav role="navigation" class="nav-menu w-nav-menu">
                            <a href="{{ route('customer.dashboard') }}"
                                class="nav-link-25 w-nav-link">Dashboard
                            </a>
                            <a href="{{ route('make.deposit') }}"
                                class="nav-link-25 w-nav-link">Retirer / Déposer
                            </a>
                                <a href="/find-a-project"
                                class="nav-link-25 w-nav-link">Trouver un projet
                            </a>
                            </nav>
                        <div class="navigation-right headerco">
                            <div class="div-block-6391">
                                @auth
                                <div class="div-block-6506">
                                    <div class="text-block-625"></div>
                                    <div class="text-block-625"></div>
                                </div>
                            </div>
                            <div data-hover="" data-delay="0" class="dropdown-40 w-dropdown">
                                
                                <div class="dropdown-toggle-44 w-dropdown-toggle">
                                    <div class="icon-40 w-icon-dropdown-toggle"></div>
                                    <div class="div-block-633"><img
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            loading="lazy" width="40" height="40" alt="" class="image-137" />
                                        <div class="text-block-467">Dropdown</div>
                                    </div>
                                </div>
                                @endauth
                                <nav class="dropdown-list-16 w-dropdown-list"><a href="{{ route('customer.dashboard') }}"
                                        class="nav-link-32 w-nav-link">Paramètres</a>
                                    <div class="div-block-6383 premium">
                                        <div class="form-block-4 w-form">
                                            <form id="email-form" name="email-form" data-name="Email Form"><label
                                                    class="w-checkbox switch-field">
                                                    <div
                                                        class="w-checkbox-input w-checkbox-input--inputType-custom switch-input">
                                                    </div><input type="checkbox" id="checkbox-3" name="checkbox-3"
                                                        data-name="Checkbox 3"
                                                        style="opacity:0;position:absolute;z-index:-1" /><span
                                                        class="checkbox-label-7 w-form-label">Passer Premium</span>
                                                </label></form>
                                            <div class="form-success w-form-done">
                                                <div>Thank you ! Your submission has been received !</div>
                                            </div>
                                            <div class="form-error w-form-fail">
                                                <div>Oops ! Something went wrong while submitting the form.</div>
                                            </div>
                                        </div>
                                    </div><a href="/dashboard" class="nav-link-32 w-nav-link">Vendre mon bien</a><a
                                        href="/dashboard" class="nav-link-32 w-nav-link">FAQ / Aide</a>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf 
                                            <a
                                            href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();" class="nav-link-32 w-nav-link">Se déconnecter</a>
                                        </form>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endauth 
            @guest
            <div data-collapse="medium" data-animation="over-left" data-duration="400" role="banner" class="nav-top homepage w-nav">
                <div class="navigation-container w-container">
                  <div class="div-block-6387">
                    <div class="menu-button-9 w-nav-button"><img src="https://uploads-ssl.webflow.com/604b733c887fc763fe20f216/60e9816bd34c3d51041643fb_60dca32b27ab1d2e3248dab3_menu.svg" loading="lazy" alt=""></div>
                    <div class="navigation-left">
                      <a href="{{ url('/') }}" class="brand-8 w-nav-brand"><img src="https://uploads-ssl.webflow.com/604b733c887fc763fe20f216/611666db24b4ca371ecda4e8_Untitled-3.png" loading="lazy" width="40" alt="b.hives Logo"></a>
                    </div>
                    <nav role="navigation" class="nav-menu-18 w-nav-menu">
                      <div class="nav-menu-links-3">
                        <a href="#steps" class="nav-link-31 w-inline-block">
                          <div class="link-text-3">Comment ca marche</div>
                          <div class="link-cover header"></div>
                        </a>
                        <a href="#last" class="nav-link-31 w-inline-block">
                          <div class="link-text-3">Derniers projets</div>
                          <div class="link-cover header"></div>
                        </a>
                        <a href="#prices" class="nav-link-31 w-inline-block">
                          <div class="link-text-3">Tarifs</div>
                          <div class="link-cover header"></div>
                        </a>
                        <a href="#FAQ" class="nav-link-31 w-inline-block">
                          <div class="link-text-3">Aide / FAQ</div>
                          <div class="link-cover header"></div>
                        </a>
                      </div>
                      <div class="mobile-destinations-wrapper">
                        <div class="subtitle-intro-wrapper-2">
                          <div class="subtitle-12">Destinations</div>
                          <div id="w-node-_76ddff02-2f6c-8f77-cdf2-ce0e3fe564ab-3fe5648d" class="horizontal-line-2"></div>
                        </div>
                        <div class="mobile-destinations w-dyn-list">
                          <div role="list" class="mobile-destinations-list w-dyn-items">
                            <div role="listitem" class="w-dyn-item"></div>
                          </div>
                          <div class="w-dyn-empty">
                            <div>No items found.</div>
                          </div>
                        </div>
                      </div>
                    </nav>
                    <div class="navigation-right">
                      <div data-hover="false" data-delay="400" id="w-node-_76ddff02-2f6c-8f77-cdf2-ce0e3fe564b3-3fe5648d" data-w-id="76ddff02-2f6c-8f77-cdf2-ce0e3fe564b3" class="nav-button-2 w-dropdown">
                        <div data-w-id="76ddff02-2f6c-8f77-cdf2-ce0e3fe564b4" class="button create-an-account w-dropdown-toggle">
                          <div>Créer un compte</div>
                          <div data-w-id="76ddff02-2f6c-8f77-cdf2-ce0e3fe564b7" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/60c7009561a1025ac26bd3ae/60c7009561a10224436bd411_Light-dropdown.json" data-loop="0" data-direction="1" data-autoplay="0" data-is-ix2-target="1" data-renderer="svg" data-default-duration="2" data-duration="0" data-ix2-initial-state="50" class="dropdown-lottie"></div>
                        </div>
                        <nav class="dropdown-list-14 flex-left w-dropdown-list">
                          <div class="dropdown-wrapper-2">
                            <div id="w-node-_76ddff02-2f6c-8f77-cdf2-ce0e3fe564ba-3fe5648d" class="subtitle-intro-wrapper-2">
                              <div class="subtitle-11">Type de compte</div>
                              <div id="w-node-_76ddff02-2f6c-8f77-cdf2-ce0e3fe564bd-3fe5648d" class="horizontal-line-2"></div>
                            </div>
                            <div class="div-block-6591">
                              <div>
                                <h4 class="heading-247">Investisseurs</h4>
                              </div>
                              <div>
                                <h4 class="heading-247">Propriétaires</h4>
                              </div>
                              <div>
                                <h4 class="heading-247">Professionnels <span class="text-span-253">Bientôt</span></h4>
                              </div>
                            </div>
                          </div>
                        </nav>
                      </div>
                      <div class="div-block-6523">
                        <a data-authpack="open" href="{{ route('login') }}" class="button-hero small w-button">Connexion</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endguest
            <div class="listingprojectstown wf-section">
                <div class="grid-wrapper-5">
                    <div id="w-node-_7338c6ae-fc66-7c55-bbbc-480edecb4e86-50a2731d" class="projects-dual-grid">
                        <div class="sticky-project-right">
                            <div class="cities-slide-content">
                                <div class="featured-project-info">
                                    <div id="w-node-_7338c6ae-fc66-7c55-bbbc-480edecb4e8c-50a2731d"
                                        class="div-block-6582">
                                        <div class="subtitle-wrapper">
                                            <div class="subtitle-9">{{ $data->region }}</div>
                                        </div>
                                        <h1 class="heading-228">{{ $data->name }}<br /><span
                                                class="text-span-256">{{ $data->country }}</span></h1>
                                    </div><a id="w-node-_7338c6ae-fc66-7c55-bbbc-480edecb4e92-50a2731d" href="#"
                                        class="button-hero w-inline-block">
                                        <div>Afficher la map</div>
                                    </a>
                                </div>
                            </div>
                            <div class="slider-background-wrapper hero-wrapper">
                                <div class="slider-background locations-background">

    <div class="background one" style="    background-image: url('{{ asset('uploads/cities') }}/{{ $data->slider_image }}');">
                                        <div class="slide-three-overlay"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="projects-items">
                            <div class="projects-results">
                                <div id="w-node-_7338c6ae-fc66-7c55-bbbc-480edecb4eb3-50a2731d"
                                    class="subtitle-intro-wrapper-2">
                                    <div class="subtitle-11">
                                        <div>{{ $projects->count() }}</div>
                                        <div class="text-block-634">{{ ($projects->count() == 1) ? 'Projet' : 'Projets' }}</div>
                                    </div>
                                    <div id="w-node-_7338c6ae-fc66-7c55-bbbc-480edecb4eb9-50a2731d"
                                        class="horizontal-line-2"></div>
                                </div>
                                <div id="w-node-d3909be9-ef3f-9c8f-4198-a55ef200b15d-50a2731d" class="filters">
                                    <div data-hover="" data-delay="0"
                                        id="w-node-cbd07650-d132-9fae-4cc7-7dc0d5712969-50a2731d"
                                        class="dropdown-49 w-dropdown">
                                        <div class="dropdown-toggle-53 w-dropdown-toggle">
                                            <div class="icon-43 w-icon-dropdown-toggle"></div>
                                            <div class="text-block-632">Type de projet</div>
                                        </div>
                                        <nav class="dropdown-list-22 w-dropdown-list">
                                            <div class="form-block-21 w-form">
                                                <form id="wf-form-Project-type" name="wf-form-Project-type"
                                                    data-name="Project type" class="form-24"><label
                                                        class="w-checkbox checkbox-field-8"><input type="checkbox"
                                                            id="checkbox-4" name="checkbox-4" data-name="Checkbox 4"
                                                            class="w-checkbox-input" /><span
                                                            class="checkbox-label-13 w-form-label">Prêt</span></label>
                                                    <div class="div-block-6594"></div><label
                                                        class="w-checkbox checkbox-field-8"><input type="checkbox"
                                                            id="checkbox-4" name="checkbox-4" data-name="Checkbox 4"
                                                            class="w-checkbox-input" /><span
                                                            class="checkbox-label-13 w-form-label">Investissement</span></label>
                                                </form>
                                                <div class="w-form-done">
                                                    <div>Thank you ! Your submission has been received !</div>
                                                </div>
                                                <div class="w-form-fail">
                                                    <div>Oops ! Something went wrong while submitting the form.</div>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                    <div data-hover="" data-delay="0"
                                        id="w-node-_4aadc504-0e97-a7bb-ad21-065c1272b0c4-50a2731d"
                                        class="dropdown-49 w-dropdown">
                                        <div class="dropdown-toggle-53 w-dropdown-toggle">
                                            <div class="icon-43 w-icon-dropdown-toggle"></div>
                                            <div class="text-block-632">Label</div>
                                        </div>
                                        <nav class="w-dropdown-list">
                                            <div class="form-block-21 w-form">
                                                <form id="wf-form-Label" name="wf-form-Label" data-name="Label"
                                                    class="form-24"><label class="w-checkbox checkbox-field-8"><input
                                                            type="checkbox" id="checkbox-4" name="checkbox-4"
                                                            data-name="Checkbox 4" class="w-checkbox-input" /><span
                                                            class="checkbox-label-13 w-form-label">Dernière chance
                                                            !</span></label>
                                                    <div class="div-block-6594"></div><label
                                                        class="w-checkbox checkbox-field-8"><input type="checkbox"
                                                            id="checkbox-4" name="checkbox-4" data-name="Checkbox 4"
                                                            class="w-checkbox-input" /><span
                                                            class="checkbox-label-13 w-form-label">Zoom
                                                            sur</span></label>
                                                    <div class="div-block-6594"></div><label
                                                        class="w-checkbox checkbox-field-8"><input type="checkbox"
                                                            id="checkbox-4" name="checkbox-4" data-name="Checkbox 4"
                                                            class="w-checkbox-input" /><span
                                                            class="checkbox-label-13 w-form-label">Premium</span></label>
                                                </form>
                                                <div class="w-form-done">
                                                    <div>Thank you ! Your submission has been received !</div>
                                                </div>
                                                <div class="w-form-fail">
                                                    <div>Oops ! Something went wrong while submitting the form.</div>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                    <div data-hover="" data-delay="0"
                                        id="w-node-_1caf491e-1a92-2fcb-33da-b9e69e99754a-50a2731d"
                                        class="dropdown-49 w-dropdown">
                                        <div class="dropdown-toggle-53 w-dropdown-toggle">
                                            <div class="icon-43 w-icon-dropdown-toggle"></div>
                                            <div class="text-block-632">A partir de </div>
                                        </div>
                                        <nav class="w-dropdown-list"><a href="#" class="w-dropdown-link">Link 1</a><a
                                                href="#" class="w-dropdown-link">Link 2</a><a href="#"
                                                class="w-dropdown-link">Link 3</a></nav>
                                    </div>
                                </div>
                                <div id="w-node-_3d5382cf-4f90-fd1c-bd40-deaab59eb8af-50a2731d" class="div-block-6595">
                                    <div class="w-dyn-list">
                                        <div role="list" class="w-dyn-items">
                                            @forelse ($projects as $portfolio)
                                            <div role="listitem" class="blog-collection-short-2 w-dyn-item">
                                                <div class="blog-link-2 blog-flex">
                                                    <div data-animation="slide" data-duration="500" data-infinite="1"
                                                        class="div-block-6455 w-slider">
                                                        <div class="mask-8 w-slider-mask">
                                                            <div class="slide-14 w-slide"><img
                                                                src="{{ asset('uploads/portfolios') }}/{{ $portfolio->image }}"
                                                                alt="" class="blog-image-2" /></div>
                                                            @foreach($portfolio->get_images as $key => $value)
                                                            @if($key > 0)
                                                             <div class="slide-14 w-slide"><img
                                                                src="{{ asset('uploads/portfolios') }}/{{ $value->multi_image }}"
                                                                alt="" class="blog-image-2" /></div>
                                                            @endif
                                                            @endforeach
                                                            <div class="slide-14 w-slide"><img
                                                                    src="https://uploads-ssl.webflow.com/604b733d887fc7116420f235/605709d7dad564d9874d0418_604b7f93a93db1080381f027_12.jpeg"
                                                                    alt="" class="blog-image-2" /></div>
                                                            <div class="slide-15 w-slide"></div>
                                                        </div>
                                                        <div class="left-arrow-8 w-slider-arrow-left">
                                                            <div class="icon-42 w-icon-slider-left"></div>
                                                        </div>
                                                        <div class="right-arrow-7 w-slider-arrow-right">
                                                            <div class="icon-41 w-icon-slider-right"></div>
                                                        </div>
                                                        <div class="slide-nav-5 w-slider-nav w-round"></div>
                                                    </div>
                                                    <div class="blog-content-2">
                                                        <div id="w-node-_7df19192-2e4b-9a79-5d23-48bad239b4d7-50a2731d"
                                                            class="div-block-6589 left">
                                                            <div class="div-block-6588">
                                                                <div class="text-block-631">Prêt</div>
                                                            </div>
                                                            <div class="div-block-6596">
                                                                <div style="color:#f14a59;background-color:#fef1f2"
                                                                    class="text-block-622">Dernière chance !</div>
                                                            </div>
                                                        </div>
                                                        <div id="w-node-_3d5382cf-4f90-fd1c-bd40-deaab59eb8bf-50a2731d"
                                                            class="div-block-6508 left"><a
                                                                id="w-node-_3d5382cf-4f90-fd1c-bd40-deaab59eb8c0-50a2731d"
                                                                href="{{ route('project.details', $portfolio->id) }}"
                                                                class="link-block-34 w-inline-block">
                                                                <h3 class="heading-242">{{ $portfolio->title }}
                                                                </h3>
                                                            </a>
                                                            <div class="div-block-6572">
                                                                <div class="div-block-6509">
                                                                    <div class="text-block-623"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-block-575">@convert($portfolio->price) {{ $portfolio->curr }}</div>
                                                        <div class="w-layout-grid grid-88">
                                                            <div class="div-block-6593">
                                                                <div class="div-block-6458">
                                                                    <div class="text-block-580">{{ $portfolio->quantity_of_bricks }}</div>
                                                                    <div class="text-block-577">Briques</div>
                                                                </div>
                                                            </div>
                                                            <div class="div-block-6593">
                                                                <div class="div-block-6458">
                                                                    @php
                                                                           $bricks     = \App\Models\Brick::where('portfolio_id', $portfolio->id)->get();
                                                                    @endphp
                                                                    <div class="text-block-580">{{ $bricks->count() }}</div>
                                                                    <div class="text-block-577">Investisseurs</div>
                                                                </div>
                                                            </div>
                                                            <div class="div-block-6593">
                                                                <div class="div-block-6458">
                                                                    
                                                                    <div class="text-block-580">{{ floor(($bricks->sum('bricks_qty')/$portfolio->quantity_of_bricks)*100) }}%</div>
                                                                    <div class="text-block-577">Financé</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                                <p>No projects</p>
                                            @endforelse
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-us-section projects-city wf-section">
                <div data-w-id="0e0bfb7e-2109-a985-b3ca-79257daf99b7" class="grid-wrapper-5">
                    <div id="w-node-_0e0bfb7e-2109-a985-b3ca-79257daf99b8-50a2731d" class="grey-cover-2 marketinfos">
                    </div>
                    <div id="w-node-_0e0bfb7e-2109-a985-b3ca-79257daf99b9-50a2731d" class="about-wrapper">
                        <div class="about-intro">
                            <div class="div-block-6519">
                                <h1 class="heading-227">{{ $data->title }}<br /></h1>
                                <div class="text-block-455"><span class="text-span-245">Dernière mise a jour : </span>
                                    @php                                           
                                    \Carbon\Carbon::setLocale('es'); 
                                    $date_to_show_in_view = $data->created_at->format('d M Y');                                            
                                    @endphp
                                    {{ $date_to_show_in_view }}</div>
                                <div class="div-block-6511">
                                    <p class="paragraphe-normal">{{ $data->description_1 }}</p>
                                    <p class="paragraphe-normal">{{ $data->description_2 }}</p>
                                    {{-- <a href="#" class="link-block-24 w-inline-block">
                                        <div class="text-block-581">Afficher plus</div>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                        <div id="w-node-_0e0bfb7e-2109-a985-b3ca-79257daf99bf-50a2731d" class="stacked-paragraphs"><img
                                src="{{ asset('uploads/cities') }}/{{ $data->image }}"
                                loading="lazy"
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 91vw, (max-width: 991px) 79vw, (max-width: 1279px) 33vw, (max-width: 1919px) 34vw, 522.84375px"
                                srcset="{{ asset('uploads/cities') }}/{{ $data->image }} 500w, {{ asset('uploads/cities') }}/{{ $data->image }} 800w, {{ asset('uploads/cities') }}/{{ $data->image }} 1418w"
                                alt="" />
                            </div>
                    </div>
                </div>
            </div>
            <div class="content-section ghost">
                <div class="container-1200">
                    <div class="latest-posts-2">
                        <div class="title-wrap-4">
                            <div class="div-block-6571">
                                <h1 class="heading-211">Autres villes où investir en France</h1>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="popular-cities-2">
                            <div class="cities-tabs-wrapper">
                                <div data-duration-out="500" data-duration-in="500" class="cities-tabs w-tabs">
                                    <div class="cities-tab-menu w-tab-menu"><a data-w-tab="Tab 1"
                                            id="w-node-ee4e079f-317f-1187-3d10-a1f7e8b34f8e-50a2731d"
                                            data-w-id="ee4e079f-317f-1187-3d10-a1f7e8b34f8e"
                                            class="vacations-tab-link-3 w-inline-block w-tab-link w--current">
                                            <div class="membership-circle">
                                                <div class="membership-dot one"></div>
                                                <div class="membership-outline-circle-2"></div>
                                            </div>
                                            <div class="famous-city">Paris</div>
                                        </a><a data-w-tab="Tab 3"
                                            id="w-node-ee4e079f-317f-1187-3d10-a1f7e8b34f94-50a2731d"
                                            data-w-id="ee4e079f-317f-1187-3d10-a1f7e8b34f94"
                                            class="vacations-tab-link-3 w-inline-block w-tab-link">
                                            <div class="membership-circle">
                                                <div class="membership-dot two"></div>
                                                <div class="membership-outline-circle-2"></div>
                                            </div>
                                            <div class="famous-city">Lyon</div>
                                        </a><a data-w-tab="Tab 4"
                                            id="w-node-ee4e079f-317f-1187-3d10-a1f7e8b34f9a-50a2731d"
                                            data-w-id="ee4e079f-317f-1187-3d10-a1f7e8b34f9a"
                                            class="vacations-tab-link-3 w-inline-block w-tab-link">
                                            <div class="membership-circle">
                                                <div class="membership-dot three"></div>
                                                <div class="membership-outline-circle-2"></div>
                                            </div>
                                            <div class="famous-city">Marseille</div>
                                        </a><a data-w-tab="Tab 5"
                                            id="w-node-ee4e079f-317f-1187-3d10-a1f7e8b34fa0-50a2731d"
                                            data-w-id="ee4e079f-317f-1187-3d10-a1f7e8b34fa0"
                                            class="vacations-tab-link-3 w-inline-block w-tab-link">
                                            <div class="membership-circle">
                                                <div class="membership-dot four"></div>
                                                <div class="membership-outline-circle-2"></div>
                                            </div>
                                            <div class="famous-city">Bordeaux</div>
                                        </a></div>
                                    <div class="cities-tabs-content w-tab-content">
                                        <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                                            <div class="collection-list-wrapper-17 w-dyn-list">
                                                <div role="list" class="cities-project-wrapper w-dyn-items">
                                                    @forelse ($paris as $pari)
                                                    <div role="listitem" class="popular-cities-item-2 w-dyn-item">
                                                        <div data-w-id="ee4e079f-317f-1187-3d10-a1f7e8b34fab"
                                                            class="project-verticle-card-3">
                                                            <div class="verticle-card-image">
                                                                <div class="hero-background-image-4">
                                                                    <div data-animation="slide" data-duration="500"
                                                                        data-infinite="1" class="slider-10 w-slider">
                                                                        <div class="w-slider-mask">
                                                                            <div class="w-slide"><img
                                                                                    src="{{ asset('uploads/portfolios') }}/{{ $pari->image }}"
                                                                                    loading="lazy" alt=""
                                                                                    class="image-188" /></div>
                                                                            <div class="w-slide"></div>
                                                                        </div>
                                                                        <div class="w-slider-arrow-left">
                                                                            <div class="icon-36 w-icon-slider-left">
                                                                            </div>
                                                                        </div>
                                                                        <div class="w-slider-arrow-right">
                                                                            <div class="icon-36 w-icon-slider-right">
                                                                            </div>
                                                                        </div>
                                                                        <div class="slide-nav-8 w-slider-nav w-round">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vacation-card-bottom">
                                                                <div class="vacation-card-info">
                                                                    <div class="div-block-6589">
                                                                        <div class="div-block-6588">
                                                                            <div class="text-block-631">Prêt</div>
                                                                        </div>
                                                                        <div>
                                                                            <div style="color:#6a35ff;background-color:#f3efff"
                                                                                class="text-block-622">Zoom sur</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-6508 center"><a
                                                                            href="{{ route('project.details', $pari->id) }}" target="_blank"
                                                                            class="link-block-38 w-inline-block">
                                                                            <h3 class="heading-242">{{ $pari->title }}
                                                                                Paris</h3>
                                                                        </a></div>
                                                                    <div class="text-block-575">{{ $pari->curre }} 
                                                                    @convert($pari->price)</div>
                                                                </div>
                                                                <div class="div-block-6574">
                                                                    <div>
                                                                        <div class="div-block-6573">
                                                                            <div class="text-block-619">{{ $pari->quantity_of_bricks }}</div>
                                                                            <div>Briques</div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="div-block-6573">
                                                                            <div class="text-block-619">{{ \App\Models\Brick::where('portfolio_id', $pari->id)->get()->count() }}</div>
                                                                            <div>Investisseurs</div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="div-block-6573">
                                                                            <div class="text-block-619">{{ floor((\App\Models\Brick::where('portfolio_id', $pari->id)->get()->sum('bricks_qty')/$pari->quantity_of_bricks)*100) }}%</div>
                                                                            <div>Financé</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vacation-details">
                                                                    <div id="w-node-ee4e079f-317f-1187-3d10-a1f7e8b34fbd-50a2731d"
                                                                        class="vacation-price-2">
                                                                        <div class="subtitle-5 small">A partir de </div>
                                                                        <div class="dynamic-price-text-2">
                                                                            <div class="text-block-633">@convert($pari->miniprice) {{ $pari->curre }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-6572">
                                                                        <div class="div-block-6509"><img
                                                                                src="https://uploads-ssl.webflow.com/604b733c887fc763fe20f216/60e921ca308a0a377371f45b_60dca32b27ab1d092448da94_heart.svg"
                                                                                loading="lazy" width="20"
                                                                                id="w-node-_2424ddd5-fac4-d46a-0cae-cd3d84903817-50a2731d"
                                                                                alt="" /></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @empty 
                                                    <div class="w-dyn-empty">
                                                      <div>No items found.</div>
                                                  </div>
                                                    @endforelse
                                                </div>
                                            </div>
                                        </div>
                                        <div data-w-tab="Tab 3" class="w-tab-pane">
                                            <div class="collection-list-wrapper-17 w-dyn-list">
                                                <div role="list" class="cities-project-wrapper w-dyn-items">
                                                    @forelse ($lyon as $pari)
                                                    <div role="listitem" class="popular-cities-item-2 w-dyn-item">
                                                        <div data-w-id="ee4e079f-317f-1187-3d10-a1f7e8b34fab"
                                                            class="project-verticle-card-3">
                                                            <div class="verticle-card-image">
                                                                <div class="hero-background-image-4">
                                                                    <div data-animation="slide" data-duration="500"
                                                                        data-infinite="1" class="slider-10 w-slider">
                                                                        <div class="w-slider-mask">
                                                                            <div class="w-slide"><img
                                                                                    src="{{ asset('uploads/portfolios') }}/{{ $pari->image }}"
                                                                                    loading="lazy" alt=""
                                                                                    class="image-188" /></div>
                                                                            <div class="w-slide"></div>
                                                                        </div>
                                                                        <div class="w-slider-arrow-left">
                                                                            <div class="icon-36 w-icon-slider-left">
                                                                            </div>
                                                                        </div>
                                                                        <div class="w-slider-arrow-right">
                                                                            <div class="icon-36 w-icon-slider-right">
                                                                            </div>
                                                                        </div>
                                                                        <div class="slide-nav-8 w-slider-nav w-round">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vacation-card-bottom">
                                                                <div class="vacation-card-info">
                                                                    <div class="div-block-6589">
                                                                        <div class="div-block-6588">
                                                                            <div class="text-block-631">Prêt</div>
                                                                        </div>
                                                                        <div>
                                                                            <div style="color:#6a35ff;background-color:#f3efff"
                                                                                class="text-block-622">Zoom sur</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-6508 center"><a
                                                                            href="{{ route('project.details', $pari->id) }}" target="_blank"
                                                                            class="link-block-38 w-inline-block">
                                                                            <h3 class="heading-242">{{ $pari->title }}
                                                                                Paris</h3>
                                                                        </a></div>
                                                                    <div class="text-block-575">{{ $pari->curre }} @convert($pari->price)</div>
                                                                </div>
                                                                <div class="div-block-6574">
                                                                    <div>
                                                                        <div class="div-block-6573">
                                                                            <div class="text-block-619">{{ $pari->quantity_of_bricks }}</div>
                                                                            <div>Briques</div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="div-block-6573">
                                                                            <div class="text-block-619">{{ \App\Models\Brick::where('portfolio_id', $pari->id)->get()->count() }}</div>
                                                                            <div>Investisseurs</div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="div-block-6573">
                                                                            <div class="text-block-619">{{ floor((\App\Models\Brick::where('portfolio_id', $pari->id)->get()->sum('bricks_qty')/$pari->quantity_of_bricks)*100) }}%</div>
                                                                            <div>Financé</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vacation-details">
                                                                    <div id="w-node-ee4e079f-317f-1187-3d10-a1f7e8b34fbd-50a2731d"
                                                                        class="vacation-price-2">
                                                                        <div class="subtitle-5 small">A partir de </div>
                                                                        <div class="dynamic-price-text-2">
                                                                            <div class="text-block-633">@convert($pari->miniprice) {{ $pari->curre }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-6572">
                                                                        <div class="div-block-6509"><img
                                                                                src="https://uploads-ssl.webflow.com/604b733c887fc763fe20f216/60e921ca308a0a377371f45b_60dca32b27ab1d092448da94_heart.svg"
                                                                                loading="lazy" width="20"
                                                                                id="w-node-_2424ddd5-fac4-d46a-0cae-cd3d84903817-50a2731d"
                                                                                alt="" /></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @empty 
                                                    <div class="w-dyn-empty">
                                                      <div>No items found.</div>
                                                  </div>
                                                    @endforelse
                                                </div>
                                            </div>
                                        </div>
                                        <div data-w-tab="Tab 4" class="w-tab-pane">
                                            <div class="collection-list-wrapper-17 w-dyn-list">
                                                <div role="list" class="cities-project-wrapper w-dyn-items">
                                                    @forelse ($mars as $pari)
                                                    <div role="listitem" class="popular-cities-item-2 w-dyn-item">
                                                        <div data-w-id="ee4e079f-317f-1187-3d10-a1f7e8b34fab"
                                                            class="project-verticle-card-3">
                                                            <div class="verticle-card-image">
                                                                <div class="hero-background-image-4">
                                                                    <div data-animation="slide" data-duration="500"
                                                                        data-infinite="1" class="slider-10 w-slider">
                                                                        <div class="w-slider-mask">
                                                                            <div class="w-slide"><img
                                                                                    src="{{ asset('uploads/portfolios') }}/{{ $pari->image }}"
                                                                                    loading="lazy" alt=""
                                                                                    class="image-188" /></div>
                                                                            <div class="w-slide"></div>
                                                                        </div>
                                                                        <div class="w-slider-arrow-left">
                                                                            <div class="icon-36 w-icon-slider-left">
                                                                            </div>
                                                                        </div>
                                                                        <div class="w-slider-arrow-right">
                                                                            <div class="icon-36 w-icon-slider-right">
                                                                            </div>
                                                                        </div>
                                                                        <div class="slide-nav-8 w-slider-nav w-round">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vacation-card-bottom">
                                                                <div class="vacation-card-info">
                                                                    <div class="div-block-6589">
                                                                        <div class="div-block-6588">
                                                                            <div class="text-block-631">Prêt</div>
                                                                        </div>
                                                                        <div>
                                                                            <div style="color:#6a35ff;background-color:#f3efff"
                                                                                class="text-block-622">Zoom sur</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-6508 center"><a
                                                                            href="{{ route('project.details', $pari->id) }}" target="_blank"
                                                                            class="link-block-38 w-inline-block">
                                                                            <h3 class="heading-242">{{ $pari->title }}
                                                                                Paris</h3>
                                                                        </a></div>
                                                                    <div class="text-block-575">{{ $pari->curre }} @convert($pari->price)</div>
                                                                </div>
                                                                <div class="div-block-6574">
                                                                    <div>
                                                                        <div class="div-block-6573">
                                                                            <div class="text-block-619">{{ $pari->quantity_of_bricks }}</div>
                                                                            <div>Briques</div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="div-block-6573">
                                                                            <div class="text-block-619">{{ \App\Models\Brick::where('portfolio_id', $pari->id)->get()->count() }}</div>
                                                                            <div>Investisseurs</div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="div-block-6573">
                                                                            <div class="text-block-619">{{ floor((\App\Models\Brick::where('portfolio_id', $pari->id)->get()->sum('bricks_qty')/$pari->quantity_of_bricks)*100) }}%</div>
                                                                            <div>Financé</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vacation-details">
                                                                    <div id="w-node-ee4e079f-317f-1187-3d10-a1f7e8b34fbd-50a2731d"
                                                                        class="vacation-price-2">
                                                                        <div class="subtitle-5 small">A partir de </div>
                                                                        <div class="dynamic-price-text-2">
                                                                            <div class="text-block-633">@convert($pari->miniprice) {{ $pari->curre }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-6572">
                                                                        <div class="div-block-6509"><img
                                                                                src="https://uploads-ssl.webflow.com/604b733c887fc763fe20f216/60e921ca308a0a377371f45b_60dca32b27ab1d092448da94_heart.svg"
                                                                                loading="lazy" width="20"
                                                                                id="w-node-_2424ddd5-fac4-d46a-0cae-cd3d84903817-50a2731d"
                                                                                alt="" /></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @empty 
                                                    <div class="w-dyn-empty">
                                                      <div>No items found.</div>
                                                  </div>
                                                    @endforelse
                                                </div>
                                            </div>
                                        </div>
                                        <div data-w-tab="Tab 5" class="w-tab-pane">
                                            <div class="collection-list-wrapper-17 w-dyn-list">
                                                <div role="list" class="cities-project-wrapper w-dyn-items">
                                                    @forelse ($bors as $pari)
                                                    <div role="listitem" class="popular-cities-item-2 w-dyn-item">
                                                        <div data-w-id="ee4e079f-317f-1187-3d10-a1f7e8b34fab"
                                                            class="project-verticle-card-3">
                                                            <div class="verticle-card-image">
                                                                <div class="hero-background-image-4">
                                                                    <div data-animation="slide" data-duration="500"
                                                                        data-infinite="1" class="slider-10 w-slider">
                                                                        <div class="w-slider-mask">
                                                                            <div class="w-slide"><img
                                                                                    src="{{ asset('uploads/portfolios') }}/{{ $pari->image }}"
                                                                                    loading="lazy" alt=""
                                                                                    class="image-188" /></div>
                                                                            <div class="w-slide"></div>
                                                                        </div>
                                                                        <div class="w-slider-arrow-left">
                                                                            <div class="icon-36 w-icon-slider-left">
                                                                            </div>
                                                                        </div>
                                                                        <div class="w-slider-arrow-right">
                                                                            <div class="icon-36 w-icon-slider-right">
                                                                            </div>
                                                                        </div>
                                                                        <div class="slide-nav-8 w-slider-nav w-round">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vacation-card-bottom">
                                                                <div class="vacation-card-info">
                                                                    <div class="div-block-6589">
                                                                        <div class="div-block-6588">
                                                                            <div class="text-block-631">Prêt</div>
                                                                        </div>
                                                                        <div>
                                                                            <div style="color:#6a35ff;background-color:#f3efff"
                                                                                class="text-block-622">Zoom sur</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-6508 center"><a
                                                                            href="{{ route('project.details', $pari->id) }}" target="_blank"
                                                                            class="link-block-38 w-inline-block">
                                                                            <h3 class="heading-242">{{ $pari->title }}
                                                                                Paris</h3>
                                                                        </a></div>
                                                                    <div class="text-block-575">{{ $pari->curre }} @convert($pari->price)</div>
                                                                </div>
                                                                <div class="div-block-6574">
                                                                    <div>
                                                                        <div class="div-block-6573">
                                                                            <div class="text-block-619">{{ $pari->quantity_of_bricks }}</div>
                                                                            <div>Briques</div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="div-block-6573">
                                                                            <div class="text-block-619">{{ \App\Models\Brick::where('portfolio_id', $pari->id)->get()->count() }}</div>
                                                                            <div>Investisseurs</div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="div-block-6573">
                                                                            <div class="text-block-619">{{ floor((\App\Models\Brick::where('portfolio_id', $pari->id)->get()->sum('bricks_qty')/$pari->quantity_of_bricks)*100) }}%</div>
                                                                            <div>Financé</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vacation-details">
                                                                    <div id="w-node-ee4e079f-317f-1187-3d10-a1f7e8b34fbd-50a2731d"
                                                                        class="vacation-price-2">
                                                                        <div class="subtitle-5 small">A partir de </div>
                                                                        <div class="dynamic-price-text-2">
                                                                            <div class="text-block-633">@convert($pari->miniprice) {{ $pari->curre }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-6572">
                                                                        <div class="div-block-6509"><img
                                                                                src="https://uploads-ssl.webflow.com/604b733c887fc763fe20f216/60e921ca308a0a377371f45b_60dca32b27ab1d092448da94_heart.svg"
                                                                                loading="lazy" width="20"
                                                                                id="w-node-_2424ddd5-fac4-d46a-0cae-cd3d84903817-50a2731d"
                                                                                alt="" /></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @empty 
                                                    <div class="w-dyn-empty">
                                                      <div>No items found.</div>
                                                  </div>
                                                    @endforelse
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="location-indicator">
                                    <div style="width:25%" class="location-indicator-fill"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-6 wf-section">
                <div class="container-37">
                    <div class="footer-menu-wrapper">
                        <div class="footer-menus">
                            <h1 class="heading-174">b.hives</h1>
                            <div data-hover="" data-delay="0" class="dropdown-48 _1 w-dropdown">
                                <div class="dropdown-toggle-51 w-dropdown-toggle">
                                    <div class="w-icon-dropdown-toggle"></div>
                                    <div>FR</div>
                                </div>
                                <nav class="w-dropdown-list"><a href="#" class="w-dropdown-link">Link 1</a><a href="#"
                                        class="w-dropdown-link">Link 2</a><a href="#" class="w-dropdown-link">Link 3</a>
                                </nav>
                            </div>
                            <div data-hover="" data-delay="0" class="dropdown-48 _2 w-dropdown">
                                <div class="dropdown-toggle-51 w-dropdown-toggle">
                                    <div class="w-icon-dropdown-toggle"></div>
                                    <div>EUR</div>
                                </div>
                                <nav class="w-dropdown-list"><a href="#" class="w-dropdown-link">Link 1</a><a href="#"
                                        class="w-dropdown-link">Link 2</a><a href="#" class="w-dropdown-link">Link 3</a>
                                </nav>
                            </div>
                        </div>
                        <div class="footer-menus">
                            <h5 class="feature-title">b.hives</h5>
                            <div class="footer-menu-wrapper"><a href="#" class="footer-menu-link">A propos de nous</a>
                            </div>
                            <div class="footer-menu-wrapper"><a href="#" class="footer-menu-link">Jobs</a></div>
                            <div class="footer-menu-wrapper"><a href="#" class="footer-menu-link">Presse</a></div>
                            <div class="footer-menu-wrapper"><a href="#" class="footer-menu-link">Actus</a></div>
                            <div class="footer-menu-wrapper"><a href="#" class="footer-menu-link">Glossaire</a></div>
                            <div class="footer-menu-wrapper"><a href="#" class="footer-menu-link">FAQ</a></div>
                            <div class="footer-menu-wrapper"><a href="/contact" class="footer-menu-link">Nous
                                    contacter</a></div>
                        </div>
                        <div class="footer-menus">
                            <h5 class="feature-title">Découvrir</h5>
                            <div class="footer-menu-wrapper"><a href="#" class="footer-menu-link">Evénements</a></div>
                            <div class="footer-menu-wrapper"><a href="#" class="footer-menu-link">Tarifs et marchés</a>
                            </div>
                            <div class="footer-menu-wrapper"><a href="#" class="footer-menu-link">Projets par ville</a>
                            </div>
                            <div class="footer-menu-wrapper"><a href="#" class="footer-menu-link">Projets par pays</a>
                            </div>
                            <div class="footer-menu-wrapper"><a href="#" class="footer-menu-link">Blog</a></div>
                            <div class="footer-menu-wrapper"><a href="#" class="footer-menu-link">Plan du site</a></div>
                        </div>
                        <div class="footer-menus">
                            <h5 class="feature-title">Legal</h5>
                            <div class="footer-menu-wrapper"><a href="#" class="footer-menu-link">CGU &amp;
                                    CGV</a></div>
                            <div class="footer-menu-wrapper"><a href="#" class="footer-menu-link">Protection des
                                    données</a></div>
                            <div class="footer-menu-wrapper"><a href="#" class="footer-menu-link">Politique des
                                    cookies</a></div>
                            <div class="footer-menu-wrapper"><a href="#" class="footer-menu-link">Apporteurs de
                                    projet</a></div>
                        </div>
                    </div>
                    <div class="footer-menu-devider"></div>
                    <div class="copyrights-and-policy w-clearfix">
                        <div class="right-content"><a href="{{ url('/') }}" class="social w-inline-block"><img
                                    src="https://uploads-ssl.webflow.com/604b733c887fc763fe20f216/60eaa92a7fe3995260322654_twitter.svg"
                                    width="17" alt="" class="image-2" /></a><a href="#"
                                class="social w-inline-block"><img
                                    src="https://uploads-ssl.webflow.com/60eaa909458e78d737d3ba7f/60eaa909458e786e91d3ba9d_Facebook.svg"
                                    height="15" alt="" class="image-2" /></a><a href="#"
                                class="social w-inline-block"><img
                                    src="https://uploads-ssl.webflow.com/60eaa909458e78d737d3ba7f/60eaa909458e78e131d3ba96_instagram-logo.svg"
                                    width="17" alt="" class="image-2" /></a></div>
                        <div class="footer-left-side">
                            <p class="paragraph-40">© b.hives,
                                Inc.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-bottom">
                <div class="w-layout-grid grid-55"><a href="/dashboard" class="w-inline-block"><img
                            src="https://uploads-ssl.webflow.com/604b733c887fc763fe20f216/60ff209dc4f254fb3ea866b0_60dca32b27ab1dae5648da31_bar-chart-2.svg"
                            loading="lazy" alt="" /></a><a href="/make-a-deposit" class="w-inline-block"><img
                            src="https://uploads-ssl.webflow.com/604b733c887fc763fe20f216/60dcad38a9ef4951de1ddad7_dollar-sign.svg"
                            loading="lazy" alt="" /></a><a href="#" class="w-inline-block"><img
                            src="https://uploads-ssl.webflow.com/604b733c887fc763fe20f216/60ff201dfcea46aa7148a71d_60dca32b27ab1db1b948d78e_search.svg"
                            loading="lazy" width="30" alt="" /></a><a href="#" class="w-inline-block"><img
                            src="https://uploads-ssl.webflow.com/604b733c887fc763fe20f216/60e921ca308a0a377371f45b_60dca32b27ab1d092448da94_heart.svg"
                            loading="lazy" alt="" /></a><a href="#" class="w-inline-block"><img
                            src="https://uploads-ssl.webflow.com/604b733c887fc763fe20f216/60e9290abab737ee15a8f098_60dca32b27ab1d93c348da3b_bell.svg"
                            loading="lazy" alt="" /></a></div>
            </div>
            <script
                src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=604b733c887fc763fe20f216"
                type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
                crossorigin="anonymous"></script>
             <script src="{{ asset('new.js') }}"
                type="text/javascript"></script> 
                <script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script> 
              
        </body>

        </html>
