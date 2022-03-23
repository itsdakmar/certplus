<?php

namespace App\Responses;

use App\Actions\Fortify\RedirectAfterLogin;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract
{

    public function toResponse($request)
    {
        return (new RedirectAfterLogin)->run();
    }
}
