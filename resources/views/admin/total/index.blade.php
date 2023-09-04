@extends('admin.layouts.app')
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <div class="h3 mb-0">@lang('transFront.sanlar')</div>
    </div>

    <table class="table shadow table-bordered table-striped table-hover table-md bg-white mt-4">
        <thead>
        <tr>
            <th>ID</th>
            <th>@lang('transFront.cooperator')</th>
            <th>@lang('transFront.where')</th>
            <th>@lang('transFront.logistika')</th>
            <th>@lang('transFront.ofis')</th>
            <th><i class="fas fa-cog"></i></th>
        </tr>
        </thead>
        <tbody>
        @forelse($objs as $obj)
            <tr>
                <td>{!! $obj->id !!}</td>
                <td>{!! $obj->cooperator !!}</td>
                <td>{!! $obj->where !!}</td>
                <td>{!! $obj->logistika !!}</td>
                <td>{!! $obj->ofis !!}</td>
                <td>
                    <a href="{{ route('admin.total.edit', $obj->id) }}" class="btn btn-outline-success btn-sm mb-1">
                        <i class="fas fa-pen"></i>
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center bg-light text-secondary">
                    <i class="fas fa-exclamation-circle"></i> @lang('transFront.sanlar') @lang('transAdmin.not-found')
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>


@endsection