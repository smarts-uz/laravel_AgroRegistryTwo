<!-- ONE ID маълумотлари -->
<div class="divider-text mg-b-20">ONE ID маълумотлари</div>
<section class="row row-sm">
    <div class="form-group col-sm-4 col-xs-12 col-md-4 col-lg-4">
        <label class="form-label">Исм</label>
        <input type="text" class="form-control" name="firstname" value="{{ old('firstname', $user->firstname) }}" {{ $user->isOneIdUser() ? "readonly" : "" }}>
    </div><!-- col -->
    <div class="form-group col-sm-4 col-xs-12 col-md-4 col-lg-4">
        <label class="form-label">Фамилия</label>
        <input type="text" class="form-control" name="lastname" value="{{ old('lastname', $user->lastname) }}" {{ $user->isOneIdUser() ? "readonly" : "" }}>
    </div><!-- col -->
    <div class="form-group col-sm-4 col-xs-12 col-md-4 col-lg-4">
        <label class="form-label">Шарифи</label>
        <input type="text" class="form-control" name="midname" value="{{ old('midname', $user->midname) }}" {{ $user->isOneIdUser() ? "readonly" : "" }}>
    </div><!-- col -->
    <div class="form-group col-sm-4 col-xs-12 col-md-4 col-lg-4">
        <label class="form-label">Паспорт с/р</label>
        <input type="text" class="form-control passport-field" name="passport" value="{{ old('passport', $user->passport) }}" {{ $user->isOneIdUser() ? "readonly" : "" }}>
    </div><!-- col -->
    <div class="form-group col-sm-4 col-xs-12 col-md-4 col-lg-4">
        <label class="form-label">Амал қилиш муддати</label>
        <input type="text" class="form-control date-field" name="passport_expire_date" value="{{ old('passport_expire_date', $user->formatted_passport_expire_date) }}" {{ $user->isOneIdUser() ? "disabled" : "" }}>
    </div><!-- col -->
    <div class="form-group col-sm-4 col-xs-12 col-md-4 col-lg-4">
        <label class="form-label">ПИНФЛ</label>
        <input type="text" class="form-control" value="{{ $user->pinfl }}" disabled="">
    </div><!-- col -->
    <input type="hidden" name="auth_type" value="{{ $user->auth_type }}">
</section><!-- form-row -->
