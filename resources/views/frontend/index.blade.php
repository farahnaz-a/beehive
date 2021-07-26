@extends('layouts.frontend')


@section('content')

<div class="slider-container">
    <div data-delay="4000" data-animation="slide" data-autoplay="1" data-nav-spacing="2" data-duration="1000"
        data-infinite="1" class="hero-slider w-slider">
        <div class="mask-5 w-slider-mask">
            @php
            $key = 1;
            @endphp
            @foreach ($banners as $banner)
            <div class="slide-9 w-slide">
                <div class="slide-center">
                    <div class="slide-content">
                        <div class="flex-vertical max-50">
                            <h1 class="h1">{{ $banner->title }}<br></h1>
                            <h2 class="h2">{{ $banner->subtitle }}</h2>
                            <p class="paragraph-31">
                                {{ $banner->description }}
                            </p>
                            <div class="spacer40"></div>
                            <div class="div-block-6357">
                                <div>
                                    <a href="#Tarifs" class="button w-button">Créer un compte</a>
                                </div>
                                <div class="div-block-6359">
                                    <a href="account/register.html" class="button button-outline w-button">Lister ma
                                        propriété</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex-fix">
                            <div class="content-image-wrapper _{{ $key }} @if($key == 1 || $key == 3) content-image @endif " style="background-image: url({{ asset('uploads/banners') }}/{{ $banner->image }}) !important;">
                                <div class="hero-video-button">
                                    <div data-w-id="a02d2bd4-a580-86c9-8560-74433824309f"
                                        class="video-button-background">
                                        <div data-poster-url="https://uploads-ssl.webflow.com/60675f13ea324fdd4af9ef2a/60785e47c656dc751d6416ef_Video002-poster-00001.jpg"
                                            data-video-urls="videos/Video002-poster-00001.jpg,videos/Video002-transcode.mp4,videos/Video002-transcode.webm"
                                            data-autoplay="true" data-loop="true" data-wf-ignore="true"
                                            data-w-id="a02d2bd4-a580-86c9-8560-7443382430a0"
                                            class="button-video w-background-video w-background-video-atom"><video
                                                autoplay="" loop=""
                                                style="background-image:url(&quot;https://uploads-ssl.webflow.com/60675f13ea324fdd4af9ef2a/60785e47c656dc751d6416ef_Video002-poster-00001.jpg&quot;)"
                                                muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                                                <source src="videos/Video002-poster-00001.jpg" data-wf-ignore="true">
                                                <source src="videos/Video002-transcode.mp4" data-wf-ignore="true">
                                                <source src="videos/Video002-transcode.webm" data-wf-ignore="true">
                                            </video>
                                            <div class="overlay light"></div>
                                        </div>
                                    </div>
                                    <div data-w-id="a02d2bd4-a580-86c9-8560-7443382430a2" class="video-hover-button">
                                        <div data-w-id="a02d2bd4-a580-86c9-8560-7443382430a3"
                                            class="video-icon-wrapper"><img
                                                src="{{ asset('frontend_assets/images/play-icon.svg') }}" loading="lazy"
                                                width="25" alt="" class="video-icon"></div>
                                    </div>
                                    <div data-w-id="a02d2bd4-a580-86c9-8560-7443382430a5" class="video-button-waves">
                                        <div data-w-id="a02d2bd4-a580-86c9-8560-7443382430a6" class="wave-one"></div>
                                        <div data-w-id="a02d2bd4-a580-86c9-8560-7443382430a7" class="wave-two"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
            $key++;
            @endphp
            @endforeach
        </div>
        <div class="left-arrow-4 w-slider-arrow-left">
            <div class="fontawesome"></div>
        </div>
        <div class="right-arrow-4 w-slider-arrow-right">
            <div class="fontawesome"></div>
        </div>
        <div class="rule"></div>
        <h1 class="hero-h4">B.free - B.smart - B.hives</h1>
        <div class="scroll-indicator-container">
            <a href="#" class="scroll-indicator-2 w-inline-block">
                <div class="scroll"></div>
            </a>
        </div>
        <div class="menu-block-primary">
            <div class="menu-padding">
                <div class="menu-link-container">
                    <a href="#" class="menu-link-2">Home</a>
                    <a href="#" class="menu-link-2">Portfolio</a>
                    <a href="#" class="menu-link-2">About</a>
                    <a href="#" class="menu-link-2">Contact</a>
                    <div class="search-container mobile">
                        <div class="button-container">
                            <form action="/search" class="search-8 w-form">
                                <div class="input-container"><input type="search" class="search-input-10 w-input"
                                        maxlength="256" name="query" placeholder="Search…" id="search" required="">
                                </div><input type="submit" value="" class="search-button-5 w-button">
                            </form>
                            <div class="search-open-trigger"></div>
                            <div class="fontawesome-close"></div>
                        </div>
                    </div>
                    <div class="fontawesome-close-menu"></div>
                </div>
            </div>
        </div>
        <div class="slide-nav-3 w-slider-nav"></div>
    </div>
</div>
</div>
<div id="steps" class="section-16">



    <div class="title-wrap-4">
        <h1>Comment ca marche ?</h1>
        <div class="paragraph">On t&#x27;explique, c&#x27;est vraiment simple</div>
    </div>
    <div class="grid-wrapper-4">
        <div id="w-node-bd33aa0e-369d-1483-425c-3f198faa0930-a11c4038" class="steps-grid">
            <div id="w-node-bd33aa0e-369d-1483-425c-3f198faa0931-a11c4038"
                data-w-id="bd33aa0e-369d-1483-425c-3f198faa0931" class="steps-sticky-card">
                <div class="how-to-image">
                    <div class="hero-background-image-4 steps-background"
                        style="background-image: url({{ asset('uploads/works') }}/{{ $works->image }})">
                        <div style="display:block;-webkit-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                            class="background-load-top"></div>
                        <div style="display:block;-webkit-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                            class="background-load-bottom"></div>
                    </div>
                </div>
                <div class="steps-intro">
                    <div class="steps-description">
                        <div>
                            <div class="subtitle-wrapper">
                                <div class="text-block-489">Besoin d&#x27;aide ?</div>
                            </div>
                            <h2 class="heading-156">{{ $works->title }},<br><span
                                    class="text-span-229">{{ $works->subtitle }}</span></h2>
                        </div>
                        <div class="paragraph left">{{ $works->description }}</div>
                    </div>
                    <a href="#" id="w-node-bd33aa0e-369d-1483-425c-3f198faa0940-a11c4038"
                        data-w-id="bd33aa0e-369d-1483-425c-3f198faa0940" class="button w-inline-block">
                        <div>Contacte-nous !</div>
                    </a>
                </div>
            </div>
            <div id="w-node-bd33aa0e-369d-1483-425c-3f198faa0943-a11c4038" class="steps-cards">
                <div id="w-node-bd33aa0e-369d-1483-425c-3f198faa0944-a11c4038" class="subtitle-intro-wrapper">
                    <div class="subtitle-3">Suis les étapes ci-dessous</div>
                    <div id="w-node-bd33aa0e-369d-1483-425c-3f198faa0947-a11c4038" class="horizontal-line"></div>
                </div>
                <div id="w-node-bd33aa0e-369d-1483-425c-3f198faa0948-a11c4038" class="steps-tracker">
                    <div class="how-it-works-fill"></div>
                </div>
                <div id="w-node-bd33aa0e-369d-1483-425c-3f198faa094a-a11c4038" class="steps-card-wrapper">
                    <div class="steps-card">
                        <div class="steps-circle">
                            <div class="steps-dot"></div>
                            <div class="card-arrow"></div>
                            <div class="steps-circle-outline"></div>
                        </div>
                        @foreach ($worksteps as $key => $workstep)
                        <div id="w-node-bd33aa0e-369d-1483-425c-3f198faa0950-a11c4038" class="steps-content">
                            <div id="w-node-bd33aa0e-369d-1483-425c-3f198faa0951-a11c4038" class="steps-icon">
                                <div>{{ $loop -> index + 1 }}</div>
                            </div>
                            <div id="w-node-bd33aa0e-369d-1483-425c-3f198faa0954-a11c4038" class="steps-description">
                                <h3 class="heading-157">{{ $workstep->title }}</h3>
                                <img src="{{ asset('uploads/worksteps') }}/{{ $workstep->image }}" width="150px"
                                    loading="lazy" alt="">
                                <div class="paragraph left">
                                    {{ $workstep->description }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








<div class="section-16 grey">
    <div class="title-wrap-4">
        <h1>Derniers projets sur</h1>
        <div class="paragraph">Pricing built for people just like you.</div>
    </div>
    <div class="grid-wrapper-4">
        <div id="w-node-c4774a9a-6739-ccd0-58df-67e2ea1b807a-a11c4038" class="membership-plans-wrapper-2">
            <div class="popular-vacations-2">
                <div class="vacations-tabs-wrapper">
                    <div data-duration-out="500" data-duration-in="500" class="vacations-tabs w-tabs">
                        <div class="vacations-tab-menu w-tab-menu" role="tablist">
                            <a data-w-tab="Tab 1" id="w-node-c4774a9a-6739-ccd0-58df-67e2ea1b8083-a11c4038"
                                data-w-id="c4774a9a-6739-ccd0-58df-67e2ea1b8083"
                                class="vacations-tab-link-2 w-inline-block w-tab-link w--current"
                                href="#w-tabs-0-data-w-pane-0" role="tab" aria-controls="w-tabs-0-data-w-pane-0"
                                aria-selected="true" cursorshover="true">
                                <div class="membership-circle">
                                    <div class="membership-dot one" style="background-color: rgb(8, 28, 58);"></div>
                                    <div class="membership-outline-circle"
                                        style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; border-color: rgb(8, 28, 58);"
                                        cursorshover="true">
                                    </div>
                                </div>
                                <div class="text-block-490" cursorshover="true">Paris</div>
                            </a>
                            <a data-w-tab="Tab 3" id="w-node-c4774a9a-6739-ccd0-58df-67e2ea1b8089-a11c4038"
                                data-w-id="c4774a9a-6739-ccd0-58df-67e2ea1b8089"
                                class="vacations-tab-link-2 w-inline-block w-tab-link" href="#w-tabs-0-data-w-pane-1"
                                role="tab" aria-controls="w-tabs-0-data-w-pane-1" aria-selected="false"
                                cursorshover="true" tabindex="-1">
                                <div class="membership-circle">
                                    <div class="membership-dot two" style="background-color: rgb(230, 230, 243);">
                                    </div>
                                    <div class="membership-outline-circle"
                                        style="transform: translate3d(0px, 0px, 0px) scale3d(0, 0, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; border-color: rgb(230, 230, 243);">
                                    </div>
                                </div>
                                <div class="text-block-491" cursorshover="true">Lyon</div>
                            </a>
                            <a data-w-tab="Tab 4" id="w-node-c4774a9a-6739-ccd0-58df-67e2ea1b808f-a11c4038"
                                data-w-id="c4774a9a-6739-ccd0-58df-67e2ea1b808f"
                                class="vacations-tab-link-2 w-inline-block w-tab-link" href="#w-tabs-0-data-w-pane-2"
                                role="tab" aria-controls="w-tabs-0-data-w-pane-2" aria-selected="false"
                                cursorshover="true" tabindex="-1">
                                <div class="membership-circle" cursorshover="true">
                                    <div class="membership-dot three" style="background-color: rgb(230, 230, 243);">
                                    </div>
                                    <div class="membership-outline-circle"
                                        style="transform: translate3d(0px, 0px, 0px) scale3d(0, 0, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; border-color: rgb(230, 230, 243);">
                                    </div>
                                </div>
                                <div class="text-block-492" cursorshover="true">Marseille</div>
                            </a>
                            <a data-w-tab="Tab 5" id="w-node-c4774a9a-6739-ccd0-58df-67e2ea1b8095-a11c4038"
                                data-w-id="c4774a9a-6739-ccd0-58df-67e2ea1b8095"
                                class="vacations-tab-link-2 w-inline-block w-tab-link" href="#w-tabs-0-data-w-pane-3"
                                role="tab" aria-controls="w-tabs-0-data-w-pane-3" aria-selected="false"
                                cursorshover="true" tabindex="-1">
                                <div class="membership-circle">
                                    <div class="membership-dot four" style="background-color: rgb(230, 230, 243);">
                                    </div>
                                    <div class="membership-outline-circle"
                                        style="transform: translate3d(0px, 0px, 0px) scale3d(0, 0, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; border-color: rgb(230, 230, 243);">
                                    </div>
                                </div>
                                <div class="text-block-493" cursorshover="true">Bordeaux</div>
                            </a>
                        </div>
                        <div class="vacations-tabs-content w-tab-content">
                            <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active" id="w-tabs-0-data-w-pane-0"
                                role="tabpanel" aria-labelledby="w-node-c4774a9a-6739-ccd0-58df-67e2ea1b8083-a11c4038"
                                style="opacity: 1; transition: opacity 500ms ease 0s;">
                                <div class="collection-list-wrapper-17 w-dyn-list">
                                    <div role="list" class="popular-vacations-wrapper w-dyn-items">
                                        @forelse ($paris as $pari)
                                        <div role="listitem" class="popular-location-item w-dyn-item">
                                          <div data-w-id="e062cad8-7165-6a07-2c9e-83b34a98c8ae"
                                              class="vacations-verticle-card-2"
                                              style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; background-color: rgba(255, 255, 255, 0); border-color: rgba(192, 192, 211, 0.2);">
                                              <div class="verticle-card-image">
                                                  <div data-w-id="e062cad8-7165-6a07-2c9e-83b34a98c8b0"
                                                      style="background-image: url({{ asset('uploads/portfolios') }}/{{ $pari->image }}); transform: translate3d(-0.0012px, -0.0012px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; will-change: transform;"
                                                      class="hero-background-image-4">
                                                  </div>
                                              </div>
                                              <div class="vacation-card-bottom">
                                                  <div class="vacation-card-info">
                                                      <h4 class="heading-158">{{ $pari->title }}</h4>
                                                      <div class="body-display small">{{ $pari->curre }} {{ $pari->price }}</div>
                                                  </div>
                                                  <div class="vacation-details">
                                                      <div id="w-node-e062cad8-7165-6a07-2c9e-83b34a98c8b8-a11c4038"
                                                          class="vacation-price-2">
                                                          <div class="subtitle-5 small">{{ $pari->minititle }}</div>
                                                          <div class="dynamic-price-text">
                                                            <div>{{ $pari->curre }}</div>
                                                              <div>{{ $pari->miniprice }}</div>
                                                          </div>
                                                      </div>
                                                      <a id="w-node-e062cad8-7165-6a07-2c9e-83b34a98c8c0-a11c4038" href="{{ route('project.details', $pari->id) }}" class="outline-button small w-inline-block"  style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"  cursorshover="true">
                                                        Details
                                                      </a>
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
                            <div data-w-tab="Tab 3" class="w-tab-pane" id="w-tabs-0-data-w-pane-1" role="tabpanel"
                                aria-labelledby="w-node-c4774a9a-6739-ccd0-58df-67e2ea1b8089-a11c4038" style="">
                                <div class="collection-list-wrapper-17 w-dyn-list">
                                  <div role="list" class="popular-vacations-wrapper w-dyn-items">
                                    @forelse ($lyon as $pari)
                                    <div role="listitem" class="popular-location-item w-dyn-item">
                                      <div data-w-id="e062cad8-7165-6a07-2c9e-83b34a98c8ae"
                                          class="vacations-verticle-card-2"
                                          style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; background-color: rgba(255, 255, 255, 0); border-color: rgba(192, 192, 211, 0.2);">
                                          <div class="verticle-card-image">
                                              <div data-w-id="e062cad8-7165-6a07-2c9e-83b34a98c8b0"
                                                  style="background-image: url({{ asset('uploads/portfolios') }}/{{ $pari->image }}); transform: translate3d(-0.0012px, -0.0012px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; will-change: transform;"
                                                  class="hero-background-image-4">
                                              </div>
                                          </div>
                                          <div class="vacation-card-bottom">
                                              <div class="vacation-card-info">
                                                  <h4 class="heading-158">{{ $pari->title }}</h4>
                                                  <div class="body-display small">{{ $pari->curr }} {{ $pari->price }}</div>
                                              </div>
                                              <div class="vacation-details">
                                                  <div id="w-node-e062cad8-7165-6a07-2c9e-83b34a98c8b8-a11c4038"
                                                      class="vacation-price-2">
                                                      <div class="subtitle-5 small">{{ $pari->minititle }}</div>
                                                      <div class="dynamic-price-text">
                                                        <div>{{ $pari->curre }}</div>
                                                          <div>{{ $pari->miniprice }}</div>
                                                      </div>
                                                  </div>
                                                  <a id="w-node-e062cad8-7165-6a07-2c9e-83b34a98c8c0-a11c4038"
                                                      href="{{ route('project.details', $pari->id) }}" class="outline-button small w-inline-block"
                                                      style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                                      cursorshover="true">
                                                      Details
                                                  </a>
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
                            <div data-w-tab="Tab 4" class="w-tab-pane" id="w-tabs-0-data-w-pane-2" role="tabpanel"
                                aria-labelledby="w-node-c4774a9a-6739-ccd0-58df-67e2ea1b808f-a11c4038" style="">
                                <div class="collection-list-wrapper-17 w-dyn-list">
                                  <div role="list" class="popular-vacations-wrapper w-dyn-items">
                                    @forelse ($mars as $pari)
                                    <div role="listitem" class="popular-location-item w-dyn-item">
                                      <div data-w-id="e062cad8-7165-6a07-2c9e-83b34a98c8ae"
                                          class="vacations-verticle-card-2"
                                          style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; background-color: rgba(255, 255, 255, 0); border-color: rgba(192, 192, 211, 0.2);">
                                          <div class="verticle-card-image">
                                              <div data-w-id="e062cad8-7165-6a07-2c9e-83b34a98c8b0"
                                                  style="background-image: url({{ asset('uploads/portfolios') }}/{{ $pari->image }}); transform: translate3d(-0.0012px, -0.0012px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; will-change: transform;"
                                                  class="hero-background-image-4">
                                              </div>
                                          </div>
                                          <div class="vacation-card-bottom">
                                              <div class="vacation-card-info">
                                                  <h4 class="heading-158">{{ $pari->title }}</h4>
                                                  <div class="body-display small">{{ $pari->curr }} {{ $pari->price }}</div>
                                              </div>
                                              <div class="vacation-details">
                                                  <div id="w-node-e062cad8-7165-6a07-2c9e-83b34a98c8b8-a11c4038"
                                                      class="vacation-price-2">
                                                      <div class="subtitle-5 small">{{ $pari->minititle }}</div>
                                                      <div class="dynamic-price-text">
                                                        <div>{{ $pari->curre }}</div>
                                                          <div>{{ $pari->miniprice }}</div>
                                                      </div>
                                                  </div>
                                                  <a id="w-node-e062cad8-7165-6a07-2c9e-83b34a98c8c0-a11c4038"
                                                      href="{{ route('project.details', $pari->id) }}" class="outline-button small w-inline-block"
                                                      style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                                      cursorshover="true">
                                                      Details
                                                  </a>
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
                            <div data-w-tab="Tab 5" class="w-tab-pane" id="w-tabs-0-data-w-pane-3" role="tabpanel"
                                aria-labelledby="w-node-c4774a9a-6739-ccd0-58df-67e2ea1b8095-a11c4038" style="">
                                <div class="collection-list-wrapper-17 w-dyn-list">
                                  <div role="list" class="popular-vacations-wrapper w-dyn-items">
                                  @forelse ($bors as $pari)
                                  <div role="listitem" class="popular-location-item w-dyn-item">
                                    <div data-w-id="e062cad8-7165-6a07-2c9e-83b34a98c8ae"
                                        class="vacations-verticle-card-2"
                                        style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; background-color: rgba(255, 255, 255, 0); border-color: rgba(192, 192, 211, 0.2);">
                                        <div class="verticle-card-image">
                                            <div data-w-id="e062cad8-7165-6a07-2c9e-83b34a98c8b0"
                                                style="background-image: url({{ asset('uploads/portfolios') }}/{{ $pari->image }}); transform: translate3d(-0.0012px, -0.0012px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; will-change: transform;"
                                                class="hero-background-image-4">
                                            </div>
                                        </div>
                                        <div class="vacation-card-bottom">
                                            <div class="vacation-card-info">
                                                <h4 class="heading-158">{{ $pari->title }}</h4>
                                                <div class="body-display small">{{ $pari->curr }}{{ $pari->price }}</div>
                                            </div>
                                            <div class="vacation-details">
                                                <div id="w-node-e062cad8-7165-6a07-2c9e-83b34a98c8b8-a11c4038"
                                                    class="vacation-price-2">
                                                    <div class="subtitle-5 small">{{ $pari->minititle }}</div>
                                                    <div class="dynamic-price-text">
                                                        <div>{{ $pari->curre }}</div>
                                                        <div>{{ $pari->miniprice }}</div>
                                                    </div>
                                                </div>
                                                <a id="w-node-e062cad8-7165-6a07-2c9e-83b34a98c8c0-a11c4038"
                                                    href="{{ route('project.details', $pari->id) }}" class="outline-button small w-inline-block"
                                                    style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                                    cursorshover="true">
                                                    Details
                                                </a>
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
                        <div style="width: 25%; height: 2px;" class="location-indicator-fill"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="section-16">
    <div data-animation="cross" data-easing="ease-out" data-disable-swipe="1" data-duration="400" id="flowbaseSlider"
        class="testimonial-slider w-slider">
        <div class="mask-4 w-slider-mask">
            <div class="testimonial-slide w-slide">
                <div class="testimonial-columns">
                    <div class="testimonial-image-block"><img src="{{ asset('uploads/testimonials') }}/{{ $testimonial->image }}"
                            sizes="(max-width: 479px) 89vw, (max-width: 767px) 390px, (max-width: 991px) 44vw, (max-width: 1279px) 37vw, (max-width: 1919px) 38vw, 556px"
                            srcset="{{ asset('uploads/testimonials') }}/{{ $testimonial->image }} 500w, {{ asset('uploads/testimonials') }}/{{ $testimonial->image }} 612w"
                            alt="" class="testimonial-image"></div>
                    <div class="testimonial-content-wrap">
                        <div class="testimonial-content-block">
                            <p class="testimonial-paragraph">{{ $testimonial->description }}</p><img
                                src="https://uploads-ssl.webflow.com/5db2e8f6b44d610f91587fe2/5dd366e1708b4de445b60a2e_quote.svg"
                                alt="" class="quote-image">
                            <div class="testimonial-author-wrap"><img
                                    src="{{ asset('uploads/testimonials') }}/{{ $testimonial->logo }}"
                                    alt="" class="logo-2">
                                <h4 class="author-name-2">{{ $testimonial->name }} {{ $testimonial->profession }}</h4>
                            </div>
                            <div class="slider-arrow-wrap">
                                <a href="#" class="slider-left w-inline-block"><img
                                        src="https://uploads-ssl.webflow.com/5db2e8f6b44d610f91587fe2/5dd34fac58fd7fd3eacb7937_arrow_blue_left.svg"
                                        alt="" class="arrow-3"></a>
                                <div class="arrow-disabled"><img
                                        src="https://uploads-ssl.webflow.com/5db2e8f6b44d610f91587fe2/5dd350a4e192cd7993b77973_arrow_light_right.svg"
                                        alt="" class="arrow-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="left-arrow-3 w-slider-arrow-left">
            <div class="icon-31 w-icon-slider-left"></div>
        </div>
        <div class="right-arrow-3 w-slider-arrow-right">
            <div class="icon-31 w-icon-slider-right"></div>
        </div>
        <div class="slide-nav-2 w-slider-nav w-round"></div>
    </div>

</div>





<section id="Tarifs" class="section-16 purple">
    <div class="container-34">
        <div class="title-wrap-4">
            <h1>Tarifs</h1>
            <div class="paragraph">Choisis l&#x27;offre qui te convient le mieux. Pas satisfait? <br>On te rembourse,
                pas de questions.</div>
        </div>
        <div class="price-wrap">
            <div class="feature-grid-wrap">
                <div class="w-layout-grid grid-81">
                    <div class="price-card">
                        <div class="price-top-wrap-2">
                            <h1>Free</h1>
                        </div>
                        <div class="price-caption">{{ $free->title }}</div>
                        <div class="w-layout-grid check-grid">
                          @if ($free->features != "")
                            @foreach(explode(',', $free->features) as $info) 
                              <div class="feature-wrap-3"><img src="{{ asset('frontend_assets/images/Check-Dark.svg') }}"
                                alt="" class="check-2">
                                <div>{{ $info }}</div>
                              </div>
                            @endforeach
                           @endif
                          
                            
                        </div>
                        <a href="{{ route('register') }}" class="button w-button">Créer un compte</a>
                    </div>
                    <div class="price-card-dark-2">
                        <div class="price-top-wrap-2">
                            <h1>Premium</h1>
                        </div>
                        <div class="price-caption">{{ $premium->title }}</div>
                        <div class="w-layout-grid check-grid-large-2">
                            @if($premium->features != '')
                            @foreach (explode(',' , $premium->features) as $item)
                            <div class="feature-wrap-3"><img
                              src="https://uploads-ssl.webflow.com/60d791e86cf8470cc8ce842f/60d791e86cf84700cace8450_Check%20Light.svg"
                              alt="" class="check-2">
                              <div class="feature-label-2">{{ $item }}</div>
                          </div>
                            @endforeach
                            @endif
                        </div>
                        <div>
                            <a href="#" class="button-outline button w-button">Créer un compte ({{ $premium->price }}€/month)</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section-16">
    <div class="title-wrap-4">
        <h1>Questions les plus fréquentes</h1>
        <div class="paragraph">Choisis l&#x27;offre qui te convient le mieux. Pas satisfait? <br>On te rembourse, pas de
            questions.</div>
    </div>
    <div class="container-29">
        <div class="column-wrapper">
          <div class="column-71">
          @foreach ($faqshalf as $key => $faq)
              <div class="faq-question-wrap-2">
                  <div class="faq">
                      <div class="faq-circle"><img
                              src="https://i.postimg.cc/RFkv7zSB/586769-200.png"
                              alt="" class="faq-icon noselect"></div>
                      <h3 class="faq-h3 noselect">{{ $faq->question }}</h3>
                  </div>
                  <div class="faq-content-2">
                      <p class="paragraph left">{{ $faq->answer }}<br></p>
                  </div>
              </div>
              @endforeach
          </div>
          <div class="column-71">
          @foreach ($faqsfull as $key => $faq)
              <div class="faq-question-wrap-2">
                  <div class="faq">
                      <div class="faq-circle"><img
                              src="https://i.postimg.cc/RFkv7zSB/586769-200.png"
                              alt="" class="faq-icon noselect"></div>
                      <h3 class="faq-h3 noselect">{{ $faq->question }}</h3>
                  </div>
                  <div class="faq-content-2">
                      <p class="paragraph left">{{ $faq->answer }}<br></p>
                  </div>
              </div>
              @endforeach
          </div>
        </div>
    </div>
</div>
<div class="section-16">
    <div class="title-wrap-4">
        <h1>Où investir en France</h1>
        <div class="paragraph">Choisis l&#x27;offre qui te convient le mieux. Pas satisfait? <br>On te rembourse, pas de
            questions.</div>
    </div>
    <div class="div-block-6354">
        <div class="w-layout-grid cities-grid">
           @foreach ($invests as $invest)
           <div class="card-2 card1-content" style="background-image: url({{ asset('uploads/invests') }}/{{ $invest->image }}) !important;">
            <h3 class="card-headline">{{ ucwords($invest->name) }}</h3>
            <a href="#" class="button-46 default-button card-cta w-button">Explore</a>
            <div></div>
        </div>
           @endforeach
        </div>
        <div class="w-layout-grid grid-80">
            @foreach ($cities as $city)
            <a href="#" class="w-inline-block">
              <div>{{ $city->name }}</div>
          </a>
            @endforeach
        </div>
    </div>
</div>

@endsection
