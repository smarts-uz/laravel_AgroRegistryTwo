<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate(['name' => 'operator']);
        Role::firstOrCreate(['name' => 'performer']);
        Role::firstOrCreate(['name' => 'hokimiyat']);
        Role::firstOrCreate(['name' => 'organization']);
        Role::firstOrCreate(['name' => 'commission']);
        Role::firstOrCreate(['name' => 'control']);

        // create permissions
        Permission::firstOrCreate(['name' => 'see users']);
        Permission::firstOrCreate(['name' => 'create users']);
        Permission::firstOrCreate(['name' => 'edit users']);
        Permission::firstOrCreate(['name' => 'delete users']);

        Permission::firstOrCreate(['name' => 'see empty lands']);
        Permission::firstOrCreate(['name' => 'enter empty lands']);
        Permission::firstOrCreate(['name' => 'edit empty lands']);
        Permission::firstOrCreate(['name' => 'accept empty lands']);
        Permission::firstOrCreate(['name' => 'delete empty lands']);

        Permission::firstOrCreate(['name' => 'see lots']);
        Permission::firstOrCreate(['name' => 'edit lots']);
        Permission::firstOrCreate(['name' => 'rate lots']);
        Permission::firstOrCreate(['name' => 'send lots competition']);
        Permission::firstOrCreate(['name' => 'delete lots']);

        Permission::firstOrCreate(['name' => 'see organizations']);
        Permission::firstOrCreate(['name' => 'create organizations']);
        Permission::firstOrCreate(['name' => 'edit organizations']);
        Permission::firstOrCreate(['name' => 'delete organizations']);
    }
}
