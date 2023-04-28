<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class offersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('offers')->insert([
            ['offer' => 'Wifi'],
            ['offer' => 'Pool'],
            ['offer' => 'Free parking on site'],
            ['offer' => 'air conditioner'],
            ['offer' => 'accepted animals'],
		]);

    }
}
