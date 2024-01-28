<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AskCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ask_categories')->insert([
            [
                'ask_code' => 'started',
                'ask_name' => 'Getting Started',

            ],[
                'ask_code' => 'benefit',
                'ask_name' => 'Benefits',

            ],[
                'ask_code' => 'requirements',
                'ask_name' => 'Requirements',

            ],[
                'ask_code' => 'eligibility',
                'ask_name' => 'Eligibility',

            ],[
                'ask_code' => 'work',
                'ask_name' => 'Work & Study',

            ],[
                'ask_code' => 'communication',
                'ask_name' => 'Communication',

            ]
        ]);
    }
}
