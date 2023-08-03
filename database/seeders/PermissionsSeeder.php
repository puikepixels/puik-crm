<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions customers
        Permission::create(['name' => 'customer:create']);
        Permission::create(['name' => 'customer:edit']);
        Permission::create(['name' => 'customer:delete']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'writer']);
        $role1->givePermissionTo('customer:create');
        $role1->givePermissionTo('customer:edit');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('customer:create');
        $role2->givePermissionTo('customer:edit');
        $role2->givePermissionTo('customer:delete');


        $role3 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Example User',
            'email' => 'test@example.com',
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Admin User',
            'email' => 'admin@example.com',
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Super-Admin User',
            'email' => 'superadmin@example.com',
        ]);
        $user->assignRole($role3);
    }
}