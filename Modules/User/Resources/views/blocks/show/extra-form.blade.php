<span class="tx-13 tx-color-04 mg-t-5 text-right">Шахсий маълумотларни ўзгартириш <a href="#">Ягона идентификация тизими</a> орқали амалга оширилади.</span>
<div class="divider-text mg-b-20">Қўшимча маълумотлар (ихтиёрий)</div>

    <div class="row row-sm">
        <div class="col-sm-12 mg-t-10 mg-b-20 mg-sm-t-0">
            <label class="form-label">Қўшимча маълумотлар</label>
            <textarea class="form-control" name="extra_info" rows="3" placeholder="">{{ old('extra_info', $user->extra_info) }}</textarea>
        </div>

        <div class="form-group col-sm-6">
            <label class="form-label">Телефон</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">+998</span>
                </div>
                <input id="inputPhoneNumber" type="text" name="phone" class="form-control phone-field" value="{{ old("phone", $user->formatted_phone) }}" placeholder="Телефон рақам">
            </div>
        </div>

        <div class="form-group col-sm-6">
            <label class="form-label">E-mail</label>
            <input type="text" class="form-control email-field" name="email" value="{{ old('email', $user->email) }}" placeholder="E-mail манзил" required>
        </div><!-- col -->

    </div>

    <hr class="op-0">

    <button class="btn btn-sm btn-outline-success" type="submit">Маълумотларни янгилаш</button>
    <button class="btn btn-sm btn-outline-light mg-l-2">Ўзгаришларни бекор қилиш</button>


