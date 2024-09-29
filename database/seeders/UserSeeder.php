<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'abdo taha',
            'email' => 'admin@mail.com',
            'password' => bcrypt('12345678'),
            'profile_img' => '1.png',
            'profile_img' => '1.png',
            'user_role' => '0',
            ]);
//             $role = Role::create(['name' => 'Admin']);
// $permissions = Permission::pluck('id','id')->all();
// $role->syncPermissions($permissions);
// $user->assignRole([$role->id]);            'roles_name' => "admin",

    }
}
