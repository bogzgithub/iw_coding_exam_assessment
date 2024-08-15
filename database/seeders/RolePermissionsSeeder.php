<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'view roles']);
        Permission::create(['name' => 'view permissions']);

        // create normal users roles and we will not give any permissions
        $role1 = Role::create(['name' => 'normal_user']);

        // create staff roles and we will give only view users
        $role2 = Role::create(['name' => 'staff']);
        $role2->givePermissionTo('view users');

        // create admin roles
        $role3 = Role::create(['name' => 'admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Normal User',
            'email' => 'normaluser@example.com',
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Staff User',
            'email' => 'staffuser@example.com',
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'adminuser@example.com',
        ]);
        $user->assignRole($role3);
    }
}
