@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Фойдаланувчилар</li>
        <li class="breadcrumb-item">{{ $user->fullname }}</li>
        <li class="breadcrumb-item active" aria-current="page">Харакатлар тарихи</li>
    </ol>
@endsection

@section('content')
    <div class="row row-xs">
        @include('user::blocks.show.sidebar')

        <div class="col-md-8">
            <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                <div class="">
                    <div id="userLogs" class="tab-pane active show">
                        <div class="table-responsive">
                            <table class="table table-sm mg-b-0 table-hover">
                                <thead>
                                    <tr class="bg-light">
                                        <th scope="col">Дата</th>
                                        <th scope="col">IP адрес</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($user->logins as $login)
                                        <tr>
                                            <th scope="row">{{ $login->created_at->format("d.m.Y H:i:s") }}</th>
                                            <td>{{ $login->ip }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th colspan="2">Ma'lumotlar topilmadi</th>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

