<?php

namespace Database\Seeders;

use App\Models\Discipline;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DisciplineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $disciplines = [
            ['name' => 'English'],
            ['name' => 'Mathematics'],
            ['name' => 'Urdu'],
            ['name' => 'Islamic Studies'],
            ['name' => 'Economics'],
            ['name' => 'Computer Science'],
            ['name' => 'Psychology'],
            ['name' => 'Bachelor of Business Administration', 'code' => 'BBA'],
            ['name' => 'Information Technology', 'code' => 'IT'],
            ['name' => 'Health & Physical'],
            ['name' => 'Fine Arts'],
            ['name' => 'Political Science'],
            ['name' => 'Botany'],
            ['name' => 'Physics'],
            ['name' => 'Chemistry'],
            ['name' => 'Zoology'],
        ];
        foreach ($disciplines as $discipline) {
            Discipline::create($discipline);
        }

    }
}
