<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon Aug 02 2021 10:50:38 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6082fb9f1bf1d98b7dfb1f23" data-wf-site="604b733c887fc763fe20f216" lang="en">
<head>
  <meta charset="utf-8">
  <title>Make a deposit</title>
  <meta content="Make a deposit" property="og:title">
  <meta content="Make a deposit" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  
  <link href="{{ asset('depo_assets/css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('depo_assets/css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('depo_assets/css/alexandre-auberts-fabulous-project.webflow.css') }}" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Merriweather:300,300italic,400,400italic,700,700italic,900,900italic","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Varela Round:400","DM Sans:regular,500,700","Inter:200,300,regular,500,600,700,800"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="{{ asset('depo_assets/images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
  <link href="{{ asset('depo_assets/images/webclip.png') }}" rel="apple-touch-icon">
  <script src="https://scripts.v1.authpack.io/index.js" data-key="wga-client-key-166b17158ebe25036bb466bc4">
</script>
</head>
<body class="body-12">
  <div data-collapse="medium" data-animation="over-left" data-duration="400" data-doc-height="1" role="banner" class="nav-top w-nav">
    <div class="navigation-container w-container">
      <div class="div-block-6387">
        <div class="w-nav-button"><img src="{{ asset('depo_assets/images/60dca32b27ab1d2e3248dab3_menu.svg') }}" loading="lazy" alt=""></div>
        <div class="navigation-left">
          <a href="{{ url('/') }}" class="brand-8 w-nav-brand">
            <div class="text-block-524">b.hives</div>
          </a>
        </div>
        <nav role="navigation" class="nav-menu-13 w-nav-menu">
          <a href="{{ url('/customer/account') }}" class="nav-link-25 w-nav-link">Dashboard</a>
          <a href="{{ route('make.deposit') }}" aria-current="page" class="nav-link-25 w-nav-link w--current">Envoyer / Deposer</a>
          <a href="#" class="nav-link-25 w-nav-link">Trouver un projet</a>
        </nav>
        <div class="navigation-right">
          <div class="div-block-6391"><img src="{{ asset('depo_assets/images/60dca32b27ab1d092448da94_heart.svg') }}" loading="lazy" width="23" alt="" class="image-162"><img src="{{ asset('depo_assets/images/60dca32b27ab1d93c348da3b_bell.svg') }}" loading="lazy" width="23" alt="" class="image-162"></div>
          <div data-hover="" data-delay="0" class="dropdown-40 w-dropdown">
            <div class="dropdown-toggle-44 w-dropdown-toggle">
              <div class="w-icon-dropdown-toggle"></div>
              <div class="div-block-633"><img src="{{ asset('depo_assets/images/Dash---Avatar-02-min.jpg') }}" loading="lazy" width="40" height="40" alt="" class="image-137">
                <div class="text-block-467">Dropdown</div>
              </div>
            </div>
            <nav class="dropdown-list-16 w-dropdown-list">
              <a href="settings.html" class="link-block-27 w-inline-block"><img src="{{ asset('depo_assets/images/file-text.svg') }}" loading="lazy" alt="" class="image-146">
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
                <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();" class="link-block-27 w-inline-block"><img src="{{ asset('depo_assets/images/log-out.svg') }}" loading="lazy" alt="" class="image-151">
                    <div class="text-block-595">Se déconnecter</div>
                  </a>
             </form>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  @yield('content')

  <div class="footer-01">
      <div class="container-31">
        <div class="footer-top">
          <div class="div-block-6349"><img src="{{ asset('depo_assets/images/Logo-Main.svg') }}" width="35" alt="" class="footer-logo-2">
            <a href="#" class="brand-7 w-nav-brand">
              <div class="text-block-494 white"><span class="thin-span-2">B</span>.hives</div>
            </a>
          </div>
          <div class="footer-wrapper-2">
            <div class="footer-title-button">Pas de procrastination</div>
            <a href="account/register.html" class="button w-button">Commence maintenant</a>
          </div>
        </div>
        <div class="w-layout-grid footer-grid-01">
          <div id="w-node-_7a871fc5-bf05-fbf6-6c76-01f73e60fafe-a11c4038" class="footer-column-2">
            <div class="footer-title-button">Inscris toi a la newsletter !</div>
            <div class="form-block-16 w-form">
              <form id="email-form" name="email-form" data-name="Email Form" class="form-19"><input type="email" class="text-field-26 w-input" maxlength="256" name="email" data-name="Email" placeholder="Adresse email" id="email" required=""><input type="submit" value="&gt;" data-wait="Please wait..." class="submit-button-9 w-button"></form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
          <div class="footer-column-2">
            <div class="footer-title">Infos et liens utiles</div>
            <a href="#" class="footer-link-5">Glossaires</a>
            <a href="#" class="footer-link-5">Blog</a>
          </div>
          <div class="footer-column-2">
            <div class="footer-title">Nous concernant</div>
            <a href="#" class="footer-link-5">Team</a>
            <a href="#" class="footer-link-5">Jobs</a>
          </div>
          <div id="w-node-_7a871fc5-bf05-fbf6-6c76-01f73e60fb23-a11c4038" class="footer-column-2">
            <div class="footer-title">Aide</div>
            <a href="#" class="footer-link-5">Aie / FAQs</a>
            <a href="#" class="footer-link-5">Nous contacter</a>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="footer-wrapper-2">
            <a href="#" class="secondary-link">Conditions d&#x27;utilisation</a>
            <a href="#" class="footer-link-5">Privacy Policy</a>
            <a href="#" class="footer-link-5">Privacy Policy</a>
            <a href="#" class="footer-link-5">DSP2</a>
          </div>
          {{--  <div class="footer-wrapper-2">
            
            <a href="#" class="social-link-2 w-inline-block"><img src="{{ asset('depo_assets/images/001-facebook.svg') }}" alt=""></a>
            <a href="#" class="social-link-2 w-inline-block"><img src="{{ asset('depo_assets/images/003-twitter.svg') }}" alt=""></a>
            <a href="#" class="social-link-2 w-inline-block"><img src="{{ asset('depo_assets/images/004-instagram.svg') }}" alt=""></a>
          </div>
        </div>
        <div class="legal-block">
          <div data-hover="1" data-delay="0" class="language-dropdown w-dropdown">
            <div class="language-toggle w-dropdown-toggle">
              <div class="icon-32 w-icon-dropdown-toggle"></div>
              <div class="subtitle">Language</div>
            </div>
            <nav class="language-list w-dropdown-list">
              <a href="#" class="language-link w-inline-block">
                <div class="flag-1"></div>
                <div>English</div>
                <div class="langauge-line-base">
                  <div class="langauge-line-break"></div>
                </div>
              </a>
              <a href="#" class="language-link w-inline-block">
                <div class="flag-2"></div>
                <div>Danish</div>
                <div class="langauge-line-base">
                  <div class="langauge-line-break"></div>
                </div>
              </a>
              <a href="#" class="language-link w-inline-block">
                <div class="flag-3"></div>
                <div>French</div>
                <div class="langauge-line-base">
                  <div class="langauge-line-break"></div>
                </div>
              </a>
              <a href="#" class="language-link w-inline-block">
                <div class="flag-4"></div>
                <div>Norweigian</div>
                <div class="langauge-line-base">
                  <div class="langauge-line-break"></div>
                </div>
              </a>
              <a href="#" class="language-link w-inline-block">
                <div class="flag-5"></div>
                <div>Swedish</div>
              </a>
            </nav>
          </div>
        </div>  --}}
      </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=604b733c887fc763fe20f216" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    @yield('js')
    <script src="{{ asset('depo_assets/js/webflow.js') }}" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
  </body>
  </html>