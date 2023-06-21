<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            'quizzes_id' => 1,
            'content' => 'おはよう',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quizzes_id' => 1,
            'content' => 'こんにちは',
            'true_false' => 1,
            ]);
            
        DB::table('options')->insert([
            'quizzes_id' => 1,
            'content' => 'こんばんは',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quizzes_id' => 1,
            'content' => 'お元気ですか',
            'true_false' => 2,
            ]);
    }
}
