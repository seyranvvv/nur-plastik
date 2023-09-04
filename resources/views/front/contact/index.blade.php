@extends('front.layout.app')
@section('title')@lang('transFront.contact')@endsection
@section('keywords')@lang('transFront.contact')@endsection
@section('content')

    @if($contactBanner->img)
    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{!! Request::root() !!}{!! Storage::disk('local')->url("contactBanner/image/".$contactBanner->img) !!}">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute"><img src="{{ asset('assets/img/shape/tmd-sh.png') }}" alt=""></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2>{{ $contactBanner->getTitle() }}</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="{{ route('index') }}">@lang('transFront.home')</a></li>
                        <li><a href="{{ route('front.contact') }}">@lang('transFront.contact')</a></li>
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
                <h2>@lang('transFront.contact')</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="{{ route('index') }}">@lang('transFront.home')</a></li>
                        <li><a href="{{ route('front.contact') }}">@lang('transFront.contact')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- End of Breadcrumb section
        ============================================= -->

    <!-- Start of contact page section
        ============================================= -->
    <section id="ft-contact-page" class="ft-contact-page-section page-padding">
        <div class="container">
            <div class="ft-contact-page-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ft-contact-page-text-wrapper">
                            <div class="ft-section-title-2 headline pera-content">
                                <span class="sub-title">@lang('transFront.contact-us')</span>
                                <h2>@lang('transFront.habarlash')
                                </h2>
                            </div>
                            <div class="ft-contact-page-contact-info">
                                <div class="ft-contact-cta-items d-flex">
                                    <div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="ft-contact-cta-text headline pera-content">
                                        <h3>@lang('transFront.address')</h3>
                                        <p>{!! html_entity_decode($contact->getName()) !!}</p>
                                    </div>
                                </div>
                                <div class="ft-contact-cta-items d-flex">
                                    <div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="ft-contact-cta-text headline pera-content">
                                        <h3>@lang('transFront.us_phone')</h3>
                                        <p>{!! $contact->phone !!}</p>

                                    </div>
                                </div>
                                <div class="ft-contact-cta-items d-flex">
                                    <div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="ft-contact-cta-text headline pera-content">
                                        <h3>@lang('transFront.mail')</h3>
                                        <p>{!! $contact->email !!}</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ft-contact-page-form-wrapper headline">
                            <h3 class="text-center">@lang('transFront.contact-us')</h3>
                            <form action="contact.php">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="name" placeholder="@lang('transFront.names')">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" name="email" placeholder="@lang('transFront.email')">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="affi" placeholder="@lang('transFront.surname')">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="number" placeholder="@lang('transFront.phone')">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="department" placeholder="@lang('transFront.salgy')">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="date" placeholder="@lang('transAdmin.datetime')">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="message" placeholder="@lang('transFront.message')"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button>@lang('transFront.submit')</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection