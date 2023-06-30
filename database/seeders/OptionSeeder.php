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
            'quiz_id' => 1,
            'content' => 'おはよう',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 1,
            'content' => 'こんにちは',
            'true_false' => 1,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 1,
            'content' => 'こんばんは',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 1,
            'content' => 'お元気ですか',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 2,
            'content' => '私',
            'true_false' => 1,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 2,
            'content' => 'あなた',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 2,
            'content' => '彼',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 2,
            'content' => '彼女',
            'true_false' => 2,
            ]);
            
            
        DB::table('options')->insert([
            'quiz_id' => 3,
            'content' => '月曜日',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 3,
            'content' => '水曜日',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 3,
            'content' => '土曜日',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 3,
            'content' => '日曜日',
            'true_false' => 1,
            ]);
        
            
        DB::table('options')->insert([
            'quiz_id' => 4,
            'content' => '日本',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 4,
            'content' => 'アメリカ',
            'true_false' => 1,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 4,
            'content' => 'イギリス',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 4,
            'content' => 'ロシア',
            'true_false' => 2,
            ]);
        
            
        DB::table('options')->insert([
            'quiz_id' => 5,
            'content' => '行く',
            'true_false' => 1,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 5,
            'content' => '去る',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 5,
            'content' => '戻る',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 5,
            'content' => '走る',
            'true_false' => 2,
            ]);
        
            
        DB::table('options')->insert([
            'quiz_id' => 6,
            'content' => '妈妈',
            'true_false' => 1,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 6,
            'content' => '奶奶',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 6,
            'content' => '姐姐',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 6,
            'content' => '哥哥',
            'true_false' => 2,
            ]);
        
            
        DB::table('options')->insert([
            'quiz_id' => 7,
            'content' => '喝',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 7,
            'content' => '吃',
            'true_false' => 1,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 7,
            'content' => '饭',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 7,
            'content' => '得',
            'true_false' => 2,
            ]);
        
            
        DB::table('options')->insert([
            'quiz_id' => 8,
            'content' => '卖',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 8,
            'content' => '回',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 8,
            'content' => '买',
            'true_false' => 1,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 8,
            'content' => '借',
            'true_false' => 2,
            ]);
        
            
        DB::table('options')->insert([
            'quiz_id' => 9,
            'content' => '电影',
            'true_false' => 1,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 9,
            'content' => '电视',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 9,
            'content' => '游戏',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 9,
            'content' => '戏剧',
            'true_false' => 2,
            ]);
        
            
        DB::table('options')->insert([
            'quiz_id' => 10,
            'content' => '不客气',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 10,
            'content' => '没关系',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 10,
            'content' => '再见',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 10,
            'content' => '对不起',
            'true_false' => 1,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 11,
            'content' => 'ラーメン',
            'true_false' => 2,
            ]);
            
         DB::table('options')->insert([
            'quiz_id' => 11,
            'content' => 'おでん',
            'true_false' => 2,
            ]);
            
         DB::table('options')->insert([
            'quiz_id' => 11,
            'content' => 'ホットドッグ',
            'true_false' => 1,
            ]);
            
         DB::table('options')->insert([
            'quiz_id' => 11,
            'content' => '中華まん',
            'true_false' => 2,
            ]);
            
         DB::table('options')->insert([
            'quiz_id' => 12,
            'content' => 'サッカー',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 12,
            'content' => 'テニス',
            'true_false' => 1,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 12,
            'content' => 'バドミントン',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 12,
            'content' => '卓球',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 13,
            'content' => 'ジャスミン茶',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 13,
            'content' => 'ウーロン茶',
            'true_false' => 1,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 13,
            'content' => 'プーアル茶',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 13,
            'content' => 'アールグレイ',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 14,
            'content' => 'ワンピース',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 14,
            'content' => 'ドラゴンボール',
            'true_false' => 2,
            ]);
            
         DB::table('options')->insert([
            'quiz_id' => 14,
            'content' => 'ドラえもん',
            'true_false' => 2,
            ]);
            
         DB::table('options')->insert([
            'quiz_id' => 14,
            'content' => 'ポケットモンスター',
            'true_false' => 1,
            ]);
            
         DB::table('options')->insert([
            'quiz_id' => 15,
            'content' => 'ディズニーランド',
            'true_false' => 1,
            ]);
            
         DB::table('options')->insert([
            'quiz_id' => 15,
            'content' => 'ユニバーサルスタジオ',
            'true_false' => 2,
            ]);
            
         DB::table('options')->insert([
            'quiz_id' => 15,
            'content' => 'サンリオピューロランド',
            'true_false' => 2,
            ]);
            
         DB::table('options')->insert([
            'quiz_id' => 15,
            'content' => '富士急ハイランド',
            'true_false' => 2,
            ]);
            
        
         DB::table('options')->insert([
            'quiz_id' => 16,
            'content' => 'ホテル',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 16,
            'content' => 'コンビニ',
            'true_false' => 1,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 16,
            'content' => '100円ショップ',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 16,
            'content' => 'スーパーマーケット',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 17,
            'content' => '小学生',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 17,
            'content' => '中学生',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 17,
            'content' => '高校生',
            'true_false' => 1,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 17,
            'content' => '大学生',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 18,
            'content' => '新聞',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 18,
            'content' => 'ニュース',
            'true_false' => 1,
            ]);
            
         DB::table('options')->insert([
            'quiz_id' => 18,
            'content' => '歴史',
            'true_false' => 2,
            ]);
            
         DB::table('options')->insert([
            'quiz_id' => 18,
            'content' => '流行り',
            'true_false' => 2,
            ]);
            
         DB::table('options')->insert([
            'quiz_id' => 19,
            'content' => '0',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 19,
            'content' => '1',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 19,
            'content' => '5',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 19,
            'content' => '8',
            'true_false' => 1,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 20,
            'content' => '清',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 20,
            'content' => '情',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 20,
            'content' => '請',
            'true_false' => 1,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 20,
            'content' => '靖',
            'true_false' => 2,
            ]);
            
        
        DB::table('options')->insert([
            'quiz_id' => 21,
            'content' => '如果',
            'true_false' => 1,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 21,
            'content' => '不过',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 21,
            'content' => '虽然～但是',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 21,
            'content' => '因为～所以',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 22,
            'content' => '然后',
            'true_false' => 2,
            ]);
            
         DB::table('options')->insert([
            'quiz_id' => 22,
            'content' => '虽然～但是',
            'true_false' => 1,
            ]);
            
         DB::table('options')->insert([
            'quiz_id' => 22,
            'content' => '要是～的话',
            'true_false' => 2,
            ]);
            
         DB::table('options')->insert([
            'quiz_id' => 22,
            'content' => '因为～所以',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 23,
            'content' => '不仅～而且',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 23,
            'content' => '因为～所以',
            'true_false' => 1,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 23,
            'content' => '虽然～但是',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 23,
            'content' => '只要～就',
            'true_false' => 2,
            ]);
            
        DB::table('options')->insert([
            'quiz_id' => 24,
            'content' => 'zuò xīngànxiàn',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 24,
            'content' => 'zuò chuán',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 24,
            'content' => 'zuò fēijī',
            'true_false' => 1,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 24,
            'content' => 'kāi chē',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 25,
            'content' => 'shūdiàn',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 25,
            'content' => 'chāoshì',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 25,
            'content' => 'yīyuàn',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 25,
            'content' => 'yínháng',
            'true_false' => 1,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 26,
            'content' => 'tiào wǔ',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 26,
            'content' => 'huà huàr',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 26,
            'content' => 'yóu yǒng',
            'true_false' => 1,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 26,
            'content' => 'tīng yīnyuè',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 27,
            'content' => '这些不是课本',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 27,
            'content' => '那些不是词典',
            'true_false' => 1,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 27,
            'content' => '那些不是杂志吗',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 27,
            'content' => '这些是手机',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 28,
            'content' => '汉语非常难',
            'true_false' => 1,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 28,
            'content' => '汉语比较难',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 28,
            'content' => '汉语不太难',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 28,
            'content' => '汉语真难吗',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 29,
            'content' => '我哥哥能游一百米',
            'true_false' => 1,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 29,
            'content' => '我哥哥会游一百米',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 29,
            'content' => '我哥哥会游一百里',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 29,
            'content' => '我哥哥能游一千里',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 30,
            'content' => '真',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 30,
            'content' => '都',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 30,
            'content' => '也',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 30,
            'content' => '不',
            'true_false' => 1,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 31,
            'content' => '在',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 31,
            'content' => '是',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 31,
            'content' => '有',
            'true_false' => 1,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 31,
            'content' => '做',
            'true_false' => 2,
            ]);
        
         DB::table('options')->insert([
            'quiz_id' => 32,
            'content' => '哪儿',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 32,
            'content' => '那儿',
            'true_false' => 2,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 32,
            'content' => '什么',
            'true_false' => 1,
            ]);
        
        DB::table('options')->insert([
            'quiz_id' => 32,
            'content' => '多少',
            'true_false' => 2,
            ]);
        
        
    }
}
