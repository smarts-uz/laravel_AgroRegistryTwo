@extends('layouts.app')

@section('content')
    <div class="user-app bg-white">
        <div class="card-body">
            <h1 class="mb-4">@lang('region::trans.regions')</h1>
            @include('region::district.parts.index.filter')
            @include('region::district.parts.index.list')
        </div>
    </div>
@endsection
