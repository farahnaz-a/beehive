@php
    // $six = \App\Models\Portfolio::whereDate('created_at',  \Carbon\Carbon::today()->subDays(6))->get()->count();
    $six = \App\Models\Wallet::where('user_id', Auth::id())->whereDate('created_at',  \Carbon\Carbon::today()->subDays(6))->get()->count();
    $daysix = \Carbon\Carbon::today()->subDays(6)->format('d M');
    $dayfive = \Carbon\Carbon::today()->subDays(5)->format('d M');
    $dayfour = \Carbon\Carbon::today()->subDays(4)->format('d M');
    $daythree = \Carbon\Carbon::today()->subDays(3)->format('d M');
    $daytwo = \Carbon\Carbon::today()->subDays(2)->format('d M');
    $dayone = \Carbon\Carbon::today()->subDays(1)->format('d M');
    // $five = \App\Models\Portfolio::whereDate('created_at', \Carbon\Carbon::today()->subDays(5))->get()->count();
    $five = \App\Models\Wallet::where('user_id', Auth::id())->whereDate('created_at', \Carbon\Carbon::today()->subDays(5))->get()->count();
    // $four = \App\Models\Portfolio::whereDate('created_at', \Carbon\Carbon::today()->subDays(4))->get()->count();
    $four = \App\Models\Wallet::where('user_id', Auth::id())->whereDate('created_at', \Carbon\Carbon::today()->subDays(4))->get()->count();
    // $three = \App\Models\Portfolio::whereDate('created_at', \Carbon\Carbon::today()->subDays(3))->get()->count();
    $three = \App\Models\Wallet::where('user_id', Auth::id())->whereDate('created_at', \Carbon\Carbon::today()->subDays(3))->get()->count();
    // $two = \App\Models\Portfolio::whereDate('created_at', \Carbon\Carbon::today()->subDays(2))->get()->count();
    $two = \App\Models\Wallet::where('user_id', Auth::id())->whereDate('created_at', \Carbon\Carbon::today()->subDays(2))->get()->count();
    // $one = \App\Models\Portfolio::whereDate('created_at', \Carbon\Carbon::today()->subDays(1))->get()->count();
    $one = \App\Models\Wallet::where('user_id', Auth::id())->whereDate('created_at', \Carbon\Carbon::today()->subDays(1))->get()->count();

    // $data = [$six, $five, $four, $three, $two, $one];
    $data = [$six, $five, $four, $three, $two, $one];
    $day = [$daysix, $dayfive, $dayfour, $daythree, $daytwo, $dayone];
@endphp
<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri Aug 20 2021 20:26:58 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6086c918a477ec939dc5fdf1" data-wf-site="604b733c887fc763fe20f216" lang="en">
<head>
  <meta charset="utf-8">
  <title>Profile Bindl B</title>
  <meta content="Profile Bindl B" property="og:title">
  <meta content="Profile Bindl B" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="{{ asset('new_user_dashboard_assets/css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('new_user_dashboard_assets/css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="css/alexandre-auberts-fabulous-project.webflow.css" rel="stylesheet" type="text/css">
  <style>@media (min-width:992px) {html.w-mod-js:not(.w-mod-ix) [data-w-id="18c093c3-e264-6bee-77ef-8f668b0862cc"] {-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}}</style>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Merriweather:300,300italic,400,400italic,700,700italic,900,900italic","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Varela Round:400","DM Sans:regular,500,700","Inter:200,300,regular,500,600,700,800","Poppins:100,200,300,regular,500,600,700,800,900"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js" integrity="sha512-Wt1bJGtlnMtGP0dqNFH1xlkLBNpEodaiQ8ZN5JLA5wpc1sUlk/O5uuOMNgvzddzkpvZ9GLyYNa8w2s7rqiTk5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  {{--  <script src="https://scripts.v1.authpack.io/index.js" data-key="wga-client-key-166b17158ebe25036bb466bc4">
</script>  --}}
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script src='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css' rel='stylesheet' />


</head>
<body class="body-14">
  <div class="project_quote-3">
    <div style="opacity:0" class="quote_form-4">
      <div style="opacity:0;-webkit-transform:translate3d(0, 35PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 35PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 35PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 35PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="project_form-3">
        <div class="form05_top_tag"><img src="images/dollar-sign.svg" alt="" class="form05_icon"></div>
        <div class="div-block-6561">
          <h3>Faire un dépot</h3>
        </div>
        <a data-w-id="83dfb7b0-94f1-d629-89ce-0b9d1331f9fc" href="#" class="link-block-37 w-inline-block"><img src="https://uploads-ssl.webflow.com/5d2d2687b4a76d21dc380ab3/5d2d277ab78ea80fc682d2ed_x_white.svg" alt="" class="exit-2"></a>
        <div class="div-block-6444">
          <div class="div-block-345">
            <div class="w-form">
              <form id="email-form-3" name="email-form-3" data-name="Email Form 3">
                <h5 class="heading-40">1. Sélectionne la devise et le mode de paiement</h5><select id="field-3" name="field-3" data-name="Field 3" class="input-field w-select">
                  <option value="Eur">Euro</option>
                  <option value="Pound">Pound</option>
                  <option value="Second">Second Choice</option>
                  <option value="Third">Third Choice</option>
                </select>
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
          <div class="div-block-351">
            <div>
              <h5 class="heading-40">2. Détails du paiement</h5>
            </div>
            <div class="w-form">
              <form id="email-form-2" name="email-form-2" data-name="Email Form 2"><input type="text" class="input-field w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="Amount" id="name-2">
                <div class="div-block-567">
                  <div class="paragraph left"><span class="text-span-198">Frais de transaction :</span> 0.00 €</div>
                  <div class="paragraph left"><span class="text-span-199">Tu recevras :</span> 0.00 €</div>
                </div>
                <div class="div-block-352"><input type="submit" value="Continuer" data-wait="Please wait..." class="button button-disable w-button"></div>
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div data-collapse="medium" data-animation="over-left" data-duration="400" data-doc-height="1" role="banner" class="nav-top w-nav">
      <div class="navigation-container w-container">
        <div class="div-block-6387">
          <div class="w-nav-button"><img src="images/60dca32b27ab1d2e3248dab3_menu.svg" loading="lazy" alt=""></div>
          <div class="navigation-left headerco">
            <a href="{{ url('/') }}" class="brand-8 w-nav-brand">
              <div class="text-block-524">b.hives</div>
            </a>
          </div>
          <nav role="navigation" class="nav-menu-13 w-nav-menu">
            <a href="{{ route('customer.index') }}" aria-current="page" class="nav-link-25 w-nav-link w--current">Dashboard</a>
            <a href="{{ route('make.deposit') }}" class="nav-link-25 w-nav-link">Retirer / Déposer</a>
            <a href="find-a-project.html" class="nav-link-25 w-nav-link">Trouver un projet</a>
          </nav>
          <div class="navigation-right headerco">
            <div class="div-block-6391">
              <div class="div-block-6506">
                  <img src="{{ asset('new_user_dashboard_assets/images/60dca32b27ab1d092448da94_heart.svg') }}" loading="lazy" width="23" alt="" class="image-162">
                  <img src="{{ asset('new_user_dashboard_assets/images/60dca32b27ab1d93c348da3b_bell.svg') }}" loading="lazy" width="23" alt="" class="image-162"></div>
            </div>
            <div data-hover="" data-delay="0" class="dropdown-40 w-dropdown">
              <div class="dropdown-toggle-44 w-dropdown-toggle">
                <div class="w-icon-dropdown-toggle"></div>
                
                <div class="div-block-633"><img src="{{ Auth::user()->profile_photo_url }}" loading="lazy" width="40" height="40" alt="" class="image-137">
                  <div class="text-block-467">Dropdown</div>
                </div>
              </div>
              <nav class="dropdown-list-16 w-dropdown-list">
                <a href="settings.html" class="link-block-27 w-inline-block"><img src="{{ asset('new_user_dashboard_assets/images/file-text.svg') }}" loading="lazy" alt="" class="image-146">
                  <div class="text-block-595">Parametrres</div>
                </a>
                <div class="div-block-6383 premium">
                  <div class="form-block-4 w-form">
                    <form id="email-form" name="email-form" data-name="Email Form"><label class="w-checkbox switch-field">
                        <div class="w-checkbox-input w-checkbox-input--inputType-custom switch-input"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label-7 w-form-label">Passer Premium</span>
                      </label></form>
                    <div class="form-success w-form-done">
                      <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="form-error w-form-fail">
                      <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                  </div>
                </div>
                <a href="https://list-your-property2.webflow.io/" class="link-block-27 w-inline-block"><img src="images/home.svg" loading="lazy" alt="" class="image-150">
                  <div class="text-block-595">Vendre mon bien</div>
                </a>
                <a href="https://list-your-property2.webflow.io/" class="link-block-27 w-inline-block"><img src="images/home.svg" loading="lazy" alt="" class="image-150">
                  <div class="text-block-595">FAQ / Aide</div>
                </a>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();" class="link-block-27 w-inline-block"><img src="images/log-out.svg" loading="lazy" alt="" class="image-151">
                    <div class="text-block-595">Se déconnecter</div>
                  </a>
                </form>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-2 user-profile">
      <div class="div-block-6546">
        <div id="w-node-f751777c-bf68-c565-b0ef-cf6b086884ae-9dc5fdf1" class="div-block-6544">
          <h2 class="h2_withoutpadding">Salut {{ Auth::user()->name }} 👋</h2>
          <a data-w-id="63738089-de14-086e-6428-4d74f340868c" href="{{ route('make.deposit') }}" class="button-hero w-button">Faire un dépôt</a>
        </div>
        <div class="w-layout-grid _2-1-grid">
          <div class="module-2">
            <div class="div-block-6547">
              <h4 class="heading-222">Balance totale</h4>
              <div data-hover="" data-delay="0" class="dropdown-43 w-dropdown">
                <div class="dropdown-toggle-46 w-dropdown-toggle">
                  <div class="icon-30 w-icon-dropdown-toggle"></div>
                  <div class="text-block-569">Juillet 2021</div>
                </div>
                <nav class="dropdown-list-18 w-dropdown-list">
                  <a href="#" class="options-2 w-dropdown-link">Cette semaine</a>
                  <a href="#" class="options-2 w-dropdown-link">Ce mois</a>
                  <a href="#" class="options-2 w-dropdown-link">Cette année</a>
                </nav>
              </div>
         </div>
          <div>        <div id="chart">
          </div> </div>
          </div>  
     
          
          <div class="table-module-2">
            <div class="table-header">
              <h4 class="no-space-bottom-3">Notifications et parametres</h4>
            </div>
            <div class="full-table-row">
              <div>
                <h6 class="no-space-bottom-3">Nouveaux projets</h6>
                <div class="small-text text-grey-3">Recevez une alerte lorsqu&#x27;un projet est en ligne</div>
              </div>
              <div class="form-block-19 w-form">
                <form id="email-form" name="email-form" data-name="Email Form"><label class="w-checkbox switch-field">
                    <div class="w-checkbox-input w-checkbox-input--inputType-custom switch-input-2 w--redirected-checked"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" checked="" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label-12 hidden w-form-label"></span>
                  </label></form>
                <div class="form-success w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="form-error w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
            <div class="full-table-row-divider"></div>
            <div class="full-table-row">
              <div>
                <h6 class="no-space-bottom-3">Offre de rachat</h6>
                <div class="small-text text-grey-3">Recevez une alerte lorsqu&#x27;un investisseur souhaite racheter vos briques</div>
              </div>
              <div class="form-block-19 w-form">
                <form id="email-form" name="email-form" data-name="Email Form"><label class="w-checkbox switch-field">
                    <div class="w-checkbox-input w-checkbox-input--inputType-custom switch-input-2 w--redirected-checked"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" checked="" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label-12 hidden w-form-label"></span>
                  </label></form>
                <div class="form-success w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="form-error w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
            <div class="full-table-row-divider"></div>
            <div class="full-table-row">
              <div>
                <h6 class="no-space-bottom-3">Devenir premium</h6>
                <div class="small-text text-grey-3">Débloquez toutes les fonctionnalités premium</div>
              </div>
              <div>
                <a href="#" class="button-54 w-button">Premium</a>
              </div>
            </div>
          </div>
        </div>
        <div class="w-layout-grid _4-grid-2">
          <div class="module-2">
            <div class="content-chart-2">
              <div class="chart-square-2"><img src="https://uploads-ssl.webflow.com/60dca32a27ab1d79b148d4c8/60dca32b27ab1d79af48d602_dollar-sign.svg" loading="lazy" alt="" class="icon">
                <div class="light-fill"></div>
              </div>
              <div class="div-block-6464">
                <div class="caption-3">Balance</div>
                <div class="numbers-wrapper">
                  <h3 class="number-3">@convert(Auth::user()->balance) {{ Auth::user()->currency ?? '€' }}</h3>
                </div>
              </div>
            </div>
          </div>
          <a href="#" class="module-2 w-inline-block">
            <div class="content-chart-2">
              <div class="chart-square-2"><img src="https://uploads-ssl.webflow.com/60dca32a27ab1d79b148d4c8/60dca32b27ab1d157248d7a6_tag.svg" loading="lazy" width="24" alt="" class="icon">
                <div class="light-fill bg-primary-green"></div>
              </div>
              <div class="div-block-6464">
                <div class="caption-3">Benefices</div>
                <div class="numbers-wrapper">
                  <h3 class="number-3">0 €</h3>
                  <div class="negative-value">(0%)</div>
                </div>
              </div>
            </div>
          </a>
          <div id="w-node-afb42e34-2886-d39d-05c8-e19e2b1bd850-9dc5fdf1" class="module-2">
            <div class="content-chart-2">
              <div class="chart-square-2"><img src="https://uploads-ssl.webflow.com/60dca32a27ab1d79b148d4c8/60dca32b27ab1d2d9f48d8d6_truck.svg" loading="lazy" width="24" alt="" class="icon">
                <div class="light-fill bg-primary-orange"></div>
              </div>
              <div class="div-block-6464">
                <div class="caption-3">Briques</div>
                <div class="numbers-wrapper">
                  <h3 class="number-3">{{ \App\Models\Brick::where('user_id', Auth::id())->sum('bricks_qty') }}</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="module-2">
            <div class="content-chart-2">
              <div class="chart-square-2"><img src="{{ asset('new_user_dashboard_assets/images/users_1.svg') }}" loading="lazy" width="24" alt="" class="icon">
                <div class="light-fill bg-primary-yellow"></div>
              </div>
              <div class="div-block-6464">
                <div class="caption-3">Niveau</div>
                <div class="numbers-wrapper">
                  <h3 class="number-3">1</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card_ghost_shadow">
          <div class="div-block-592">
            <div class="div-block-641">
              <h4 class="heading-222">Projets</h4>
              <div id="w-node-_05b140f6-e512-9b0c-15d1-b34879d485f3-9dc5fdf1" class="form-block-17 w-form">
                <form id="email-form" name="email-form" data-name="Email Form"><input type="text" class="input-field w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="Rechercher par nom, mot clés, localisation ..." id="name-2"></form>
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
          </div>
          <div data-duration-in="300" data-duration-out="100" class="tabs-23 w-tabs">
            <div class="tabs-menu-21 w-tab-menu">
              <a data-w-tab="Tab 1" class="tab-link-tab-1-81 w-inline-block w-tab-link w--current"><img src="{{ asset('new_user_dashboard_assets/images/60dca32b27ab1d6ee548d753_map.svg') }}" loading="lazy" width="25" height="25" alt="" class="image-169"></a>
              <a data-w-tab="Tab 3" class="tab-link-tab-3-18 w-inline-block w-tab-link"><img src="{{ asset('new_user_dashboard_assets/images/60dca32b27ab1d3af748d74d_list.svg') }}" loading="lazy" width="25" height="25" alt="" class="image-169"></a>
            </div>
            <div class="tabs-content-19 w-tab-content">
              <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                <div class="div-block-6385">
                  {{-- <div data-widget-latlng="43.610769,3.876716" data-widget-tooltip="Ma Villa 250 m2 sur Montpellier" data-widget-zoom="12" data-widget-style="roadmap" data-enable-scroll="true" data-enable-touch="true" class="map-6 w-widget w-widget-map"></div> --}}
                  <div id='map' style='width: 100%; height: 450px;'></div>
                </div>
                <div class="div-block-6350">
                  <div class="collection-list-wrapper-32 w-dyn-list">
                    <div role="list" class="collection-list-13 w-dyn-items">
                      @forelse (\App\Models\Brick::where('user_id', Auth::id())->get() as $key => $item)
                        @php
                            $project = \App\Models\Portfolio::where('id', $item->portfolio_id)->first();
                        @endphp
                         <div role="listitem" class="collection-item-10 w-dyn-item">
                          <a id="w-node-_18c093c3-e264-6bee-77ef-8f668b0862cb-9dc5fdf1" data-w-id="18c093c3-e264-6bee-77ef-8f668b0862cb" href="{{ route('project.details', $project->id) }}" class="related-vacation w-inline-block">
                            <div data-w-id="18c093c3-e264-6bee-77ef-8f668b0862cc" class="location-image" style="background-image: url({{ asset('uploads/portfolios') }}/{{ $project->image }});">
                              <div class="overlay light"></div>
                            </div>
                            <div id="w-node-_18c093c3-e264-6bee-77ef-8f668b0862ce-9dc5fdf1" class="featured-vacation-tag">
                              <div class="text-block-504">{{ \App\Models\City::where('id', $project->city_name)->first()->name }}</div>
                            </div>
                            <div id="w-node-_18c093c3-e264-6bee-77ef-8f668b0862d1-9dc5fdf1" class="related-vacation-info-3">
                              <h3 id="w-node-_18c093c3-e264-6bee-77ef-8f668b0862d2-9dc5fdf1" class="heading-159">{{ $project->title }}</h3>
                              <div id="w-node-_18c093c3-e264-6bee-77ef-8f668b0862d4-9dc5fdf1" class="featured-location-price">
                                <div class="div-block-6352">
                                  <div class="subtitle-6">{{ $item->bricks_qty }} briques</div>
                                </div>
                                <div class="price-grid">
                                  <div id="w-node-_18c093c3-e264-6bee-77ef-8f668b0862da-9dc5fdf1" class="subtitle-6">{{ $item->amount }}</div>
                                  <div id="w-node-_18c093c3-e264-6bee-77ef-8f668b0862d8-9dc5fdf1" class="dolar-sign">€</div>
                                </div>
                              </div>
                            </div>
                          </a>
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
              <div data-w-tab="Tab 3" class="w-tab-pane">
                <div class="table-module">
                  <div class="table-content">
                    <div class="table-list">
                      <div class="w-layout-grid table-headers">
                        <div class="caption-large">Pays</div>
                        <div class="caption-large">Ville</div>
                        <div class="caption-large">Projet</div>
                        <div class="caption-large">Investisseurs</div>
                        <div class="caption-large">Briques</div>
                        <div class="caption-large">Valeur (€)</div>
                      </div>
                      @foreach (\App\Models\Brick::where('user_id', Auth::id())->get() as $brick)
                      <a href="{{ route('project.details', $brick->portfolio_id) }}" class="table-row-link w-inline-block">
                        @php
                            $project = \App\Models\Portfolio::where('id', $brick->portfolio_id)->first();
                            $city = \App\Models\City::where('id', $project->city_name)->first();
                        @endphp
                        <div class="w-layout-grid table-row">
                          <div id="w-node-c9409832-747e-90cf-d36b-71a49a898375-9dc5fdf1" class="table-title">{{ $city->country }}</div>
                          <div id="w-node-eda99167-4ddd-59d4-573d-5a492270a72e-9dc5fdf1" class="paragraph">{{ $city->name }}</div>
                          <div id="w-node-eda99167-4ddd-59d4-573d-5a492270a72e-9dc5fdf1" class="paragraph">{{ $project->title }}</div>
                          <div class="table-avatar-row">
                            {{ \App\Models\Brick::where('portfolio_id', $brick->portfolio_id)->get()->count() }}
                          </div>
                          <div class="status">
                            <div class="paragraph">{{ $brick->bricks_qty }}</div>
                          </div>
                          <div id="w-node-c9409832-747e-90cf-d36b-71a49a89837f-9dc5fdf1" class="paragraph">{{ $brick->amount }}</div>
                        </div>
                      </a>
                      @endforeach
                     
                    </div>
                  </div>
                </div>
                <div class="div-block-6382">
                  {{-- <div class="module">
                    <div class="card-header">
                      <h5 class="heading-221">Projets par pays</h5>
                    </div>
                    <div class="child-content-center">
                      <canvas id="myChartt" width="400" height="400"></canvas>

                      <div class="chart-colors-wrapper">
                        @foreach (\App\Models\Brick::where('user_id', Auth::id())->get() as $key => $brick)
                        
                        <div class="label-2">
                          <div class="indication-color 
                            @if($key == 0)
                            bg-primary-blue
                            @elseif($key == 1)
                            bg-primary-orange
                            @elseif($key == 2)
                            bg-primary-green
                            @else
                            bg-primary-success
                            @endif
                          "></div>
                          <div class="small-text">{{ \App\Models\City::where('id', \App\Models\Portfolio::where('id', $brick->portfolio_id)->first()->city_name)->first()->name }}</div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div> --}}
                  {{-- <div class="module">
                    <div class="card-header">
                      <h5 class="heading-221">Repartition par pays</h5>
                    </div>
                    <div class="child-content-center"><img src="{{ asset('new_user_dashboard_assets/images/Dash-Chart-01.svg') }}" loading="lazy" alt="" class="cirlce-chart">
                      <div class="chart-colors-wrapper">
                        <div class="label-2">
                          <div class="indication-color bg-primary-blue"></div>
                          <div class="small-text">Running</div>
                        </div>
                        <div class="label-2">
                          <div class="indication-color bg-primary-rose"></div>
                          <div class="small-text">Delivered</div>
                        </div>
                      </div>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="nav-bottom">
    <div class="w-layout-grid grid-55">
      <a href="{{ url('/customer/account') }}" aria-current="page" class="w-inline-block w--current"><img src="images/60dca32b27ab1dae5648da31_bar-chart-2.svg" loading="lazy" alt=""></a>
      <a href="make-a-deposit.html" class="w-inline-block"><img src="images/dollar-sign.svg" loading="lazy" alt=""></a>
      <a href="#" class="w-inline-block"><img src="{{ asset('new_user_dashboard_assets/images/60dca32b27ab1db1b948d78e_search.svg') }}" loading="lazy" width="30" alt=""></a>
      <a href="#" class="w-inline-block"><img src="{{ asset('new_user_dashboard_assets/images/60dca32b27ab1d092448da94_heart.svg') }}" loading="lazy" alt=""></a>
      <a href="#" class="w-inline-block"><img src="{{ asset('new_user_dashboard_assets/images/60dca32b27ab1d93c348da3b_bell.sv') }}g" loading="lazy" alt=""></a>
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
            <nav class="w-dropdown-list">
              <a href="#" class="w-dropdown-link">Link 1</a>
              <a href="#" class="w-dropdown-link">Link 2</a>
              <a href="#" class="w-dropdown-link">Link 3</a>
            </nav>
          </div>
          <div data-hover="" data-delay="0" class="dropdown-48 _2 w-dropdown">
            <div class="dropdown-toggle-51 w-dropdown-toggle">
              <div class="w-icon-dropdown-toggle"></div>
              <div>EUR</div>
            </div>
            <nav class="w-dropdown-list">
              <a href="#" class="w-dropdown-link">Link 1</a>
              <a href="#" class="w-dropdown-link">Link 2</a>
              <a href="#" class="w-dropdown-link">Link 3</a>
            </nav>
          </div>
        </div>
        <div class="footer-menus">
          <h5 class="feature-title">b.hives</h5>
          <div class="footer-menu-wrapper">
            <a href="#" class="footer-menu-link">A propos de nous</a>
          </div>
          <div class="footer-menu-wrapper">
            <a href="#" class="footer-menu-link">Jobs</a>
          </div>
          <div class="footer-menu-wrapper">
            <a href="#" class="footer-menu-link">Presse</a>
          </div>
          <div class="footer-menu-wrapper">
            <a href="#" class="footer-menu-link">Actus</a>
          </div>
          <div class="footer-menu-wrapper">
            <a href="#" class="footer-menu-link">Glossaire</a>
          </div>
          <div class="footer-menu-wrapper">
            <a href="#" class="footer-menu-link">FAQ</a>
          </div>
        </div>
        <div class="footer-menus">
          <h5 class="feature-title">Découvrir</h5>
          <div class="footer-menu-wrapper">
            <a href="#" class="footer-menu-link">Evénements</a>
          </div>
          <div class="footer-menu-wrapper">
            <a href="#" class="footer-menu-link">Tarifs et marchés</a>
          </div>
          <div class="footer-menu-wrapper">
            <a href="#" class="footer-menu-link">Projets par ville</a>
          </div>
          <div class="footer-menu-wrapper">
            <a href="#" class="footer-menu-link">Projets par pays</a>
          </div>
          <div class="footer-menu-wrapper">
            <a href="#" class="footer-menu-link">Blog</a>
          </div>
          <div class="footer-menu-wrapper">
            <a href="#" class="footer-menu-link">Plan du site</a>
          </div>
        </div>
        <div class="footer-menus">
          <h5 class="feature-title">Legal</h5>
          <div class="footer-menu-wrapper">
            <a href="#" class="footer-menu-link">CGU &amp; CGV</a>
          </div>
          <div class="footer-menu-wrapper">
            <a href="#" class="footer-menu-link">Protection des données</a>
          </div>
          <div class="footer-menu-wrapper">
            <a href="#" class="footer-menu-link">Politique des cookies</a>
          </div>
          <div class="footer-menu-wrapper">
            <a href="#" class="footer-menu-link">Apporteurs de projet</a>
          </div>
        </div>
      </div>
      <div class="footer-menu-devider"></div>
      <div class="copyrights-and-policy w-clearfix">
        <div class="right-content">
          <a href="#" class="social w-inline-block"><img src="images/twitter.svg" width="17" alt="" class="image-2"></a>
          <a href="#" class="social w-inline-block"><img src="https://uploads-ssl.webflow.com/60eaa909458e78d737d3ba7f/60eaa909458e786e91d3ba9d_Facebook.svg" height="15" alt="" class="image-2"></a>
          <a href="#" class="social w-inline-block"><img src="https://uploads-ssl.webflow.com/60eaa909458e78d737d3ba7f/60eaa909458e78e131d3ba96_instagram-logo.svg" width="17" alt="" class="image-2"></a>
        </div>
        <div class="footer-left-side">
          <p class="paragraph-40">© b.hives, Inc.</p>
        </div>
      </div>
    </div>
  </div>


  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=604b733c887fc763fe20f216" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  {{-- <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($day),
            datasets: [{
                label: '# of Projects',
                data: @json($data),
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
   --}}

   <script>
     var options = {
  chart: {
    type: 'line',
    height: '300px'
  },
  series: [{
    name: 'deposit',
    data: @json($data)
  }, 
  {
    name: 'dividents', 
    data: ['1','7','8','10','6']
  }],
  xaxis: {
    categories: @json($day)
  }
}

var chart = new ApexCharts(document.querySelector("#chart"), options);

chart.render();
   </script>
    <script>
    // TO MAKE THE MAP APPEAR YOU MUST
    // ADD YOUR ACCESS TOKEN FROM
    // https://account.mapbox.com
        mapboxgl.accessToken = 'pk.eyJ1Ijoic2hpcGx1MTIzIiwiYSI6ImNrdG9yYXowejBmamIyd3Btb3Zvc3oyMnkifQ.7w9CXfUUezrHpsJuCOPO8w';
        const map = new mapboxgl.Map({
        container: 'map', // container ID
        style: 'mapbox://styles/mapbox/streets-v11', // style URL
        center: [4.835659, 45.764042], // starting position [lng, lat]        
        zoom: 5 // starting zoom
        });

        // Create a default Marker and add it to the map.
        const marker1 = new mapboxgl.Marker()
        .setLngLat([4.835659, 45.764042])
        .addTo(map);
        
        // Create a default Marker, colored black, rotated 45 degrees.
        const marker2 = new mapboxgl.Marker({ color: 'black', rotation: 45 })
        .setLngLat([ 5.369780, 43.296482])
        .addTo(map);
    </script> 


  

  
  
  <script src="  {{ asset('new_user_dashboard_assets/js/webflow.js') }}" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>