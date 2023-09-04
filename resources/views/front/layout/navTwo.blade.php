<header class="ft1-main-header">

    <!-- Header Top -->
    <div class="ft1-header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!-- Top Left -->
                <div class="ft1-top-left pull-left">
                    <ul class="top-list">
                        <li><span class="icon flaticon-location"></span><a href="#">{!! html_entity_decode($contact->getName()) !!}</a> </li>
                        <li><span class="icon flaticon-email"></span><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></li>
                    </ul>
                </div>

                <!-- Top Right -->
                <div class="ft1-top-right pull-right">
                    <div class="language dropdown">
                        <a  href="{!! route('language', $key = 'tm') !!}">
                            TM
                        </a>
                        <a href="{!! route('language', $key = 'ru') !!}" >
                            RUS
                        </a>
                        <a href="{!! route('language', $key = 'en') !!}" >
                            ENG
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container clearfix">

                <!-- Logo -->
                <div class="pull-left logo-box">
                    <div class="logo mt-2"><a href=""><img src="{{ asset('assets/webp/Logo.png') }}" alt="" title=""></a></div>
                </div>

                <div class="nav-outer clearfix">
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon"><img src="{{ asset('assets/images/icons/menu.png') }}" alt="" /></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{ route('index') }}">@lang('transFront.home')</a></li>
                                <li><a href="{{ route('front.about.index') }}">@lang('transFront.abouts')</a></li>
                                <li class="dropdown">
                                    <a href="{{ route('front.service.index') }}">@lang('transFront.services')</a>
                                    <ul>
                                        @foreach($services as $service)
                                            <li><a href="{!! route('front.service.service_single', $service->id) !!}">{{ $service->getTitle() }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('front.post.index') }}">@lang('transAdmin.posts')</a></li>
                                <li><a href="{{ route('front.contact') }}">@lang('transFront.contact')</a></li>
                            </ul>
                        </div>
                    </nav>

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">

                        <!-- Btn Box -->
                        <div class="btn-box">
                            <a href="tel:{{ $contact->phone }}" class="theme-btn btn-style-one"><span class="icon fas fa-phone-alt"></span>{{ $contact->phone }}</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{ route('index') }}" title=""><img src="{{ asset('assets/webp/210x75 01.png') }}" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->

                <!-- Main Menu End-->
                <div class="outer-box clearfix">

                    <!-- Btn Box -->
                    {{--<div class="btn-box">
                        <a href="#" class="theme-btn btn-style-one">Fee Quote <span class="icon fas fa-angle-double-right"></span></a>
                    </div>--}}

                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon"><img src="{{ asset('assets/webp/210x75 01.png') }}" alt="" /></span></div>

                </div>

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fas fa-times"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ route('index') }}"><img src="{{ asset('assets/webp/210x75 01.png') }}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <a  href="{!! route('language', $key = 'tm') !!}">
                TM
            </a>
            <a href="{!! route('language', $key = 'ru') !!}" >
                RUS
            </a>
            <a href="{!! route('language', $key = 'en') !!}" >
                ENG
            </a>
        </nav>
    </div><!-- End Mobile Menu -->

</header>