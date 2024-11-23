<?php

namespace Database\Seeders;

use App\Models\College;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colleges = [
            ['code' => '24101', 'name' => 'F.G. Degree College (Men) Peshawar'],
            ['code' => '24102', 'name' => 'F.G. Degree College for Women Peshawar Cantt'],
            ['code' => '24103', 'name' => 'F.G. Degree College for Boys Nowshera Cantt'],
            ['code' => '24104', 'name' => 'F.G. Girls Degree College Nowshera Cantt'],
            ['code' => '24105', 'name' => 'F.G. Degree College for Boys Kohat Cantt'],
            ['code' => '24106', 'name' => 'F.G. Degree College for Women Kohat Cantt'],
            ['code' => '24107', 'name' => 'F.G. Degree College for Women Bannu Cantt'],
            ['code' => '24108', 'name' => 'F.G. Degree College for Men Wah Cantt'],
            ['code' => '24109', 'name' => 'F.G. Postgraduate College for Women Wah Cantt'],
            ['code' => '24110', 'name' => 'F.G. Science Degree College Wah Cantt'],
            ['code' => '24111', 'name' => 'F.G. Liaquat Ali Degree College, Peshawar Road, Rawalpindi'],
            ['code' => '24112', 'name' => 'F.G. Degree College for Women, Abid Majeed Road Rawalpindi'],
            ['code' => '24113', 'name' => 'F.G. Postgraduate College for Women Kashmir Road Rawalpindi'],
            ['code' => '24114', 'name' => 'F.G. Sir Syed College, the Mall, Rawalpindi Cantt'],
            ['code' => '24115', 'name' => 'F.G. Quaid-e-Azam Degree College Chaklala Scheme III Rawalpindi'],
            ['code' => '24116', 'name' => 'F.G. Degree College for Men Kharian Cantt'],
            ['code' => '24117', 'name' => 'F.G. Degree College for Women Kharian Cantt'],
            ['code' => '24118', 'name' => 'F.G. Degree College Gujranwala Cantt'],
            ['code' => '24119', 'name' => 'F.G. Degree College, Allama Iqbal Campus, Aziz Bhatti Road, Lahore Cantt'],
            ['code' => '24120', 'name' => 'F.G. Syeda Fatima Degree College, Mazhar Lines, Lahore Cantt'],
            ['code' => '24121', 'name' => 'F.G. Degree College Okara Cantt'],
            ['code' => '24122', 'name' => 'F.G. Degree College for Boys Multan Cantt'],
            ['code' => '24123', 'name' => 'F.G. Degree College for Women Multan Cantt'],
            ['code' => '24124', 'name' => 'F.G. Degree College Hyderabad Cantt'],
            ['code' => '24125', 'name' => 'F.G. Degree College Quetta Cantt'],
            ['code' => '24126', 'name' => 'F.G. Girls Degree College Quetta Cantt'],
        ];

        $insert_data = [];
        $time_stamp = Carbon::now()->toDateTimeString();

        foreach ($colleges as $college) {
            $college['created_at'] = $time_stamp;
            $college['updated_at'] = $time_stamp;
            $insert_data[] = $college;
        }

        College::insert($insert_data);
    }
}
