<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

		// create roles and assign existing permissions
		Role::create(['name' => 'admin']);
		Role::create(['name' => 'supervisor']);
		Role::create(['name' => 'cashier']);
		Role::create(['name' => 'sales-assistant']);
    }
}
