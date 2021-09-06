@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Фойдаланувчилар</li>
        <li class="breadcrumb-item">{{ $user->fullname }}</li>
        <li class="breadcrumb-item active" aria-current="page">Ташкилот</li>
    </ol>
@endsection

@section('content')
    <div class="row row-xs">
        @include('user::blocks.show.sidebar')

        <div class="col-md-8">
            <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                <div class="">
                    <div id="userRole" class="tab-pane active show">
                        <form action="{{ route('user.company.update', $user->id) }}" method="post">
                            @csrf

                            <section>
                                <!-- Ташкилот&ҳудуд  -->
                                <div class="divider-text mg-b-20">Ташкилот ва ҳудуд маълумотлари</div>
                                <div class="form-settings">

                                    <div class="form-group">
                                        <div class="input-group mg-b-10">
                                            <input type="text" class="form-control inn-field" placeholder="Юқори турувчи ташкилот СТИР ни киритинг" aria-label="Юқори турувчи ташкилот СТИР ни киритинг" aria-describedby="button-addon1">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-light" type="button" id="button-addon1"><i data-feather="search"></i></button>
                                            </div>
                                        </div>
                                        <div class="tx-11 tx-sans tx-color-04 mg-t-5 text-right">Вазирлик/идора СТИР ни киритинг.</div>
                                    </div>

                                    <div class="row row-sm">
                                        <div class="form-group col-sm-6 col-xs-12 col-md-6 col-lg-6">
                                            <label class="form-label">Вазирлик/идора номи</label>
                                            <input type="text" class="form-control" name="name" value="{{ old('name', $user->company->name ?? "") }}" disablede="" placeholder="Тошкент вилояти сув хўжалиги бош бошқармаси" required>
                                        </div>

                                        <div class="form-group col-sm-6 col-xs-12 col-md-6 col-lg-6">
                                            <label class="form-label">СТИР</label>
                                            <input type="text" class="form-control inn-field" name="inn" value="{{ old('inn', $user->company->inn ?? "") }}" disablede="" placeholder="202314563" required>
                                        </div>

                                        <div class="form-group col-sm-12 col-xs-12 col-md-12 col-lg-12">
                                            <label class="form-label">Юридик манзил</label>
                                            <input type="text" class="form-control"  name="address" value="{{ old('address', $user->company->address ?? "") }}" disablede="" placeholder="Тошкент вил., Нурафшон шаҳар, Амир Темур кўчаси 14 уй" required>
                                        </div>

                                        <div class="form-group col-sm-4 col-xs-12 col-md-4 col-lg-4">
                                            <label class="form-label">Почта индекс</label>
                                            <input type="text" class="form-control index-field" name="index" value="{{ old('index', $user->company->index ?? "") }}" disablede="" placeholder="100052" required>
                                        </div>

                                        <div class="form-group col-sm-4 col-xs-12 col-md-4 col-lg-4">
                                            <label class="form-label">E-mail</label>
                                            <input type="text" class="form-control email-field"  name="email" value="{{ old('email', $user->company->email ?? "") }}" disablede="" placeholder="info@info.uz" required>
                                        </div>

                                        <div class="form-group col-sm-4 col-xs-12 col-md-4 col-lg-4">
                                            <label class="form-label">Телефон</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">+998</span>
                                                </div>
                                                <input id="inputPhoneNumber" type="text" class="form-control phone-field" name="phone" value="{{ old('phone', $user->company->phone ?? "") }}" placeholder="ХХХХХХХХХ" required>
                                            </div>
                                        </div>

                                        <div class="divider-text col-sm-12">Бошқарма/бўлимлар</div>
                                        <div class="form-group col-sm-4 col-xs-12 col-md-4 col-lg-4">
                                            <label class="form-label">Бошқарма/бўлим</label>
                                            <select class="custom-select form-control mg-b-5" name="department" v-model="department" data-selected="{{ old('department', $user->department) }}" ref='department'>
                                                <option {{ old('department', $user->department) == 0 ? 'selected' : '' }} value="0">Танланг</option>
                                                <option {{ old('department', $user->department) == 1 ? 'selected' : '' }} value="1">Марказий аппарат</option>
                                                <option {{ old('department', $user->department) == 2 ? 'selected' : '' }} value="2">Вилоят бошқармаси</option>
                                                <option {{ old('department', $user->department) == 3 ? 'selected' : '' }} value="3">Туман/шаҳар бўлими</option>
                                                <option {{ old('department', $user->department) == 4 ? 'selected' : '' }} value="4">Ҳудудий бошқарма</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-4 col-xs-12 col-md-4 col-lg-4">
                                            <label class="form-label">Вилоят</label>
                                            <select class="custom-select form-control mg-b-5" :disabled="![2,3,4].includes(Number(department))" v-on:change="regionChange()" v-model="region_id" id="region_id" name="region_id" ref='region_id' data-selected="{{ old('region_id', $user->region_id) }}">
                                                <option value="0">Танланг</option>
                                                @foreach ($regions as $regionid => $region)
                                                    <option {{ old('region_id', $user->region_id) == $regionid ? 'selected' : '' }} value="{{ $regionid }}">{{ $region }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-4 col-xs-12 col-md-4 col-lg-4">
                                            <label class="form-label">Туман/шаҳар</label>
                                            <select class="custom-select form-control mg-b-5" :disabled="![3].includes(Number(department))" id="district_id" v-model="district_id" name="district_id" ref='district_id' data-selected="{{ old('region_id', $user->district_id) }}">
                                                <option value="0">Танланг</option>
                                                <option :value="district.areaid" v-for="district in districts" v-if="districts.length > 0">@{{ district.nameuz }}</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr class="op-0">
                                    <button class="btn btn-sm btn-outline-success" type="submit">Маълумотларни янгилаш</button>
                                    <button class="btn btn-sm btn-outline-light mg-l-2">Ўзгаришларни бекор қилиш</button>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

