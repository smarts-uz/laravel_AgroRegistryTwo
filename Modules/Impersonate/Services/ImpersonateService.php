<?php

namespace Modules\Impersonate\Services;

use Illuminate\Support\Facades\Session;

class ImpersonateService {
    public function setImpersonating($id) {
        Session::put('impersonate', $id);
    }

    public function stopImpersonating() {
        Session::forget('impersonate');
    }

    public function isImpersonating() {
        return Session::has('impersonate');
    }
}
