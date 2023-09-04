

<header id="ft-header" class="ft-header-section header-style-two">
    <div class="ft-header-top">
        <div class="container">
            <div class="ft-header-top-content d-flex justify-content-between align-items-center">
                <div class="ft-header-top-cta ul-li">
                    <ul>
                        <li><a href=""><i class="fas fa-map-marker-alt"></i> {!! html_entity_decode($contact->getName()) !!}</a></li>
                        <li><a href="mailto:{{ $contact->email }}"><i class="fas fa-envelope"></i> {{ $contact->email }}</a></li>
                    </ul>
                </div>
                <div class="ft-header-cta-info d-flex">
                    <div class="ft-header-cta-icon d-flex justify-content-center align-items-center">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="ft-header-cta-text headline pera-content">
                        <p></p>
                      <h3 class="mt-2" style="color: white">  <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ft-header-main-menu-wrapper">
        <div class="container">
            <div class="ft-header-main-menu-area position-relative">
                <div class="ft-header-main-menu d-flex align-items-center justify-content-between position-relative">
                    <div class="ft-site-logo-area">
                        <div class="ft-site-logo position-relative">
                            <a href="{{ route('index') }}"><img src="{{ asset('assets/webp/nur.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="ft-main-navigation-area">
                        <nav class="ft-main-navigation clearfix ul-li">
                            <ul id="ft-main-nav" class="nav navbar-nav clearfix">
                                <li><a href="{{ route('index') }}">@lang('transFront.home')</a></li>
                                <li><a href="{{ route('front.about.index') }}">@lang('transFront.abouts')</a></li>
                                <li class="dropdown">
                                    <a href="{{ route('front.service.index') }}">@lang('transFront.services')</a>
                                    <ul class="dropdown-menu clearfix">
                                        @foreach($services as $service)
                                            <li><a href="{!! route('front.service.service_single', $service->id) !!}">{{ $service->getTitle() }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('front.post.index') }}">@lang('transAdmin.posts')</a></li>
                                <li><a href="{{ route('front.contact') }}">@lang('transFront.contact')</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="ft-header-cta-btn">
                        <a  href="{!! route('language', $key = 'tm') !!}">
                            TM
                        </a>
                        <a href="{!! route('language', $key = 'ru') !!}" class="ml-5">
                            RUS
                        </a>
                        <a href="{!! route('language', $key = 'en') !!}" class="ml-5">
                            ENG
                        </a>
                    </div>
                </div>
                <div class="mobile_menu position-relative">
                    <div class="mobile_menu_button open_mobile_menu">
                        <i class="fal fa-bars"></i>
                    </div>
                    <div class="mobile_menu_wrap">
                        <div class="mobile_menu_overlay open_mobile_menu"></div>
                        <div class="mobile_menu_content">
                            <div class="mobile_menu_close open_mobile_menu">
                                <i class="fal fa-times"></i>
                            </div>
                            <div class="m-brand-logo">
                                <a href="{{ route('index') }}"><img src="{{ asset('assets/webp/Logo.png') }}" alt=""></a>
                            </div>
                            <nav class="mobile-main-navigation  clearfix ul-li">
                                <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                     <li><a href="{{ route('index') }}">@lang('transFront.home')</a></li>
                                <li><a href="{{ route('front.about.index') }}">@lang('transFront.abouts')</a></li>
                                <li class="dropdown">
                                    <a href="{{ route('front.service.index') }}">@lang('transFront.services')</a>
                                    <ul class="dropdown-menu clearfix">
                                        @foreach($services as $service)
                                            <li><a style="line-height: 1.8" href="{!! route('front.service.service_single', $service->id) !!}">{{ $service->getTitle() }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('front.post.index') }}">@lang('transAdmin.posts')</a></li>
                                <li><a href="{{ route('front.contact') }}">@lang('transFront.contact')</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- /Mobile-Menu -->
                </div>
            </div>
        </div>
    </div>
</header>