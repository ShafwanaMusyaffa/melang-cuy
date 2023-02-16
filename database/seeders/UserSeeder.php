<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
        
        $admin = User::create(array_merge([
            'email' => 'admin@gmail.com',
            'name' => 'admin',
        ], $default_user_value));
        
        $staff = User::create(array_merge([
            'email' => 'staff@gmail.com',
            'name' => 'staff',
        ], $default_user_value));
        
        $member = User::create(array_merge([
            'email' => 'member@gmail.com',
            'name' => 'member',
        ], $default_user_value));

        $role_admin = Role::create(['name' => 'admin']);
        $role_staff = Role::create(['name' => 'staff']);
        $role_member = Role::create(['name' => 'member']);

        $permission = Permission::create(['name' => 'read menu']);
        $permission = Permission::create(['name' => 'create menu']);
        $permission = Permission::create(['name' => 'update menu']);
        $permission = Permission::create(['name' => 'delete menu']);

        $role_admin->givePermissionTo('read menu');
        $role_admin->givePermissionTo('create menu');
        $role_admin->givePermissionTo('update menu');
        $role_admin->givePermissionTo('delete menu');

        $admin->assignRole('admin');
        $staff->assignRole('staff');
        $member->assignRole('member');


    }
}
