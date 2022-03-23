<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Auth;

class RedirectAfterLogin
{
    public function run()
    {
        $user = Auth::user()->tenant->domains()->first();
        return redirect(tenant_route($user->full_domain, 'home'));
    }
}
