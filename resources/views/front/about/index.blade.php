@extends('front.layout.app')
@section('title')@lang('transFront.abouts')@endsection
@section('keywords')@lang('transFront.abouts')@endsection
@section('content')

    @if($aboutBanner->img)
        <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{!! Request::root() !!}{!! Storage::disk('local')->url("aboutBanner/image/".$aboutBanner->img) !!}">
            <span class="background_overlay"></span>
            <span class="design-shape position-absolute"><img src="{{ asset('assets/img/shape/tmd-sh.png') }}" alt=""></span>
            <div class="container">
                <div class="ft-breadcrumb-content headline text-center position-relative">
                    <h2>{{ $aboutBanner->getTitle() }}</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="{{ route('index') }}">@lang('transFront.home')</a></li>
                            <li><a href="{{ route('front.contact') }}">@lang('transFront.abouts')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{ asset('assets/webp/bread-bgy.webp') }}">
            <span class="background_overlay"></span>
            <span class="design-shape position-absolute"><img src="{{ asset('assets/img/shape/tmd-sh.png') }}" alt=""></span>
            <div class="container">
                <div class="ft-breadcrumb-content headline text-center position-relative">
                    <h2>@lang('transFront.abouts')</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="{{ route('index') }}">@lang('transFront.home')</a></li>
                            <li><a href="{{ route('front.contact') }}">@lang('transFront.abouts')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- End of Breadcrumb section
        ============================================= -->

    <!-- End of Breadcrumb section
        ============================================= -->

    <!-- Start of About section
        ============================================= -->
    <section id="ft-about-2" class="ft-about-section-2">
        <div class="container">
            <div class="ft-about-content-2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ft-about-text-wrapper-2">
                            <div class="ft-section-title-2 headline pera-content">
                                <span class="sub-title">{{ $about->getTitle() }}</span>
                                <p>{!! html_entity_decode($about->getName()) !!} </p>
                            </div>
                            <div class="ft-about-feature-wrapper-2">
                                <div class="row">
                                    @foreach($goals as $goal)
                                    <div class="col-lg-6">
                                        <div class="ft-about-feature-list-item d-flex align-items-center">
                                            <div class="ft-about-feature-icon d-flex align-items-center justify-content-center">
                                                <i class="fal fa-bullseye-arrow"></i>
                                            </div>
                                            <div class="ft-about-feature-text headline pera-content">
                                                <h3>{{ $goal->getTitle() }}</h3>
                                                <p>{!! html_entity_decode($goal->getName()) !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                        @endforeach
                                </div>
                                {{--<div class="ft-btn-3">
                                    <a class="d-flex justify-content-center align-items-center" href="about.html">Explore More <i class="flaticon-right-arrow"></i></a>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ft-about-img-2-wrapper position-relative">
                            <span class="ft-about-shape1 position-absolute"><img src="{{ asset('assets/img/shape/ab-sh1.png') }}" alt=""></span>
                            <span class="ft-about-shape2 position-absolute"><img src="{{ asset('assets/img/shape/ab-sh2.png') }}" alt=""></span>
                            <div class="ft-about-img-2">
                                <img src="{!! Storage::disk('local')->url($about->image) !!}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About section
        ============================================= -->

    <!-- Start of funfact section
        ============================================= -->

    <section id="ft-funfact" class="ft-funfact-section">
        <div class="container">
            <div class="ft-funfact-content">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-funfact-innerbox text-center">
                            <div class="ft-funfact-icon">
                                <i class="fal fa-users"></i>
                            </div>
                            <div class="ft-funfact-text headline pera-content">
                                <h3><span class="counter">{{ $total->cooperator }}</span>+</h3>
                                <p>@lang('transFront.cooperator')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-funfact-innerbox text-center">
                            <div class="ft-funfact-icon">
                                <i class="fal fa-check"></i>
                            </div>
                            <div class="ft-funfact-text headline pera-content">
                                <h3><span class="counter">{{ $total->where }}</span></h3>
                                <p>@lang('transFront.where')</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="ft-funfact-innerbox text-center">
                            <div class="ft-funfact-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <div class="ft-funfact-text headline pera-content">
                                <h3><span class="counter">{{ $total->logistika }}</span>+</h3>
                                <p>@lang('transFront.logistika')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-funfact-innerbox text-center">
                            <div class="ft-funfact-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="ft-funfact-text headline pera-content">
                                <h3><span class="counter">{{ $total->ofis }}</span>0</h3>
                                <p>@lang('transFront.ofis')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of funfact section
        ============================================= -->

    <!-- Start of goodness feature section
        ============================================= -->
    <section id="ft-goodness-feature" class="ft-goodness-feature-section">
        <div class="container">
            <div class="ft-section-title-2 headline pera-content text-center">
                <h2>{{ $aboutOur->getTitle() }}</h2>
                <p>{!! html_entity_decode($aboutOur->getName()) !!}</p>
            </div>
            <div class="ft-goodness-featured-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="ft-goodness-featured-innerbox text-center">
                            <div class="ft-goodness-featured-icon d-flex align-items-center justify-content-center">
                                <i class="fal fa-anchor"></i>
                            </div>
                            <div class="ft-goodness-featured-text headline pera-content">
                                {{--<h3>@lang('transFront.mushderi')</h3>--}}
                                <p>@lang('transFront.mushd')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ft-goodness-featured-innerbox text-center">
                            <div class="ft-goodness-featured-icon d-flex align-items-center justify-content-center">
                                <i class="fal fa-user-friends"></i>
                            </div>
                            <div class="ft-goodness-featured-text headline pera-content">
                                {{--<h3>@lang('transFront.mohum')</h3>--}}
                                <p>@lang('transFront.mohums')</p> </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ft-goodness-featured-innerbox text-center">
                            <div class="ft-goodness-featured-icon d-flex align-items-center justify-content-center">
                                <i class="fal fa-handshake"></i>
                            </div>
                            <div class="ft-goodness-featured-text headline pera-content">
                              {{--  <h3>@lang('transFront.ynamly')</h3>--}}
                                <p>@lang('transFront.ynaml')</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start of contact page section
        ============================================= -->



@endsection