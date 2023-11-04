<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $deafult = Role::create(['name' => 'default']);
        $admin_role = Role::create(['name' => 'admin']);

        $manage_user_permission = Permission::create(['name' => 'manage users']);
        $manage_post_permission = Permission::create(['name' => 'manage posts']);

        $permissions = [
            $manage_user_permission,
            $manage_post_permission
        ];
        $admin_role->syncPermissions($permissions);

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        $admin->assignRole($admin_role);
        $admin->givePermissionTo([
           $manage_user_permission,
           $manage_post_permission 
        ]);

    }
}
