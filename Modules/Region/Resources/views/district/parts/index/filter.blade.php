
<form action="{{ route('district.index') }}" method="get" class="form-inline with-margin">
    <div class="form-group">
        <div class="search-form">
            <input type="search" id="name" name="name" value="{{ request('name') }}" class="form-control" placeholder="@lang('region::trans.search_in_list')">
            <button class="btn" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </button>
        </div>
    </div>
    <div class="form-group ml-2">
        <select name="region_id" id="region_id" class="form-control">
            <option value="">-----</option>
            @foreach ($regions as $regionid => $region)
                <option {{ request()->input('region_id') == $regionid ? 'selected' : '' }} value="{{ $regionid }}">{{ $region }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group ml-2">
        <button type="submit" class="btn btn-primary">✔</a>
    </div>

    <div class="form-group ml-2">
        <a href="{{ route('district.index') }}" class="btn btn-info" title="тозалаш">✖</a>
    </div>

    <div class="form-group ml-2">
        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#create">@lang('region::trans.district_create')</button>
    </div>
</form>

<br>

<fieldset id="create" class="collapse {{ $errors->any() ? 'in show' : '' }}">
    <form action="{{ route('district.store') }}" method="post" class="form-inline with-margin jumbotron">
        @csrf
        <div class="form-group">
            <input type="text" name="areaid" id="areaid" class="form-control area-width" data-inputmask="'mask': '9999999'" placeholder="@lang('region::trans.areaid')" value="{{ old('areaid') }}">
        </div>
        <div class="form-group ml-2">
            <input type="text" name="nameuz" id="nameuz" class="form-control area-width" placeholder="@lang('region::trans.areaname_uz')" value="{{ old('nameuz') }}">
        </div>
        <div class="form-group ml-2">
            <input type="text" name="nameru" id="nameru" class="form-control area-width" placeholder="@lang('region::trans.areaname_ru')" value="{{ old('nameru') }}">
        </div>

        <div class="form-group ml-2">
            <button class="btn btn-primary" type="submit">✔</button>
        </div>
        <input type="hidden" name="regionid" value="{{ request()->region_id }}">
    </form>
</fieldset>
