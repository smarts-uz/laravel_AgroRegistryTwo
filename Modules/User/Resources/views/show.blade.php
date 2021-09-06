@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Фойдаланувчилар</li>
        <li class="breadcrumb-item active" aria-current="page">{{ $user->fullname }}</li>
    </ol>
@endsection

@section('content')
    <div class="row row-xs">
        @include('user::blocks.show.sidebar')

        <div class="col-md-8">
            <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                <div class="">
                    <div id="userInfo" class="tab-pane active show">
                        <section>
                            <form action="{{ route('user.update-extra', $user->id) }}" method="post">
                                @csrf

                                @include('user::blocks.show.oneid')

                                @include('user::blocks.show.extra-form')
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

