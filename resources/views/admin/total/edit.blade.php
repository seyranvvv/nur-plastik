@extends('admin.layouts.app')
@section('content')

    <div class="d-flex align-items-center justify-content-between">
        <div class="h4 mb-0">
            <a href="{{ route('admin.total.index') }}">
                <i class="fas fa-caret-left"></i> @lang('transFront.sanlar')
            </a>
            <span class="text-gray-500">/</span>
            @lang('transAdmin.edit')
        </div>
    </div>

    <div class="my-4">
        <form action="{{ route('admin.total.update', $obj->id) }}" method="post">
            {!! method_field('PUT') !!}
            {!! csrf_field() !!}

            <div class="form-group row">
                <label for="cooperator" class="col-lg-4 col-md-4 col-form-label text-md-right">
                    @lang('transFront.cooperator') <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-md-8">
                    <input id="cooperator" type="text" min="1" step="1"
                           class="form-control{{ $errors->has('cooperator') ? ' is-invalid' : '' }}"
                           name="cooperator"
                           value="{{ $obj->cooperator}}"  required>
                    @if ($errors->has('cooperator'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('cooperator') }}</strong>
                            </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="where" class="col-lg-4 col-md-4 col-form-label text-md-right">
                    @lang('transFront.where') <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-md-8">
                    <input id="where" type="text" min="1" step="1"
                           class="form-control{{ $errors->has('where') ? ' is-invalid' : '' }}"
                           name="where"
                           value="{{ $obj->where}}" required>
                    @if ($errors->has('where'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('where') }}</strong>
                            </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="logistika" class="col-lg-4 col-md-4 col-form-label text-md-right">
                    @lang('transFront.logistika') <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-md-8">
                    <input id="logistika" type="text" min="1" step="1"
                           class="form-control{{ $errors->has('logistika') ? ' is-invalid' : '' }}"
                           name="logistika"
                           value="{{ $obj->logistika}}" required>
                    @if ($errors->has('logistika'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('logistika') }}</strong>
                            </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="ofis" class="col-lg-4 col-md-4 col-form-label text-md-right">
                    @lang('transFront.ofis') <span class="text-danger">*</span>
                </label>
                <div class="col-lg-4 col-md-8">
                    <input id="ofis" type="text" min="1" step="1"
                           class="form-control{{ $errors->has('ofis') ? ' is-invalid' : '' }}"
                           name="ofis"
                           value="{{ $obj->ofis}}" required>
                    @if ($errors->has('ofis'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('ofis') }}</strong>
                            </span>
                    @endif
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

    <style>
        .note-group-select-from-files {
            display: none;
        }
        .note-icon-picture {
            display: none;
        }
        .note-icon-video {
            display: none;
        }
    </style>
@endsection