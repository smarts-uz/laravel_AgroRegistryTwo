<?php

namespace Modules\OneAuth\Services;

use Carbon\Carbon;
use App\Models\User;
use App\Jobs\User\NotifyOperatorJob;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class OneAuthService {
    protected $API_URL = "https://sso2.egov.uz:8443/sso/oauth/Authorization.do";

    public function getAccessToken($code) {
        $response = Http::asForm()->post($this->API_URL, [
            'grant_type' => 'one_authorization_code',
            'client_id' => config('oneauth.one_id.CLIENT_ID'),
            'client_secret' => config('oneauth.one_id.CLIENT_SECRET'),
            'code' => $code,
            'redirect_uri' => 'http://e-ijara.loc/oneauth/auth'
        ]);

        return json_decode($response);
    }

    public function getOneAuthData($access_token) {
        $response = Http::asForm()->post($this->API_URL, [
            'grant_type' => 'one_access_token_identify',
            'client_id' => config('oneauth.one_id.CLIENT_ID'),
            'client_secret' => config('oneauth.one_id.CLIENT_SECRET'),
            'access_token' => $access_token
        ]);

        return json_decode($response);
    }

    public function makeParams($response) {
        return [
            'username' => $response->user_id,
            'fullname' => sprintf("%s %s %s", $response->sur_name, $response->first_name, $response->mid_name),
            'firstname' => $response->first_name,
            'lastname' => $response->sur_name,
            'midname' => $response->mid_name,
            'pinfl' => $response->pin,
            'inn' => $response->tin,
            'passport' => $response->pport_no,
            'passport_expire_date' => Carbon::createFromFormat('Y-d-m', $response->pport_expr_date)->format('Y-m-d'),
            'phone' => $response->mob_phone_no,
            'address' => $response->per_adr ?? null,
            'email' => $response->email,
            'name' => $response->user_id,
            'password' => Hash::make(uniqid()),
            'auth_type' => 'oneid',
            'status' => 1
        ];
    }

    public function authorizeUser($params) {
        // CREATE NEW OR UPDATE EXISTING USER
        $user = User::updateOrCreate(
            ['pinfl' => $params['pinfl']],
            $params
        );

        // NOTIFY OPERATOR ABOUT NEW USER
        if($user->wasRecentlyCreated) {
            $message = "<b>Yangi foydalanuvchi tizimda ro'yhatdan o'tdi.</b>\n";
            $message .= "<b>OneID:</b> " . $user->username . "\n";
            $message .= "<b>FISh:</b> " . $user->fullname . "\n";

            // #TODO: dispatch async on production
            NotifyOperatorJob::dispatchSync($message);
        }

        // CHECK USER STATUS
        if(!$user->status)
            throw new \Exception(trans("user::trans.user_is_inactive"), 401);

        // AUTHORIZE USER
        Auth::login($user);
    }
}
