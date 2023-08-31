<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'mohamed',
            'last_name' => 'elfert',
            'email' => 'mohamed@yahoo.com',
            'password' => bcrypt('123456'),
            'role_name' => 'Admin',
            'status' => 'active',
        ]);

        $role = Role::create(['name' => 'Admin', 'display_name' => 'المدير']);

        $role->givePermissionTo('user-list','user-create','user-edit','user-delete','user-show', 'user-showProfile',
            'user-profile', 'dashboard-index','setting-list','setting-edit');

        $user->assignRole([$role->id]);
    }
}
