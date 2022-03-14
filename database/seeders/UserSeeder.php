<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'username' => 'Admin',
            'email' => 'admin@civil.net',
            'password' => bcrypt('admin'),
        ]);

        $role = Role::create(['name' => 'admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $admin->assignRole([$role->id]);

        $operator = User::create([
            'username' => 'Operator',
            'email' => 'operator@civil.net',
            'password' => bcrypt('operator'),
        ]);

        $role = Role::create(['name' => 'operator']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $operator->assignRole([$role->id]);

        $user = User::create([
            'username' => 'Raga',
            'email' => 'raga@civil.net',
            'password' => bcrypt('raga'),
        ]);

        $role = Role::create(['name' => 'user']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
        
        $user = User::create([
            'username' => 'andy',
            'email' => 'andy@civil.net',
            'password' => bcrypt('andy'),
        ]);

        $user->assignRole('user');
        
        $user = User::create([
            'username' => 'dani',
            'email' => 'dani@civil.net',
            'password' => bcrypt('dani'),
        ]);

        $user->assignRole('user');

        
    }
}
