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
                <h2>@lang('transFront.ulgam')
                </h2>
            </div>
            <div class="ft-service-page-items">
                <div class="row">
                  @foreach($services as $service)
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-service-innerbox-2 position-relative">
                            @if($service->img)
                            <div class="ft-service-img text-center">
                                <img src="{!! Storage::disk('local')->url($service->image_index) !!}" alt="">
                            </div>
                            @else
                                <div class="ft-service-img text-center">
                                    <img src="{{ asset('assets/webp/Untitled-2.png') }}" alt="">
                                </div>
                                @endif
                            <div class="ft-service-text position-relative headline">
                                <h3><a href="{!! route('front.service.service_single', $service->id) !!}">{{ $service->getTitle() }}</a></h3>
                            </div>
                            <div class="ft-service-serial position-absolute">
								{{ $service->id }}
							</div>
                        </div>
                    </div>
                      @endforeach
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
                                                <i class="flaticon-delivery-truck"></i>
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