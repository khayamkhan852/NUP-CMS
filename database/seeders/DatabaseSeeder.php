<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(PermissionsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(CollegeSeeder::class);
        $this->call(DisciplineSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(UserSeeder::class);
    }
}
