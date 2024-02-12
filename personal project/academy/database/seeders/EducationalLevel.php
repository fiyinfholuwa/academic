<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationalLevel extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('educational_levels')->insert([
            [
                'level_code' => 'bsc',
                'level_name' => 'Undergraduate',

            ],[
                'level_code' => 'sec',
                'level_name' => 'High School',

            ],[
                'level_code' => 'msc',
                'level_name' => 'Master Degree',

            ],[
                'level_code' => 'phd',
                'level_name' => 'PostGraduate',

            ],
        ]);
    }
}
