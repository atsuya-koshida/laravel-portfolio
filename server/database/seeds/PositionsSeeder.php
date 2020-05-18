<?php

use Illuminate\Database\Seeder;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            ['name' => 'ポイントガード'],
            ['name' => 'シューティングガード'],
            ['name' => 'スモールフォワード'],
            ['name' => 'パワーフォワード'],
            ['name' => 'センター'],
        ]);
    }
}
