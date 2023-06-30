<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
            'question' => '你好',
            'genre' => 1,
            ]);
        
        DB::table('quizzes')->insert([
            'question' => '我',
            'genre' => 1,
            ]);
        
        DB::table('quizzes')->insert([
            'question' => '星期天',
            'genre' => 1,
            ]);
        
        DB::table('quizzes')->insert([
            'question' => '美国',
            'genre' => 1,
            ]);
            
        DB::table('quizzes')->insert([
            'question' => '去',
            'genre' => 1,
            ]);
        
        DB::table('quizzes')->insert([
            'question' => 'お母さん',
            'genre' => 1,
            ]);
        
        DB::table('quizzes')->insert([
            'question' => '食べる',
            'genre' => 1,
            ]);
        
        DB::table('quizzes')->insert([
            'question' => '買う',
            'genre' => 1,
            ]);
        
        DB::table('quizzes')->insert([
            'question' => '映画',
            'genre' => 1,
            ]);
        
        DB::table('quizzes')->insert([
            'question' => 'ごめんなさい',
            'genre' => 1,
            ]);
            
        DB::table('quizzes')->insert([
            'question' => '中国語で「热狗」と書かれる食べ物は何でしょう？',
            'genre' => 3,
            ]);
            
        DB::table('quizzes')->insert([
            'question' => '中国語で「网球」と書かれるスポーツは何でしょう？',
            'genre' => 3,
            ]);
            
        DB::table('quizzes')->insert([
            'question' => '中国語で「乌龙茶」と書かれる飲み物は何でしょう？',
            'genre' => 3,
            ]);
            
        DB::table('quizzes')->insert([
            'question' => '中国語で「宝可梦」と書かれる日本で有名なアニメは何でしょう？',
            'genre' => 3,
            ]);
            
        DB::table('quizzes')->insert([
            'question' => '中国語で「迪士尼乐园」と書かれる日本にあるテーマパークは何でしょう？',
            'genre' => 3,
            ]);
            
        DB::table('quizzes')->insert([
            'question' => '「便利店」とは日本語で何を指すでしょう？',
            'genre' => 3,
            ]);
            
        DB::table('quizzes')->insert([
            'question' => '「高中生」とは日本語で何を指すでしょう？',
            'genre' => 3,
            ]);
            
        DB::table('quizzes')->insert([
            'question' => '「新闻」とは日本語で何を指すでしょう？',
            'genre' => 3,
            ]);
            
        DB::table('quizzes')->insert([
            'question' => '中国語で「bā」とは数字のいくつのことを指すでしょう？',
            'genre' => 3,
            ]);
            
        DB::table('quizzes')->insert([
            'question' => '「请」この漢字は日本の漢字に直すとどれに当たるでしょう？',
            'genre' => 3,
            ]);
            
        DB::table('quizzes')->insert([
            'question' => 'もしも～なら',
            'genre' => 2,
            ]);
        
        DB::table('quizzes')->insert([
            'question' => 'しかし',
            'genre' => 2,
            ]);
        
         DB::table('quizzes')->insert([
            'question' => '～なので',
            'genre' => 2,
            ]);
        
        DB::table('quizzes')->insert([
            'question' => '飛行機に乗る',
            'genre' => 2,
            ]);
            
         DB::table('quizzes')->insert([
            'question' => '銀行',
            'genre' => 2,
            ]);
        
        DB::table('quizzes')->insert([
            'question' => '泳ぐ',
            'genre' => 2,
            ]);
        
         DB::table('quizzes')->insert([
            'question' => 'それらは辞書ではありません',
            'genre' => 2,
            ]);
        
        DB::table('quizzes')->insert([
            'question' => '中国語はとても難しい',
            'genre' => 2,
            ]);
            
         DB::table('quizzes')->insert([
            'question' => '私の兄は100メートル泳げます',
            'genre' => 2,
            ]);
        
        DB::table('quizzes')->insert([
            'question' => '你想(　)想去北京？',
            'genre' => 2,
            ]);
            
        DB::table('quizzes')->insert([
            'question' => '你家附近(　)学校吗？',
            'genre' => 2,
            ]);
        
        DB::table('quizzes')->insert([
            'question' => '我学汉语，你学(　)？',
            'genre' => 2,
            ]);
    }
}
