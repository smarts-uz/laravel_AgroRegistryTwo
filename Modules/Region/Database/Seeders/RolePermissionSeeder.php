<?php

namespace Modules\Region\Database\Seeders;

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
        // create permissions
        Permission::firstOrCreate(['name' => 'create regions']);
        Permission::firstOrCreate(['name' => 'edit regions']);
        Permission::firstOrCreate(['name' => 'delete regions']);
    }
}
