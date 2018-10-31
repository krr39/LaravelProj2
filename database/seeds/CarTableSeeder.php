<?php

use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car')->insert([
            'make' => str_random(10),
            'model' => str_random(10),
            'year' => str_random(4)
        ]);
    }
}
