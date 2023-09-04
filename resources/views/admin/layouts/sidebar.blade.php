<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{!! route('admin.dashboard') !!}">
        <img src="{{ asset('assets/webp/Untitled-3.1.1.png') }}" alt="Ajayyp umman"
             class="img-fluid sidebar-brand-text-mini" style="max-height: 40px; ">
        <img src="{{ asset('assets/webp/Untitled-3.1.1.png')  }}" alt="Ajayyp umman"
             class="img-fluid sidebar-brand-text" style="max-height: 40px;">
    </a>

    <hr class="sidebar-divider my-0">
    <li class="nav-item" id="navItem4">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true"
           aria-controls="collapse4">
            <i class="fas fa-fw fa-cogs"></i>
            <span>@lang('transAdmin.settings')</span>
        </a>
        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">


                <a class="collapse-item ci-sidebar" href="{!! route('admin.users.index') !!}">@lang('transAdmin.users')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.contact.index') !!}">@lang('transFront.contact')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.sliders.index') !!}">@lang('transAdmin.sliders')</a>
               {{-- <a class="collapse-item ci-sidebar" href="{!! route('admin.greet.index') !!}">partners</a>--}}

{{--
                <a class="collapse-item ci-sidebar" href="{!! route('admin.logo.index') !!}">@lang('transFront.logo')</a>
--}}
           {{--     <a class="collapse-item ci-sidebar" href="{!! route('admin.service.index') !!}">@lang('transFront.services')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.contact.index') !!}">@lang('transFront.contact')</a>--}}

            </div>
        </div>
    </li>


    {{--<li class="nav-item" id="navItem4">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true"
           aria-controls="collapse4">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>@lang('transFront.abouts')</span>
        </a>
        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">


                <a class="collapse-item ci-sidebar" href="{!! route('admin.about.index') !!}">@lang('transFront.abouts')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.aboutTitle.index') !!}">@lang('transFront.abouts') @lang('transAdmin.body')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.total.index') !!}">@lang('transFront.sanlar')</a>
                --}}{{--    <a class="collapse-item ci-sidebar" href="{!! route('admin.team.index') !!}">@lang('transFront.team')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.whyWe.index') !!}">@lang('transFront.whyWe')</a>--}}{{--

            </div>
        </div>
    </li>

    <li class="nav-item" id="navItem6">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="true"
           aria-controls="collapse6">
            <i class="fas fa-fw fa-address-card"></i>
            <span>@lang('transFront.services')</span>
        </a>
        <div id="collapse6" class="collapse" aria-labelledby="heading1" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">


                <a class="collapse-item ci-sidebar" href="{!! route('admin.service.index') !!}">@lang('transFront.services')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.serviceTitle.index') !!}">@lang('transFront.services') @lang('transAdmin.body')</a>

                --}}{{--     <a class="collapse-item ci-sidebar" href="{!! route('admin.service.index') !!}">@lang('transFront.services')</a>
                     <a class="collapse-item ci-sidebar" href="{!! route('admin.contact.index') !!}">@lang('transFront.contact')</a>--}}{{--

            </div>
        </div>
    </li>--}}
   {{-- <li class="nav-item" id="navItem0">
        <a class="nav-link collapsed" href="{!! route('admin.post.index') !!}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>@lang('transAdmin.posts')</span>
        </a>
    </li>--}}
    <li class="nav-item" id="navItem0">
        <a class="nav-link collapsed" href="{!! route('admin.project.index') !!}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>@lang('transFront.taslamad')</span>
        </a>
    </li>
    <li class="nav-item" id="navItem6">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="true"
           aria-controls="collapse6">
            <i class="fas fa-fw fa-globe"></i>
            <span>@lang('transAdmin.posts')</span>
        </a>
        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item ci-sidebar" href="{!! route('admin.post.index') !!}">@lang('transAdmin.posts')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.postBanner.index') !!}">@lang('transAdmin.baner')</a>

            </div>
        </div>
    </li>

    <li class="nav-item" id="navItem7">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="true"
           aria-controls="collapse7">
            <i class="fas fa-fw fa-globe"></i>
            <span>@lang('transFront.services')</span>
        </a>
        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item ci-sidebar" href="{!! route('admin.service.index') !!}">@lang('transFront.services')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.serviceBanner.index') !!}">@lang('transAdmin.baner')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.serviceAbout.index') !!}">@lang('transFront.bizin')</a>

            </div>
        </div>
    </li>


    <li class="nav-item" id="navItem4">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true"
           aria-controls="collapse4">
            <i class="fas fa-fw fa-globe"></i>
            <span>@lang('transFront.abouts')</span>
        </a>
        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item ci-sidebar" href="{!! route('admin.about.index') !!}">@lang('transFront.abouts')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.aboutBanner.index') !!}">@lang('transAdmin.baner')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.goal.index') !!}">@lang('transFront.maksat')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.total.index') !!}">@lang('transFront.sanlar')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.aboutOur.index') !!}">@lang('transFront.sayla')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.aboutText.index') !!}">Biz barada text</a>
            </div>
        </div>
    </li>



    <li class="nav-item" id="navItem4">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true"
           aria-controls="collapse2">
            <i class="fas fa-fw fa-globe"></i>
            <span>@lang('transFront.ayratynlyk')</span>
        </a>
        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item ci-sidebar" href="{!! route('admin.ourFeauter.index') !!}">@lang('transFront.ayratynlyk')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.baner.index') !!}">@lang('transAdmin.baner')</a>

            </div>
        </div>
    </li>

    <li class="nav-item" id="navItem4">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse8" aria-expanded="true"
           aria-controls="collapse8">
            <i class="fas fa-fw fa-globe"></i>
            <span>@lang('transAdmin.login-attempts')</span>
        </a>
        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item ci-sidebar" href="{!! route('admin.login-attempts.index') !!}">@lang('transAdmin.login-attempts')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.visitor-panel') !!}">@lang('transAdmin.visitors')</a>

            </div>
        </div>
    </li>

    <li class="nav-item" id="navItem5">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true"
           aria-controls="collapse5">
            <i class="fas fa-fw fa-globe"></i>
            <span>@lang('transFront.contact')</span>
        </a>
        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item ci-sidebar" href="{!! route('admin.contact.index') !!}">@lang('transFront.contact')</a>
                <a class="collapse-item ci-sidebar" href="{!! route('admin.contactBanner.index') !!}">@lang('transAdmin.baner')</a>

            </div>
        </div>
    </li>


    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

<script>
    $(document).ready(function () {
        function ciSidebar() {
            var url = window.location.pathname;
            var activePage = url.substring(url.indexOf('/') + 1);
            $('.ci-sidebar').each(function () {
                var linkPage = this.href.substring(this.href.lastIndexOf('/') + 1);
                if (activePage.indexOf(linkPage) !== -1) {
                    $(this).addClass('active');
                    if (Boolean(sessionStorage.getItem("sidebar-toggled"))) {
                        $(this).parent().parent().addClass('show');
                    }
                    $(this).parent().parent().parent().addClass('active');
                }
            });
        }

        ciSidebar();
        $(window).on('hashchange', function () {
            ciSidebar();
        });
    });

    if (Boolean(sessionStorage.getItem("sidebar-toggled"))) {
        $("#accordionSidebar").removeClass('toggled');
        sessionStorage.setItem("sidebar-toggled", "1");
    } else {
        $("#accordionSidebar").addClass('toggled');
        sessionStorage.setItem("sidebar-toggled", "");
    }

    $('#sidebarToggle').click(function () {
        event.preventDefault();
        if (Boolean(sessionStorage.getItem("sidebar-toggled"))) {
            sessionStorage.setItem("sidebar-toggled", "");
        } else {
            sessionStorage.setItem("sidebar-toggled", "1");
        }
    });
</script>