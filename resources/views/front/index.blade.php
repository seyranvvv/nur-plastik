@extends('front.layout.appTwo')
@section('title')@lang('transFront.home')@endsection
@section('keywords')@lang('transFront.home')@endsection
@section('content')


    <!-- Start of Slider section
	============================================= -->
    <section id="ft-thx-slider" class="ft-thx-slider-section">
        <rs-module-wrap id="rev_slider_30_1_wrapper" data-alias="slider-9" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
            <rs-module id="rev_slider_30_1" style="" data-version="6.5.8">
                <rs-slides>
                    @foreach($sliders as $slider)
                        @if($slider->getImage())
                    <rs-slide style="position: absolute;" data-key="rs-{{ $slider->id }}" data-title="Slide" data-thumb="{!! Storage::disk('local')->url('sm/'.$slider->getImage()) !!}" data-anim="e:slidingoverlay;ms:1510;" data-in="o:0;x:100%;" data-out="a:false;">
                        <img src="{!! Storage::disk('local')->url($slider->getImage()) !!}" title="trucker-g715fb0159_1920" width="1920" height="1100" class="rev-slidebg tp-rs-img" data-no-retina>
                        <!--
                        --><rs-layer
                                id="slider-30-slide-{{ $slider->id }}-layer-1"
                                data-type="text"
                                data-rsp_ch="on"
                                data-xy="x:c;yo:348px,287px,218px,150px;"
                                data-text="w:normal;s:60,49,37,36;l:70,57,43,40;fw:700;a:center;"
                                data-frame_0="o:1;"
                                data-frame_0_chars="d:5;o:0;rX:-90deg;oZ:-50;"
                                data-frame_1="st:1310;sp:1750;sR:1310;"
                                data-frame_1_chars="e:power4.inOut;d:10;oZ:-50;"
                                data-frame_999="o:0;st:w;sR:3540;"
                                style="z-index:9;font-family:'Poppins';"
                        >{{ $slider->getTitle() }}
                        </rs-layer><!--

							--><!--

							--><rs-layer
                                id="slider-30-slide-{{ $slider->id }}-layer-3"
                                data-type="text"
                                data-rsp_ch="on"
                                data-xy="xo:363px,299px,227px,31px;yo:502px,414px,314px,232px;"
                                data-text="w:normal;s:18,14,10,15;l:28,23,17,26;a:center;"
                                data-dim="h:72px,59px,44px,auto;"
                                data-frame_0="x:-175%;o:1;"
                                data-frame_0_mask="u:t;x:100%;"
                                data-frame_1="y:9px,7px,5px,3px;e:power3.out;st:3650;sp:1500;sR:3650;"
                                data-frame_1_mask="u:t;"
                                data-frame_999="o:0;st:w;sR:3850;"
                                style="z-index:10;font-family:'Roboto';"
                        >{!! html_entity_decode($slider->getBody()) !!} <br />

                        </rs-layer><!--

							--><!--
							-->						</rs-slide>
                        @endif
                    @endforeach
                </rs-slides>
            </rs-module>
        </rs-module-wrap>
    </section>
    <!-- End of Slider section
        ============================================= -->

    <!-- Start of Feature section
        ============================================= -->
    <section id="ft-thx-feature" class="ft-thx-feature-section">
        <div class="container">
            <div class="ft-thx-feature-content  position-relative">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="ft-thx-feature-innerbox headline pera-content">
                            <div class="ft-thx-inner-item">
                                <div class="thx-inner-icon">
                                    <i class="flaticon-pricing"></i>
                                </div>
                                <div class="ft-thx-inner-text">

                                    <p>@lang('transFront.mushd')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ft-thx-feature-innerbox headline pera-content">
                            <div class="ft-thx-inner-item">
                                <div class="thx-inner-icon">
                                    <i class="flaticon-deadline"></i>
                                </div>
                                <div class="ft-thx-inner-text">
                                    <p>@lang('transFront.mohums')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ft-thx-feature-innerbox headline pera-content">
                            <div class="ft-thx-inner-item">
                                <div class="thx-inner-icon">
                                    <i class="flaticon-warehouse"></i>
                                </div>
                                <div class="ft-thx-inner-text">

                                    <p>@lang('transFront.ynaml')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Feature section
        ============================================= -->

    <!-- Start of About section
        ============================================= -->
    <section id="ft-thx-about" class="ft-thx-about-section">
        <div class="container">
            <div class="pr-cor-about-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="pr-cor-about-text-wrap">
                            <div class="pr-cor-section-title headline pera-content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <span class="pr-cor-title-tag">{{ $about->getTitle() }}</span>
                                <p>{!! str_limit(strip_tags(html_entity_decode($about->getName())), 250) !!}</p>
                            </div>
                            <div class="pr-cor-about-feature-area">
                                @foreach($aboutTexts as $aboutText)
                                    <div class="pr-cor-about-feature-list d-flex align-items-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        <div class="pr-cor-about-ft-icon d-flex align-items-center justify-content-center">
                                            <i class="flaticon-shield-1"></i>
                                        </div>
                                        <div class="pr-cor-about-ft-text headline pera-content">
                                        <p>{{ $aboutText->getTitle() }}</p>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <div class="ft-thx-btn text-center wow flipInX" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <a class="d-flex justify-content-center align-items-center" href="{{ route('front.about.index') }}">@lang('transFront.read-more')</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pr-cor-about-img-wrap position-relative">
                            <div class="pr-cor-about-img-area">
                                <img src="{!! Storage::disk('local')->url($about->image_index) !!}" alt="">
                            </div>
                            <div class="pr-cor-about-img-shape position-absolute">
                                <img src="assets/imgs/shape/ab-sh1.png" alt="">
                            </div>
                            <div class="pr-cor-about-img-area2 position-absolute">
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

    <!-- Start of Service section
        ============================================= -->
    <section id="pr-cor-service" class="pr-cor-service-section position-relatives">
        <span class="map-bg position-absolute"><img src="assets/imgs/bg/map.png" alt=""></span>
        <div class="container">
            <div class="pr-cor-section-title headline pera-content middle-align text-center  wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                <h2>@lang('transFront.ulgam')</h2>
            </div>
            <div class="pr-cor-service-content">
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-lg-3 col-md-6  wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="pr-cor-service-innerbox">
                            <div class="pr-cor-service-inner-img">
                                @if($service->img)
                                    <img src="{!! Request::root() !!}{!! Storage::disk('local')->url("service/image/".$service->img) !!}" alt="" />
                                @endif
                            </div>
                            <div class="pr-cor-service-inner-text position-relative headline pera-content">

                                <p>{{ $service->getTitle() }}</p>
                                <div class="pr-cor-service-btn position-absolute">
                                    <a class="d-flex  align-items-center" href="{!! route('front.service.service_single', $service->id) !!}">@lang('transFront.red') <i class="far fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="ft-thx-btn d-flex justify-content-center text-center wow flipInX" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a class="d-flex justify-content-center align-items-center" href="{{ route('front.service.index') }}">@lang('transFront.read-more') </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Service section
        ============================================= -->

    <!-- Start of Why choose us section
        ============================================= -->
    <section id="ft-thx-why-choose-us" class="ft-thx-why-choose-us-section">
        <div class="container">
            <div class="ft-thx-why-choose-us-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="pr-an-why-choose-feature">
                            <div class="row">
                                <div class="col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="pr-an-why-choose-feature-item">
                                        <div class="pr-an-why-choose-ft-icon d-flex justify-content-center align-items-center">
                                            <i class="flaticon-quotes"></i>
                                        </div>
                                        <div class="pr-an-why-choose-ft-text headline pera-content">
                                            <p>@lang('transFront.k1')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="pr-an-why-choose-feature-item">
                                        <div class="pr-an-why-choose-ft-icon d-flex justify-content-center align-items-center">
                                            <i class="flaticon-delivery-truck"></i>
                                        </div>
                                        <div class="pr-an-why-choose-ft-text headline pera-content">

                                            <p>@lang('transFront.k2')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <div class="pr-an-why-choose-feature-item">
                                        <div class="pr-an-why-choose-ft-icon d-flex justify-content-center align-items-center">
                                            <i class="flaticon-worldwide"></i>
                                        </div>
                                        <div class="pr-an-why-choose-ft-text headline pera-content">

                                            <p>@lang('transFront.k3')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="pr-an-why-choose-feature-item">
                                        <div class="pr-an-why-choose-ft-icon d-flex justify-content-center align-items-center">
                                            <i class="flaticon-free-shipping"></i>
                                        </div>
                                        <div class="pr-an-why-choose-ft-text headline pera-content">

                                            <p>@lang('transFront.k4')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pr-an-why-choose-text-wrapper">
                            <div class="pr-cor-section-title headline pera-content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                                <h2>{{ $baner->getTitle() }}</h2>
                                <p>{!! html_entity_decode($baner->getName()) !!}</p>
                            </div>

                            <div class="ft-thx-btn text-center wow flipInX" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <a class="d-flex justify-content-center align-items-center" href="{{ route('front.about.index') }}">@lang('transFront.read-more')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Why choose us  section
        ============================================= -->

    <!-- Start of Work Process section
        ============================================= -->
    <section id="ft-thx-work-process" class="ft-thx-work-process-section position-relative">
        <span class="ft-thx-work-process-shape position-absolute"><img src="assets/imgs/bg/shape-02.png" alt=""></span>
        <div class="container">
            <div class="pr-cor-section-title headline pera-content middle-align text-center  wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                <h2>@lang('transFront.bilen')</h2>

            </div>
            <div class="td-sv-work-step-content position-relative">
                <span class="td-sv-ws-arrow1 position-absolute"><img src="assets/imgs/icon/ars1.png" alt=""></span>
                <span class="td-sv-ws-arrow2 position-absolute"><img src="assets/imgs/icon/ars2.png" alt=""></span>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeFromTop" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="td-sv-work-step-inner-item text-center">
                            <div class="td-sv-work-step-icon d-flex justify-content-center align-items-center">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="td-sv-work-step-text headline pera-content">
                                <h3>@lang('transFront.ara1')</h3>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeFromTop" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="td-sv-work-step-inner-item text-center">
                            <div class="td-sv-work-step-icon d-flex justify-content-center align-items-center">
                                <i class="flaticon-worldwide"></i>
                            </div>
                            <div class="td-sv-work-step-text headline pera-content">
                                <h3>@lang('transFront.ara2')</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeFromTop" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="td-sv-work-step-inner-item text-center">
                            <div class="td-sv-work-step-icon d-flex justify-content-center align-items-center">
                                <i class="flaticon-pricing"></i>
                            </div>
                            <div class="td-sv-work-step-text headline pera-content">
                                <h3>@lang('transFront.ara3')</h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Work Process section
        ============================================= -->

    <!-- Start of portfolio section
        ============================================= -->

    <!-- Start portfolio section
        ============================================= -->

    <!-- Start of Testimonial section
        ============================================= -->
    <section id="ft-thx-testimonial" class="ft-thx-testimonial-section" data-background="assets/imgs/bg/tst-bg.jpg">
        <div class="container">
            <div class="pr-cor-section-title headline pera-content middle-align text-center  wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                <h2>@lang('transFront.taslamad')</h2>

            </div>
            <div class="pr-sv-testimonial-content position-relative">
                <div class="pr-sv-testimonial-shape-img  ul-li-block">

                </div>
                <div class="pr-sv-testimonial-slider">
                    @foreach($projects as $project)
                    <div class="pr-sv-testimonial-item position-relative">

                        <div class="pr-sv-testimonial-text pera-content headline">
                            <p>{!! html_entity_decode($project->getName()) !!}</p>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- End of Testimonial section
        ============================================= -->

    <!-- Start of Blog  section
        ============================================= -->
    <section id="pr-cor-blog" class="pr-cor-blog-section">
        <div class="container">
            <div class="pr-cor-section-title headline pera-content middle-align text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                <h2>@lang('transFront.tanysh')</h2>
            </div>
            <div class="pr-cor-blog-content">
                <div class="pr-cor-blog-slider">
                    @foreach($posts as $post)

                    <div class="pr-item-innerbox wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="pr-cor-blog-innerbox">
                            <div class="pr-cor-blog-inner-img">
                                <img src="{!! Request::root() !!}{!! Storage::disk('local')->url("post/image/".$post->img) !!}" alt="">
                            </div>
                            <div class="pr-cor-blog-inner-text headline position-relative">
                                <span class="pr-cor-blog-cat"><a href="#"><i class="fal fa-calendar-alt"></i>&nbsp;{!! $post->publishedAt() !!}</a></span>
                                <div class="pr-cor-blog-meta">
                                    <a href="{!! route('front.post.singleNews', $post->slug) !!}"><i class="far fa-user"></i>&nbsp; @lang('transFront.by')</a>
                                </div>
                                <h3><a href="{!! route('front.post.singleNews', $post->slug) !!}">{{ $post->getTitle() }}
                                        </a></h3>
                                <a class="pr-cor-blog-more" href="{!! route('front.post.singleNews', $post->slug) !!}">@lang('transFront.read-more') <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


@endsection