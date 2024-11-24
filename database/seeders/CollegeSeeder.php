<?php

namespace Database\Seeders;

use App\Models\College;
use App\Models\Discipline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
class CollegeSeeder extends Seeder
{
    public function run(): void
    {
        $colleges = [
            [
                'code' => '24101',
                'name' => 'F.G. Degree College (Men) Peshawar',
                'college_disciplines' => [
                    Discipline::where('name', 'Political Science')->first(['id'])->id,
                    Discipline::where('name', 'Computer Science')->first(['id'])->id,
                    Discipline::where('name', 'English')->first(['id'])->id,
                    Discipline::where('code', 'BBA')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24102',
                'name' => 'F.G. Degree College for Women Peshawar Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'English')->first(['id'])->id,
                    Discipline::where('name', 'Economics')->first(['id'])->id,
                    Discipline::where('name', 'Urdu')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24103',
                'name' => 'F.G. Degree College for Boys Nowshera Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'Urdu')->first(['id'])->id,
                    Discipline::where('name', 'Computer Science')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24104',
                'name' => 'F.G. Girls Degree College Nowshera Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'Computer Science')->first(['id'])->id,
                    Discipline::where('name', 'Urdu')->first(['id'])->id,
                    Discipline::where('name', 'English')->first(['id'])->id,
                    Discipline::where('name', 'Psychology')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24105',
                'name' => 'F.G. Degree College for Boys Kohat Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'Computer Science')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24106',
                'name' => 'F.G. Degree College for Women Kohat Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'Psychology')->first(['id'])->id,
                    Discipline::where('name', 'English')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24107',
                'name' => 'F.G. Degree College for Women Bannu Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'Political Science')->first(['id'])->id,
                    Discipline::where('name', 'Health & Physical Education')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24108',
                'name' => 'F.G. Degree College for Men Wah Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'English')->first(['id'])->id,
                    Discipline::where('name', 'Mathematics')->first(['id'])->id,
                    Discipline::where('code', 'BBA')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24109',
                'name' => 'F.G. Postgraduate College for Women Wah Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'English')->first(['id'])->id,
                    Discipline::where('name', 'Mathematics')->first(['id'])->id,
                    Discipline::where('name', 'Islamic Studies')->first(['id'])->id,
                    Discipline::where('name', 'Economics')->first(['id'])->id,
                    Discipline::where('name', 'Botany')->first(['id'])->id,
                    Discipline::where('name', 'Computer Science')->first(['id'])->id,
                    Discipline::where('name', 'Psychology')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24110',
                'name' => 'F.G. Science Degree College Wah Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'Physics')->first(['id'])->id,
                    Discipline::where('name', 'Computer Science')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24111',
                'name' => 'F.G. Liaquat Ali Degree College, Peshawar Road, Rawalpindi',
                'college_disciplines' => [
                    Discipline::where('name', 'English')->first(['id'])->id,
                    Discipline::where('name', 'Computer Science')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24112',
                'name' => 'F.G. Degree College for Women, Abid Majeed Road Rawalpindi',
                'college_disciplines' => [
                    Discipline::where('name', 'Economics')->first(['id'])->id,
                    Discipline::where('name', 'Psychology')->first(['id'])->id,
                    Discipline::where('name', 'Political Science')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24113',
                'name' => 'F.G. Postgraduate College for Women Kashmir Road Rawalpindi',
                'college_disciplines' => [
                    Discipline::where('name', 'English')->first(['id'])->id,
                    Discipline::where('name', 'Mathematics')->first(['id'])->id,
                    Discipline::where('name', 'Urdu')->first(['id'])->id,
                    Discipline::where('name', 'Islamic Studies')->first(['id'])->id,
                    Discipline::where('name', 'Economics')->first(['id'])->id,
                    Discipline::where('name', 'Computer Science')->first(['id'])->id,
                    Discipline::where('name', 'Psychology')->first(['id'])->id,
                    Discipline::where('code', 'BBA')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24114',
                'name' => 'F.G. Sir Syed College, the Mall, Rawalpindi Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'Computer Science')->first(['id'])->id,
                    Discipline::where('name', 'Mathematics')->first(['id'])->id,
                    Discipline::where('name', 'Physics')->first(['id'])->id,
                    Discipline::where('name', 'Economics')->first(['id'])->id,
                    Discipline::where('code', 'BBA')->first(['id'])->id,
                    Discipline::where('name', 'English')->first(['id'])->id,
                    Discipline::where('name', 'Psychology')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24115',
                'name' => 'F.G. Quaid-e-Azam Degree College Chaklala Scheme III Rawalpindi',
                'college_disciplines' => [
                    Discipline::where('name', 'Computer Science')->first(['id'])->id,
                    Discipline::where('name', 'Urdu')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24116',
                'name' => 'F.G. Degree College for Men Kharian Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'Information Technology')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24117',
                'name' => 'F.G. Degree College for Women Kharian Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'Information Technology')->first(['id'])->id,
                    Discipline::where('name', 'English')->first(['id'])->id,
                    Discipline::where('name', 'Health & Physical Education')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24118',
                'name' => 'F.G. Degree College Gujranwala Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'English')->first(['id'])->id,
                    Discipline::where('name', 'Economics')->first(['id'])->id,
                    Discipline::where('name', 'Computer Science')->first(['id'])->id,
                    Discipline::where('name', 'Bachelor of Business Administration')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24119',
                'name' => 'F.G. Degree College, Allama Iqbal Campus, Aziz Bhatti Road, Lahore Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'English')->first(['id'])->id,
                    Discipline::where('name', 'Computer Science')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24120',
                'name' => 'F.G. Syeda Fatima Degree College, Mazhar Lines, Lahore Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'English')->first(['id'])->id,
                    Discipline::where('name', 'Computer Science')->first(['id'])->id,
                    Discipline::where('name', 'Fine Arts')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24121',
                'name' => 'F.G. Degree College Okara Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'English')->first(['id'])->id,
                    Discipline::where('name', 'Computer Science')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24122',
                'name' => 'F.G. Degree College for Boys Multan Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'English')->first(['id'])->id,
                    Discipline::where('name', 'Information Technology')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24123',
                'name' => 'F.G. Degree College for Women Multan Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'English')->first(['id'])->id,
                    Discipline::where('name', 'Computer Science')->first(['id'])->id,
                    Discipline::where('name', 'Islamic Studies')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24124',
                'name' => 'F.G. Degree College Hyderabad Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'Computer Science')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24125',
                'name' => 'F.G. Degree College Quetta Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'English')->first(['id'])->id,
                ]
            ],
            [
                'code' => '24126',
                'name' => 'F.G. Girls Degree College Quetta Cantt',
                'college_disciplines' => [
                    Discipline::where('name', 'English')->first(['id'])->id,
                ]
            ],
        ];

        foreach ($colleges as $college) {
            $collegeModel = College::create([
                'name' => $college['name'],
                'code' => $college['code']
            ]);

            $collegeModel->disciplines()->attach($college['college_disciplines']);
        }

    }
}
