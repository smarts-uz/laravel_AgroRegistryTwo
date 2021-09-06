@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Фойдаланувчилар</li>
        <li class="breadcrumb-item">{{ $user->fullname }}</li>
        <li class="breadcrumb-item active" aria-current="page">@lang('user::trans.edit_password')</li>
    </ol>
@endsection

@section('content')
    <div class="row row-xs">
        @include('user::blocks.show.sidebar')

        <div class="col-md-8">
            <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                <form action="{{ route('user.update', $user->id) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label for="name">@lang('user::trans.fio')</label>
                        <input type="text" class="form-control" value="{{ $user->fullname }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">@lang('user::trans.name')</label>
                        <input type="text" class="form-control" value="{{ $user->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">@lang('user::trans.email')</label>
                        <input type="email" class="form-control" value="{{ $user->email }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="password">@lang('user::trans.password')</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">@lang('user::trans.password-confirm')</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">@lang('user::trans.save')</button>
                        <a href="{{ route('user.index') }}" class="btn btn-outline-primary">@lang('user::trans.cancel')</a>
                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection

