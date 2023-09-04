@extends('admin.layouts.app')
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <div class="h4 mb-0">
            <a href="{{ route('admin.aboutText.index') }}">
                <i class="fas fa-caret-left"></i> @lang('transFront.ayratynlyk')
            </a>
            <span class="text-gray-500">/</span>
            @lang('transAdmin.create')
        </div>
    </div>
    <div class="my-4">

        <form action="{{ route ('admin.ourFeauter.store') }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <div class="form-group row">
                <label for="title_tm" class="col-lg-4 col-md-4 col-form-label text-md-right">
                    <img src="{!! asset('admin/img/flags/tkm.png') !!}" alt="TKM" class="border mr-1">
                    @lang('transAdmin.name') <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-md-8">
                    <input id="title_tm" type="text"
                           class="form-control{{ $errors->has('title_tm') ? ' is-invalid' : '' }}" name="title_tm"
                           required    >
                    @if ($errors->has('title_tm'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title_tm') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="title_ru" class="col-lg-4 col-md-4 col-form-label text-md-right">
                    <img src="{!! asset('admin/img/flags/rus.png') !!}" alt="RUS" class="border mr-1">
                    @lang('transAdmin.name') <span class="text-danger"></span>
                </label>
                <div class="col-lg-4 col-md-8">
                    <input id="title_ru" type="text"
                           class="form-control{{ $errors->has('title_ru') ? ' is-invalid' : '' }}" name="title_ru"
                    >
                    @if ($errors->has('title_ru'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title_ru') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group row">
                <label for="title_en" class="col-lg-4 col-md-4 col-form-label text-md-right">
                    <img src="{!! asset('admin/img/flags/eng.png') !!}" alt="ENG" class="border mr-1">
                    @lang('transAdmin.name') <span class="text-danger"></span>
                </label>
                <div class="col-lg-4 col-md-8">
                    <input id="title_en" type="text"
                           class="form-control{{ $errors->has('title_en') ? ' is-invalid' : '' }}" name="title_en"
                    >
                    @if ($errors->has('title_en'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title_en') }}</strong>
                        </span>
                    @endif
                </div>
            </div>











            {{--submit button--}}
            <div class="form-group row mb-0">
                <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-floppy-o mr-1" aria-hidden="true"></i> @lang('transAdmin.save')
                    </button>
                </div>
            </div>
        </form>
    </div>


@endsection
