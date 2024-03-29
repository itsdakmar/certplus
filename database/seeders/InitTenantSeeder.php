<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\{Tenant, User};
use Illuminate\Database\Seeder;

class InitTenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);

        $tenant1 = Tenant::create();
        $tenant1->domains()->create(['domain' => 'tenant1']);

        $tenant2 = Tenant::create();
        $tenant2->domains()->create(['domain' => 'tenant2']);

        Tenant::all()->runForEach(function ($tenant) {
            $admin = User::factory()->create([
                'email'     => $tenant->domains->first()->domain.'@ican.my',
                'password'  => Hash::make('secret')
            ]);

            $admin->assignRole('admin');

            User::factory(5)->create([
                'password'  => Hash::make('secret')
            ]);
        });
    }
}
