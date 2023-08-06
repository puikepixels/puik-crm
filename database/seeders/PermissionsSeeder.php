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
        Permission::create(['name' => 'customer:index']);
        Permission::create(['name' => 'customer:create']);
        Permission::create(['name' => 'customer:edit']);
        Permission::create(['name' => 'customer:delete']);

        // create permissions customergroups
        Permission::create(['name' => 'customergroups:index']);
        Permission::create(['name' => 'customergroups:create']);
        Permission::create(['name' => 'customergroups:edit']);
        Permission::create(['name' => 'customergroups:delete']);

        // create permissions customernotes
        Permission::create(['name' => 'customernotes:index']);
        Permission::create(['name' => 'customernotes:create']);
        Permission::create(['name' => 'customernotes:edit']);
        Permission::create(['name' => 'customernotes:delete']);

        // create permissions projects
        Permission::create(['name' => 'projects:index']);
        Permission::create(['name' => 'projects:create']);
        Permission::create(['name' => 'projects:edit']);
        Permission::create(['name' => 'projects:delete']);

        // create permissions tasks
        Permission::create(['name' => 'tasks:index']);
        Permission::create(['name' => 'tasks:create']);
        Permission::create(['name' => 'tasks:edit']);
        Permission::create(['name' => 'tasks:delete']);

        // create permissions taskpriorities
        Permission::create(['name' => 'taskpriorities:index']);
        Permission::create(['name' => 'taskpriorities:create']);
        Permission::create(['name' => 'taskpriorities:edit']);
        Permission::create(['name' => 'taskpriorities:delete']);
        
        // create permissions tasktatuses
        Permission::create(['name' => 'tasktatuses:index']);
        Permission::create(['name' => 'tasktatuses:create']);
        Permission::create(['name' => 'tasktatuses:edit']);
        Permission::create(['name' => 'tasktatuses:delete']);

        // create roles and assign existing permissions

        //employer
        $role1 = Role::create(['name' => 'employer']);
        foreach(['index', 'create', 'edit'] as $per){
          $role1->givePermissionTo('customer:'.$per);
          $role1->givePermissionTo('customernotes:'.$per);
          $role1->givePermissionTo('projects:'.$per);
          $role1->givePermissionTo('tasks:'.$per);
        }

        foreach(['index'] as $per){
          $role1->givePermissionTo('customergroups:'.$per);
          $role1->givePermissionTo('taskpriorities:'.$per);
          $role1->givePermissionTo('tasktatuses:'.$per);
        }

        //Admin
        $role2 = Role::create(['name' => 'admin']);
        foreach(['index', 'create', 'edit', 'delete'] as $per){
          $role2->givePermissionTo('customer:'.$per);
          $role2->givePermissionTo('customergroups:'.$per);
          $role2->givePermissionTo('customernotes:'.$per);
          $role2->givePermissionTo('projects:'.$per);
          $role2->givePermissionTo('tasks:'.$per);
          $role2->givePermissionTo('taskpriorities:'.$per);
          $role2->givePermissionTo('tasktatuses:'.$per);
        }


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