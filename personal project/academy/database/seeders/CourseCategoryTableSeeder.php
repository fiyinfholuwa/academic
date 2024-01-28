<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('course_categories')->insert([
            [
                'course_code' => 'accounting',
                'course_name' => 'Accounting',

            ],[
                'course_code' => 'engineering',
                'course_name' => 'Engineering',

            ],[
                'course_code' => 'computer',
                'course_name' => 'Computer Sciences And IT',

            ],[
                'course_code' => 'health',
                'course_name' => 'Health and Medicine',

            ],[
                'course_code' => 'language',
                'course_name' => 'Languages',

            ],[
                'course_code' => 'education',
                'course_name' => 'Education',

            ],[
                'course_code' => 'law',
                'course_name' => 'Law and Legal Studies',

            ],[
                'course_code' => 'art',
                'course_name' => 'Art and Design',

            ],[
                'course_code' => 'media',
                'course_name' => 'Media, Marketing and Communication',
            ],

        ]);
    }
}
