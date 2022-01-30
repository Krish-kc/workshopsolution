<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Kenish KC',
            'email' => 'kenishkc655@gmail.com',
            'password' => bcrypt('hesoyam009')
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permission = Permission::pluck('id','id')->all();

        $role->syncPermissions($permission);

        $user->assignRole([$role->id]);
    }
}
