@extends('admin.layouts.app')
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <div class="h4 mb-0">
            <a href="{{ route('admin.users.index') }}">
                <i class="fas fa-caret-left"></i> @lang('transAdmin.users')
            </a>
            <span class="text-gray-500">/</span>
            @lang('transAdmin.create')
        </div>
    </div>

    <div class="my-4">
        <form action="{{ route('admin.users.store') }}" method="post">
            {!! csrf_field() !!}

            <div class="form-group row">
                <label for="username" class="col-lg-4 col-md-4 col-form-label text-md-right">
                    @lang('transAdmin.username') <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-md-8">
                    <input id="username" type="text"
                           class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username"
                           value="{{ old('username') }}" required>
                    @if ($errors->has('username'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customControlActive" name="active"
                               value="1">
                        <label class="custom-control-label" for="customControlActive">
                            @lang('transAdmin.enable')
                        </label>
                    </div>
                </div>
            </div>

            <hr>



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
@endsection