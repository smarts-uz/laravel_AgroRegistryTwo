<?php

namespace App\Services;

use Illuminate\Support\Facades\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;

class ActivityServise {

    public function getActivity () {
        $log = [];
        $log['url'] = Request::fullUrl();
        $log['method'] = Request::method();
        $log['ip'] = Request::ip();
        $userId = Auth::id();
//        dd($userId);
        Auth::check() ? $log['user_id'] = Request::user()->id : $log['user_id'] = null;
        $log['agent'] = Request::header('user-agent');
        Activity::create($log);
    }
}
