<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            'workshop-list',
            'workshop-create',
            'workshop-edit',
            'workshop-delete',
            'vehicle-list',
            'vehicle-create',
            'vehicle-edit',
            'vehicle-delete',
            'service-list',
            'service-create',
            'service-edit',
            'service-delete',
            'serviceRecord-list',
            'serviceRecord-create',
            'serviceRecord-edit',
            'serviceRecord-delete',
            'serviceBook-list',
            'serviceBook-create',
            'serviceBook-edit',
            'serviceBook-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'banner-list',
            'banner-create',
            'banner-edit',
            'banner-delete',
            'about-list',
            'about-create',
            'about-edit',
            'about-delete',
        ];

        foreach ($permission as $permission) {
            Permission::create(['name' => $permission]);
       }
    }
}
