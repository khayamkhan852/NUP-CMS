<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Spatie\Permission\Models\Permission;
class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['name' => 'user.view'],
            ['name' => 'user.create'],
            ['name' => 'user.update'],
            ['name' => 'user.delete'],
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
