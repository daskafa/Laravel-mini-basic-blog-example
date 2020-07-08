<?php

use Illuminate\Database\Seeder;

class data1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data2')->insert([
          'title' => 'seeeeeeeder broo'
        ]);
    }
}
