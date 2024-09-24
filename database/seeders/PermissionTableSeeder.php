<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Create Roles
    $adminRole = Role::create(['name' => 'Admin']);
    $managerRole = Role::create(['name' => 'Manager']);
    $teamMemberRole = Role::create(['name' => 'Team Member']);

    // Create Permissions
    $permissions = ['create tasks', 'edit tasks', 'assign tasks', 'view tasks'];
    foreach ($permissions as $permission) {
        Permission::create(['name' => $permission]);
    }

    // Assign Permissions to Roles
    $adminRole->givePermissionTo(Permission::all());
    $managerRole->givePermissionTo(['create tasks', 'edit tasks', 'assign tasks']);
    $teamMemberRole->givePermissionTo('view tasks');

    }
}
