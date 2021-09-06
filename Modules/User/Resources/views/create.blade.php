@extends('layouts.app')

@section('content')
    <div>
        <div class="card">
            <div class="card-header">@lang('user::trans.permission.create users')</div>
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="name">@lang('user::trans.name')</label>
                        <input type="name" name="name" id="name" class="form-control" value="{{ old('name') }}" />
                    </div>
                    <div class="form-group">
                        <label for="email">@lang('user::trans.email')</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" />
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
                        <label>@lang('user::trans.roles')</label>
                        @foreach ($roles as $role)
                            <div class="checkbox">
                                <input type="checkbox" {{ in_array($role, old('roles', [])) ? 'checked' : '' }} name="roles[]" id="{{ "role-" . $role }}" value="{{ $role }}" /> <label for="{{ "role-" . $role }}">{{ trans("user::trans.role." . $role) }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label>@lang('user::trans.permissions')</label>
                        @foreach ($permissions as $permission)
                            <div class="checkbox">
                                <input type="checkbox" {{ in_array($permission, old('permissions', [])) ? 'checked' : '' }} name="permissions[]" id="{{ "role-" . $permission }}" value="{{ $permission }}" /> <label for="{{ "role-" . $permission }}">{{ trans("user::trans.permission." . $permission) }}</label>
                            </div>
                        @endforeach
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

