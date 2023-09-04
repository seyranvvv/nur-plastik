@extends('admin.layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/summernote-bs4.css') }}"/>
    <script type="text/javascript" src="{{ asset('admin/js/summernote-bs4.js') }}"></script>
    <div class="d-flex align-items-center justify-content-between">
        <div class="h4 mb-0">
            <a href="{{ route('admin.contact.index') }}">
                <i class="fas fa-caret-left"></i> @lang('transFront.contact')
            </a>
            <span class="text-gray-500">/</span>
            @lang('transAdmin.edit')
        </div>
    </div>

    <div class="my-4">
        <form action="{{ route('admin.contact.update', $obj->id) }}" method="post">
            {!! method_field('PUT') !!}
            {!! csrf_field() !!}


            <div class="form-group row">
                <label for="phone" class="col-lg-4 col-md-4 col-form-label text-md-right">
                    @lang('transFront.phone') <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-md-8">
                    <input id="phone" type="tel"
                           class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone"
                           value="{{ $obj->phone }}" required>
                    @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="phone1" class="col-lg-4 col-md-4 col-form-label text-md-right">
                    @lang('transFront.phone') <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-md-8">
                    <input id="phone1" type="tel"
                           class="form-control{{ $errors->has('phone1') ? ' is-invalid' : '' }}" name="phone1"
                           value="{{ $obj->phone1 }}">
                    @if ($errors->has('phone1'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone1') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-lg-4 col-md-4 col-form-label text-md-right">
                    @lang('transFront.email') <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-md-8">
                    <input id="email" type="email"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                           value="{{ $obj->email }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>






            <div class="form-group row">
                <label for="adress_tm" class="col-lg-3 col-md-3 col-form-label text-md-right">
                    <img src="{!! asset('admin/img/flags/tkm.png') !!}" alt="TKM" class="border mr-1">
                    @lang('transAdmin.address')
                </label>
                <div class="col-lg-7 col-md-9">
                    <textarea id="adress_tm"
                              class="form-control{{ $errors->has('adress_tm') ? ' is-invalid' : '' }} summernote"
                              name="adress_tm" rows="3">{{ $obj->adress_tm }}</textarea>
                    @if ($errors->has('adress_tm'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('adress_tm') }}</strong>
                            </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="adress_ru" class="col-lg-3 col-md-3 col-form-label text-md-right">
                    <img src="{!! asset('admin/img/flags/rus.png') !!}" alt="TKM" class="border mr-1">
                    @lang('transAdmin.address')
                </label>
                <div class="col-lg-7 col-md-9">
                    <textarea id="adress_ru"
                              class="form-control{{ $errors->has('adress_ru') ? ' is-invalid' : '' }} summernote"
                              name="adress_ru" rows="3">{{ $obj->adress_ru }}</textarea>
                    @if ($errors->has('adress_ru'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('adress_ru') }}</strong>
                            </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="adress_en" class="col-lg-3 col-md-3 col-form-label text-md-right">
                    <img src="{!! asset('admin/img/flags/eng.png') !!}" alt="TKM" class="border mr-1">
                    @lang('transAdmin.address')
                </label>
                <div class="col-lg-7 col-md-9">
                    <textarea id="adress_en"
                              class="form-control{{ $errors->has('adress_en') ? ' is-invalid' : '' }} summernote"
                              name="adress_en" rows="3">{{ $obj->adress_en }}</textarea>
                    @if ($errors->has('adress_en'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('adress_en') }}</strong>
                            </span>
                    @endif
                </div>
            </div>


            {{--submit button--}}
            <div class="form-group row mb-0">
                <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> @lang('transAdmin.save')
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script>
        $('.summernote').summernote({
            tabsize: 2,
            height: 150,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture']],
                ['view', ['fullscreen', 'codeview']],
            ]
        });
    </script>
@endsection