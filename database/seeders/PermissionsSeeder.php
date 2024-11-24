<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Spatie\Permission\Models\Permission;
class PermissionsSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [

            // settings
            ['name' => 'roles_and_permissions.view'],
            ['name' => 'roles_and_permissions.create'],
            ['name' => 'roles_and_permissions.update'],
            ['name' => 'roles_and_permissions.delete'],

            ['name' => 'users.view'],
            ['name' => 'users.create'],
            ['name' => 'users.update'],
            ['name' => 'users.delete'],

            ['name' => 'sections.view'],
            ['name' => 'sections.create'],
            ['name' => 'sections.update'],
            ['name' => 'sections.delete'],

            ['name' => 'disciplines.view'],
            ['name' => 'disciplines.create'],
            ['name' => 'disciplines.update'],

            ['name' => 'colleges.view'],
            ['name' => 'colleges.create'],
            ['name' => 'colleges.update'],
            ['name' => 'colleges.delete'],
        ];

        $insert_data = [];
        $time_stamp = Carbon::now()->toDateTimeString();

        foreach ($permissions as $permission) {
            $permission['guard_name'] = 'web';
            $permission['created_at'] = $time_stamp;
            $permission['updated_at'] = $time_stamp;
            $insert_data[] = $permission;
        }

        Permission::insert($insert_data);
    }
}
