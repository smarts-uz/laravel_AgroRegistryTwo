@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Фойдаланувчилар</li>
        <li class="breadcrumb-item">{{ $user->fullname }}</li>
        <li class="breadcrumb-item active" aria-current="page">Созламалар</li>
    </ol>
@endsection

@section('content')
    <div class="row row-xs">
        @include('user::blocks.show.sidebar')

        <div class="col-md-8">
            <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                <div class="">
                    <div id="userRole" class="tab-pane active show">
                        <form action="{{ route('user.config.update', $user->id) }}" method="post">
                            @csrf

                            <section>
                                <!-- Фойдаланувчи умумий маълумотлари  -->
                                <div class="divider-text mg-b-20">Фойдаланувчи умумий маълумотлари</div>
                                <div class="form-settings row row-sm">
                                    <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">
                                        <label class="form-label">Ҳолати</label>
                                        <select name="status" class="custom-select form-control mg-b-5">
                                            <option value="1" {{ old('status', $user->status) ? 'selected' : '' }}>Фаол</option>
                                            <option value="0" {{ !old('status', $user->status) ? 'selected' : '' }}>Фаол эмас</option>
                                        </select>
                                    </div><!-- col -->
                                    <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">
                                        <label class="form-label">Сўнгги ташриф</label>
                                        <input type="text" class="form-control" value="{{ $user->formatted_last_login }}" disabled="" />
                                    </div><!-- col -->
                                </div>

                                <!-- Фойдаланувчи роллари  -->
                                <div class="divider-text mg-b-20">@lang('user::trans.roles')</div>
                                <div class="form-group ролес-лист">
                                    @foreach ($roles as $role)
                                        <div class="checkbox custom-control custom-checkbox">
                                            <input type="checkbox" {{ $user->hasRole($role) ? 'checked' : '' }} name="roles[]" id="{{ "role-" . $role }}" value="{{ $role }}" class="custom-control-input custom-checkbox" /> <label for="{{ "role-" . $role }}" class="custom-control-label">{{ trans("user::trans.role." . $role) }}</label>
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Фойдаланувчи ҳуқуқлари -->
                                <div class="divider-text mg-b-20">@lang('user::trans.permissions')</div>
                                <div class="form-group permissions-list">
                                    @foreach ($permissions as $permission)
                                        <div class="checkbox custom-control custom-checkbox">
                                            <input type="checkbox" {{ $user->can($permission) ? 'checked' : '' }} name="permissions[]" id="{{ "role-" . $permission }}" value="{{ $permission }}" class="custom-control-input custom-checkbox" /> <label for="{{ "role-" . $permission }}" class="custom-control-label {{ (strpos($permission, 'delete') !== false) ? "text-danger" : '' }}">{{ trans("user::trans.permission." . $permission) }}</label>
                                        </div>
                                    @endforeach
                                </div>

                                <hr class="op-0">
                                <button class="btn btn-sm btn-outline-primary" type="button" id="checkAllPermissions">Барчасини танлаш</button>
                                <button class="btn btn-sm btn-outline-success" type="submit">Маълумотларни янгилаш</button>
                                <a class="btn btn-sm btn-outline-light mg-l-2" href="{{ route('user.config.edit', $user->id) }}">Ўзгаришларни бекор қилиш</a>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

