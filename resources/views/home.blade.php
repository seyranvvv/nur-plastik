@extends('front.layout.appTwo')
@section('title')@lang('transFront.home')@endsection
@section('keywords')@lang('transFront.home')@endsection
@section('content')


    <!-- Main Slider -->
    <section class="ft1-main-slider">
        <span class="left-pattern-layer"></span>
        <span class="right-pattern-layer"></span>
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    @foreach($sliders as $slider)
                        @if($slider->getImage())
                            <li data-transition="Slide Overlay To Top" data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-{{ $slider->id }}" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="assets/images/main-slider/image-1.jpg" data-title="Slide Title">
                                <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{!! Storage::disk('local')->url($slider->getImage()) !!}">
                                <div class="color-layer"></div>
                                <div class="tp-caption"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingtop="[0,0,0,0]"
                                     data-responsive_offset="on"
                                     data-type="text"
                                     data-height="none"
                                     data-width="['1100','800','800','500']"
                                     data-whitespace="normal"
                                     data-hoffset="['15','15','15','15']"
                                     data-voffset="['-50','-50','-150','-150']"
                                     data-x="['left','left','left','left']"
                                     data-y="['middle','middle','middle','middle']"
                                     data-textalign="['top','top','top','top']"
                                     data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                     style="">
                                    <h1>{{ $slider->getTitle() }}</h1>
                                </div>

                                <div class="tp-caption"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingtop="[0,0,0,0]"
                                     data-responsive_offset="on"
                                     data-type="text"
                                     data-height="none"
                                     data-width="['610','800','650','550']"
                                     data-whitespace="normal"
                                     data-hoffset="['15','15','15','15']"
                                     data-voffset="['140','130','20','-5']"
                                     data-x="['left','left','left','left']"
                                     data-y="['middle','middle','middle','middle']"
                                     data-textalign="['top','top','top','top']"
                                     data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                     style="">
                                    <div class="text">{!! html_entity_decode($slider->getBody()) !!}</div>
                                </div>

                                <div class="tp-caption"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingtop="[0,0,0,0]"
                                     data-responsive_offset="on"
                                     data-type="text"
                                     data-height="none"
                                     data-width="['700','700','700','500']"
                                     data-whitespace="normal"
                                     data-hoffset="['15','15','15','15']"
                                     data-voffset="['240','240','150','140']"
                                     data-x="['left','left','left','left']"
                                     data-y="['middle','middle','middle','middle']"
                                     data-textalign="['top','top','top','top']"
                                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                     style="">
                                    <a href="{{ $slider->url }}" class="theme-btn btn-style-one">@lang('transFront.read-more')<span class="icon fas fa-angle-double-right"></span></a>
                                </div>

                            </li>
                        @endif
                    @endforeach


                </ul>
            </div>
        </div>
    </section>
    <!-- End Main Slider -->

    <!-- Tracking Section -->
    <section class="ft1-tracking-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <!-- Tracking Column -->
                    <div class="tracking-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Tracking Form -->
                            <div class="tracking-form">
                                <form method="post" action="#">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="@lang('transFront.teswir')" required>
                                        <button class="theme-btn btn-style-two">@lang('transFront.submit')<span class="icon fas fa-angle-double-right"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Featured Column -->
                    <div class="featured-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="row clearfix">

                                <!-- Feature Block -->
                                <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon flaticon-delivery"></div>
                                        <h6>@lang('transFront.ynam')</h6>
                                    </div>
                                </div>

                                <!-- Feature Block -->
                                <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon flaticon-shield-2"></div>
                                        <h6>@lang('transFront.uns')</h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Tracking Section -->

    <!-- Welcome Section -->
    <section class="ft1-welcome-section">
        <div class="pattern-layer" style="background-image:url(assets/images/background/pattern-1.png)"></div>
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="{!! Storage::disk('local')->url($about->image_index) !!}" alt="" />
                                <div class="year-box">
                                    <div class="box-inner">
                                        <span class="icon flaticon-link"></span>
                                        <strong></strong><br>
                                        @lang('transFront.dereje')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                {{--<div class="title">Welcome Transportation Company</div>--}}
                                <h2>{{ $about->getTitle() }}</h2>
                                <div class="text"> {!! str_limit(strip_tags(html_entity_decode($about->getName())), 250) !!}</div>
                            </div>
                            <ul class="list">
                                @foreach($aboutTexts as $aboutText)
                                    <li>{{ $aboutText->getTitle() }}</li>
                                @endforeach
                            </ul>
                            <div class="button-box">
                                <a href="{{ route('front.about.index') }}" class="theme-btn btn-style-three">@lang('transFront.read-more') <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Welcome Section -->

    <!-- Services Section -->
    <section class="ft1-services-section">
        <div class="auto-container">
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        {{-- <div class="title">We Specialse In The Transportation</div>--}}
                        <h2>@lang('transFront.bizin')</h2>
                    </div>
                    <div class="pull-right">
                        <!-- Btn Box -->
                        <div class="btn-box">
                            <a href="{{ route('front.service.index') }}" class="theme-btn btn-style-one">@lang('transFront.read-more') <span class="icon fas fa-angle-double-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-carousel-two owl-carousel owl-theme">
            @foreach($services as $service)
                <!-- Service Block -->
                    <div class="ft1-service-block">
                        <div class="inner-box">
                            <div class="content">
                                <h4><a href="#">{{ $service->getTitle() }}</a></h4>
                                <div class="text">{!! str_limit(strip_tags(html_entity_decode($service->getName())), 100) !!}</div>
                                <!-- Btn Box -->
                                <div class="btn-box">
                                    <a href="{!! route('front.service.service_single', $service->id) !!}" class="theme-btn btn-style-one">@lang('transFront.read-more') <span class="icon fas fa-angle-double-right"></span></a>
                                </div>
                            </div>
                            <div class="side-icon">
                                @if($service->img)
                                    <img src="{!! Request::root() !!}{!! Storage::disk('local')->url("service/image/".$service->img) !!}" alt="" />
                                @endif
                            </div>
                            <div class="color-layer"></div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- Clients Section -->

    <!-- End Clients Section -->

    <!-- Steps Section -->
    <section class="ft1-steps-section" style="background-image:url({{ asset('assets/images/background/pattern-3.png') }})">
        <div class="auto-container">
            <div class="sec-title centered">
                {{--<div class="title">How It Work</div>--}}
                <h2>@lang('transFront.bilen')</h2>
                {{--<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> Tempor incididunt ut labore et dolore magna aliqua.</div>--}}
            </div>
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Step Block -->
                    <div class="step-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-outer">
                                <div class="icon-box">
                                    <span class="icon flaticon-call"></span>
                                </div>
                            </div>
                            <h5>@lang('transFront.ara1')</h5>
                        </div>
                    </div>

                    <!-- Step Block -->
                    <div class="step-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-outer">
                                <div class="icon-box">
                                    <span class="icon flaticon-product"></span>
                                </div>
                            </div>
                            <h5>@lang('transFront.ara2')</h5>
                        </div>
                    </div>

                    <!-- Step Block -->
                    <div class="step-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-outer">
                                <div class="icon-box">
                                    <span class="icon flaticon-tick"></span>
                                </div>
                            </div>
                            <h5>@lang('transFront.ara3')</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Steps Section -->

    <!-- Tracking Section -->
    <section class="ft1-tracking-section-two">

    </section>
    <!-- End Tracking Section Two -->

    <!-- Clients Section -->
    <section class="ft1-feature-section"
             style="background-image:url({!! Request::root() !!}{!! Storage::disk('local')->url("baner/image/".$baner->img) !!})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                {{--      <div class="title">Our Features</div>--}}
                <h2>{{ $baner->getTitle() }}</h2>
                <div class="text">{!! html_entity_decode($baner->getName()) !!}</div>
            </div>
            <div class="row clearfix">
            @foreach($ourFeauters as $ourFeauter)
                <!-- Feature Block Two -->
                    <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon flaticon-tick"></div>
                            {{--<h6>Safe Packing</h6>--}}
                            <div class="text">{{ $ourFeauter->getTitle() }}</div>
                        </div>
                    </div>
                @endforeach







            </div>
        </div>
    </section>
    <!-- End Clients Section -->

    <!-- Projects Section -->
    <section class="ft1-projects-section">

    </section>
    <!-- End Projects Section -->

    <!-- Testimonial Section -->
    <section class="ft1-testimonial-section">
        <div class="auto-container">
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        {{--<div class="title">Customer Feedback</div>--}}
                        <h2>@lang('transFront.taslamad')</h2>
                    </div>
                    <div class="pull-right">
                        <div class="text">/div>
                    </div>
                    </div>
                </div>
                <div class="testimonial-carousel owl-carousel owl-theme">
                @foreach($projects as $project)
                    <!-- Testimonial Block -->
                        <div class="ft1-testimonial-block">
                            <div class="inner-box">
                                <div class="quote-icon flaticon-quote-1"></div>
                                <div class="text">{!! html_entity_decode($project->getName()) !!}</div>
                                <div class="author-info">
                                    <div class="author-inner">
                                        {{--<div class="author-image">
                                            <img src="assets/images/resource/author-1.jpg" alt="" />
                                        </div>
                                        <h6>Donald Gigliotti</h6>
                                        <div class="designation">Ceo Founder</div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach














                </div>
            </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- News Section -->
    <section class="ft1-news-section">
        <div class="auto-container">
            <div class="sec-title centered">

                <h2>@lang('transFront.tanysh')</h2>
            </div>
            <div class="row clearfix">
            @foreach($posts as $post)
                <!-- News Block -->
                    <div class="ft1-news-block col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{!! route('front.post.singleNews', $post->slug) !!}"><img src="{!! Request::root() !!}{!! Storage::disk('local')->url("post/image/".$post->img) !!}" alt="" /></a>
                                <ul class="post-info">
                                    <li><span class="icon flaticon-calendar"></span>{!! $post->publishedAt() !!}</li>
                                    <li><span class="icon flaticon-team"></span>@lang('transFront.by')</li>

                                </ul>
                            </div>
                            <div class="lower-content">
                                <div class="title">{{ $post->getTitle() }}</div>
                                <h4><a href="{!! route('front.post.singleNews', $post->slug) !!}">{!! str_limit(strip_tags(html_entity_decode($post->getBody())), 100) !!}</a></h4>
                                <a href="{!! route('front.post.singleNews', $post->slug) !!}" class="theme-btn btn-style-three">@lang('transFront.read-more') <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>
            @endforeach
            <!-- News Block -->


            </div>

            <div class="btn-box text-center">
                <a href="{{ route('front.post.index') }}" class="theme-btn btn-style-one">@lang('transFront.see') <span class="icon fas fa-angle-double-right"></span></a>
            </div>

        </div>
    </section>
    <!-- End News Section -->

    <!-- Location Section -->

    <!-- End Location Section -->




@endsection