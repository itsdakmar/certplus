<?php

namespace App\Actions\Fortify;

use App\Models\Domain;
use App\Models\Tenant;
use App\Models\User;
use App\Rules\Subdomain;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    public function create(array $input): User
    {
        Validator::make($input, [
            'name'      => ['required', 'string', 'max:255'],
            'team_name' => ['required', 'string', 'max:255'],
            'subdomain' => [
                'required',
                'string',
                'max:255',
                'alpha_num',
                new Subdomain,
                Rule::unique(Domain::class, 'domain'),
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'terms' => 'accepted',
        ])->validate();

        $tenant = Tenant::create(['data' => ['team_name' => $input['team_name']]]);
        $tenant->domains()->create(['domain' => $input['subdomain']]);

        $user = User::create([
            'name'      => $input['name'],
            'email'     => $input['email'],
            'password'  => Hash::make($input['password']),
            'tenant_id' => $tenant->id
        ]);

        $user->assignRole('admin');

        return $user;
    }
}
