@extends('front.layout.app')
@section('title')@lang('transFront.services')@endsection
@section('keywords')@lang('transFront.services')@endsection
@section('content')
    @if($serviceBanner->img)
        <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{!! Request::root() !!}{!! Storage::disk('local')->url("serviceBanner/image/".$serviceBanner->img) !!}">
            <span class="background_overlay"></span>
            <span class="design-shape position-absolute"><img src="{{ asset('assets/img/shape/tmd-sh.png') }}" alt=""></span>
            <div class="container">
                <div class="ft-breadcrumb-content headline text-center position-relative">
                    <h2>{{ $serviceBanner->getTitle() }}</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="{{ route('index') }}">@lang('transFront.home')</a></li>
                            <li><a href="{{ route('front.service.index') }}">@lang('transFront.services')</a></li>
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
                    <h2>@lang('transFront.services')</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="{{ route('index') }}">@lang('transFront.home')</a></li>
                            <li><a href="{{ route('front.service.index') }}">@lang('transFront.services')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    @endif



    <!-- End of Breadcrumb section
        ============================================= -->

    <!-- Start of Service page section
        ============================================= -->
    <section id="ft-service-page" class="ft-service-page-section page-padding">
        <div class="container">
            <div class="ft-section-title-2 headline pera-content text-center">
                <h2>{{ $service->getTitle() }}
                </h2>
            </div>
            <div class="ft-about-content-3">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="ft-about-img-wrapper-3 position-relative">
                            <div class="ft-about-img-3">
                                <img src="{!! Storage::disk('local')->url($service->image_index) !!}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ft-about-text-3">

                            <div class="ft-about-sub-text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                {!! str_limit(strip_tags(html_entity_decode($service->getName())), 350) !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Service page section
        ============================================= -->

    <!-- Start of Project section
        ============================================= -->



    <!-- Start of FAQ why choose  section
        ============================================= -->
    <section id="ft-faq-why-choose-us" class="ft-faq-why-choose-us-section">
        <div class="container">
            <div class="ft-faq-why-choose-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ft-faq-content">
                            <div class="ft-section-title-2 headline pera-content">
                                <h2>{{ $serviceAbout->getTitle() }}</h2>
                            </div>
                            <div class="ft-service-details-text-wrapper">
                                <p>{!! html_entity_decode($serviceAbout->getName()) !!} </p>
                                <div class="ft-service-details-counter-wrapper">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ft-why-choose-content-2">
                            <div class="ft-section-title-2 headline pera-content">
                                <h2>@lang('transFront.ayratynlyk')</h2>
                            </div>
                            <div class="ft-why-choose-feature-wrapper-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="ft-why-choose-feature-list-item-2">
                                            <div class="ft-why-choose-feature-icon">
                                                <i class="flaticon-community"></i>
                                            </div>
                                            <div class="ft-why-choose-feature-text headline pera-content">
                                                <h3>@lang('transFront.hunarmen')</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="ft-why-choose-feature-list-item-2">
                                            <div class="ft-why-choose-feature-icon">
                                                <i class="flaticon-compliance"></i>
                                            </div>
                                            <div class="ft-why-choose-feature-text headline pera-content">
                                                <h3>@lang('transFront.onum')</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="ft-why-choose-feature-list-item-2">
                                            <div class="ft-why-choose-feature-icon">
                                                <i class="flaticon-compliant"></i>
                                            </div>
                                            <div class="ft-why-choose-feature-text headline pera-content">
                                                <h3>@lang('transFront.tejribe')</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="ft-why-choose-feature-list-item-2">
                                            <div class="ft-why-choose-feature-icon">
                                                <i class="flaticon-worldwide"></i>
                                            </div>
                                            <div class="ft-why-choose-feature-text headline pera-content">
                                                <h3>@lang('transFront.hyzmats')</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection