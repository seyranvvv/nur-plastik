<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13.12.2021
 * Time: 18:06
 */

namespace App\Listeners;

use App\IpAddress;
use App\LoginAttempt;
use Illuminate\Auth\Events\Login;
class LoginListener
{
    public function __construct()
    {
        //
    }

    public function handle(Login $event)
    {
        $username = request('username');
        if ($username) {
            $ip = request()->ip();
            $ip_address_id = IpAddress::where('ip_address', $ip)->first()->id;

            $obj = new LoginAttempt();
            $obj->ip_address_id = $ip_address_id;
            $obj->username = $username;
            $obj->status = true;
            $obj->save();
        }
    }
}