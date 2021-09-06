@extends('layouts.app')

@section('content')
    <div class="user-app bg-white">

        <h1 class="mb-4">@lang('user::trans.users')</h1>

        @include('user::blocks.index.top-section')

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
                                <a href="{{ route('user.show', $user->id) }}" class="btn btn-xs btn-outline-info" data-toggle="tooltip" data-placement="top" title="@lang('user::trans.show')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
                                </a>
                                @if (request()->has('with_trashed'))
                                    <a href="#" v-on:click="restoreItem($event, '{{ route('user.restore', $user->id) }}', '{{ trans('user::trans.restore_confirm') }}', 'userRestoreForm')" class="btn btn-xs btn-outline-info" data-toggle="tooltip" data-placement="top" title="@lang('user::trans.restore')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
                                            <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
                                        </svg>
                                    </a>
                                @else
                                    @can('edit users')
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-xs btn-outline-primary" data-toggle="tooltip" data-placement="top" title="@lang('user::trans.edit')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </a>
                                    @endcan
                                    @can('delete users')
                                        <a class="btn btn-xs btn-outline-danger" href="#" v-on:click="deleteItem($event, '{{ route('user.destroy', $user->id) }}', '{{ trans('user::trans.delete_confirm') }}', 'userDeleteForm')" data-toggle="tooltip" data-placement="top" title="@lang('user::trans.delete')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </a>
                                    @endcan
                                @endif
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

