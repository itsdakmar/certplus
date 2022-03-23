<?php

namespace App\Responses;

use App\Actions\Fortify\RedirectAfterLogin;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        return (new RedirectAfterLogin)->run();
    }
}
