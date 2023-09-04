@extends('front.layout.app')
@section('content')
    @if($postBanner->img)
        <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{!! Request::root() !!}{!! Storage::disk('local')->url("postBanner/image/".$postBanner->img) !!}">
            <span class="background_overlay"></span>
            <span class="design-shape position-absolute"><img src="{{ asset('assets/img/shape/tmd-sh.png') }}" alt=""></span>
            <div class="container">
                <div class="ft-breadcrumb-content headline text-center position-relative">
                    <h2>{{ $postBanner->getTitle() }}</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="{{ route('index') }}">@lang('transFront.home')</a></li>
                            <li><a href="{{ route('front.post.index') }}">@lang('transAdmin.posts')</a></li>
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
                    <h2>@lang('transAdmin.posts')</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="{{ route('index') }}">@lang('transFront.home')</a></li>
                            <li><a href="{{ route('front.post.index') }}">@lang('transAdmin.posts')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- End of Breadcrumb section
        ============================================= -->
    <section id="ft-blog-feed-details" class="ft-blog-feed-details-section page-padding">
        <div class="container">
            <div class="ft-blog-feed-details-content">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="blog-details-img-text-wrapper">
                            <div class="blog-details-img position-relative">
                                <img src="{!! Storage::disk('local')->url("post/image/".$post->img) !!}" alt="">
                            </div>
                            <div class="ft-blog-details-item">
                                <div class="blog-details-text headline">
                                    <div class="ftd-blog-meta-2  position-relative text-capitalize">
                                        <a href="#"><i class="far fa-clock"></i>{!! $post->publishedAt() !!}</a>
                                        <a href="#"><i class="far fa-user"></i>@lang('transFront.by')</a>

                                    </div>
                                    <h3>{!! $post->getTitle() !!}</h3>
                                    <article>{!! html_entity_decode($post->getBody()) !!}  </article>


                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="ft-side-bar-wrapper top-stikcy">
                            <div class="ft-side-bar-widget-area">


                                <div class="ft-side-bar-widget headline ul-li-block">
                                    <div class="recent-news-widget">
                                        <h3 class="widget-title position-relative">@lang('transFront.recent')</h3>
                                        @foreach($posts as $post)
                                        <div class="recent-blog-img-text clearfix">
                                            <div class="recent-blog-img float-left">
                                                <img src="{!! Storage::disk('local')->url("post/image/".$post->img) !!}" alt="">
                                            </div>
                                            <div class="recent-blog-text headline">
                                                <h3><a href="{!! route('front.post.singleNews', $post->slug) !!}">{!! str_limit(strip_tags(html_entity_decode($post->getTitle())), 50) !!}</a></h3>
                                                <span><i class="far fa-calendar-alt"></i>{!! $post->publishedAt() !!}</span>
                                            </div>
                                        </div>
                                            @endforeach

                                    </div>
                                </div>

                                {{--<div class="ft-side-bar-widget headline ul-li-block">
                                    <div class="gallery-widget">
                                        <h3 class="widget-title position-relative">Gallery</h3>
                                        <ul class="zoom-gallery">
                                            <li><a href="assets/img/gallery/gl1.jpg" data-source="assets/img/gallery/gl1.jpg"><img src="assets/img/gallery/gl1.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery/gl2.jpg" data-source="assets/img/gallery/gl2.jpg"><img src="assets/img/gallery/gl2.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery/gl3.jpg" data-source="assets/img/gallery/gl3.jpg"><img src="assets/img/gallery/gl3.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery/gl4.jpg" data-source="assets/img/gallery/gl4.jpg"><img src="assets/img/gallery/gl4.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery/gl5.jpg" data-source="assets/img/gallery/gl4.jpg"><img src="assets/img/gallery/gl5.jpg" alt=""></a></li>
                                            <li><a href="assets/img/gallery/gl6.jpg" data-source="assets/img/gallery/gl4.jpg"><img src="assets/img/gallery/gl6.jpg" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>--}}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start of blog post feed section
        ============================================= -->



@endsection