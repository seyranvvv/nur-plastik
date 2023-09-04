<footer id="ft-footer" class="ft-footer-section">
    <div class="container">
        <div class="ft-footer-widget-wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="ft-footer-widget ul-li-block headline pera-content">
                        <div class="logo-widget">
                            <div class="site-logo">
                                <a href="{{ route('index') }}"><img src="{{ asset('assets/webp/nur-plastik.png') }}" alt="logo"></a>
                            </div>
                            <p class="ml-5">@lang('transFront.titler')</p>
                           {{-- <div class="ft-btn">
                                <a class="d-flex justify-content-center align-items-center" href="{{ route('front.about.index') }}">@lang('transFront.umumy')</a>
                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ft-footer-widget ul-li-block headline pera-content">
                        <div class="menu-widget">
                            <h3 class="widget-title">@lang('transFront.services')</h3>
                            <ul>
                                @foreach($services as $service)
                                <li><a href="{{ route('front.service.index') }}">{{ $service->getTitle() }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ft-footer-widget ul-li-block headline pera-content">
                        <div class="menu-widget">
                            <h3 class="widget-title">@lang('transFront.our-pages')</h3>
                            <ul>
                                <li><a href="{{ route('index') }}">@lang('transFront.home')</a></li>
                                <li><a href="{{ route('front.about.index') }}">@lang('transFront.abouts')</a></li>
                                <li><a href="{{ route('front.service.index') }}">@lang('transFront.services')</a></li>
                                <li><a href="{{ route('front.post.index') }}">@lang('transAdmin.posts')</a></li>
                                <li><a href="{{ route('front.contact') }}">@lang('transFront.contact')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ft-footer-widget ul-li-block headline pera-content">
                        <div class="menu-widget">
                           <h3 class="widget-title">@lang('transFront.address')</h3><ul>
                                <li><a href="https://maps.google.com/?q=37.990417199685226, 58.31932504399311">{!! html_entity_decode($contact->getName()) !!}</a></li>
                                <li><a>@lang('transFront.us_phone')</a></li>
                                <li><a href="tel:{!! $contact->phone !!}">{!! $contact->phone !!}</a></li>
                                <li><a>@lang('transFront.mail'):</a></li>
                                <li><a href="mailto: ajayypumman@gmail.com">{!! $contact->email !!}</a></li>


                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ft-footer-copywrite-1 text-center">
            <span>@lang('transFront.rights') © {!! date('Y') !!}.</span><span style="border-bottom: 1px solid #000;"><a  href="https://takyk.com">@lang('transFront.develop')</a></span>
        </div>
    </div>
</footer>