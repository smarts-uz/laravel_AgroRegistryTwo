@extends('layouts.app')

@section('content')
    <div class="user-app bg-white">

        <h1 class="mb-4">@lang('user::trans.users')</h1>

        <div class="jumbotron">
            Жорий фойдаланувчи: <strong>{{ auth()->user()->name }}</strong>
        </div>

        <div class="mt-2 mb-2 text-right">
            <a class="btn btn-xs btn-outline-danger" href="{{ route('impersonate.stop') }}" data-toggle="tooltip" data-placement="top" title="тохтатиш">
                тохтатиш
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class="col-md-2">@sortablelink('fullname', trans('user::trans.fio'))</th>
                        <th>@sortablelink('name', trans('user::trans.name'))</th>
                        <th>@sortablelink('email', trans('user::trans.email'))</th>
                        <th>@sortablelink('status', trans('user::trans.status'))</th>
                        <th>@sortablelink('created_at', trans('user::trans.created_date'))</th>
                        <th>@sortablelink('last_login', trans('user::trans.last_login'))</th>
                        <th>@lang('user::trans.action')</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->fullname }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->formatted_status() }}</td>
                            <td>{{ $user->created_at->format('d.m.Y H:i:s') }}</td>
                            <td>{{ $user->formatted_last_login }}</td>
                            <td>
                                <a href="{{ route('impersonate.start', $user->id) }}" class="btn btn-xs btn-outline-info" data-toggle="tooltip" data-placement="top" title="фойдаланиш">
                                    <span class="fa fa-user"></span>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">@lang('user::trans.no_results')</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-3">
                <div class="float-right">
                    {{ $users->links() }}
                </div>
            </div>

            <form :action="deleteUrl" method="post" ref="userDeleteForm">
                @csrf
                @method('delete')
            </form>
            <form :action="restoreUrl" method="post" ref="userRestoreForm">
                @csrf
            </form>
        </div>
    </div>
@endsection

