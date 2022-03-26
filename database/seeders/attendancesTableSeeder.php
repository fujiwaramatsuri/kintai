<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class attendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # リセット
    DB::table('attendances')->delete();

    # 日本語設定
    // $faker = Faker\Factory::create('ja_JP');
        $param = [
            'user_id' => '1',
            'start_time' => '00:00:00',
            'end_time' => '12:34:56'
        ];
        DB::table('attendances')->insert($param);
        //
    }
}
