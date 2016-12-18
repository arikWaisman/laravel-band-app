<?php

use Illuminate\Database\Seeder;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $bands = [
            ['id' => 1, 'name' => 'Dokken', 'start_date' => '1979', 'website' => 'http://dokken.net/', 'still_active' => 1],
            ['id' => 2, 'name' => 'Ratt', 'start_date' => '1976', 'website' => 'http://www.therattpack.com/', 'still_active' => 1],
            ['id' => 3, 'name' => 'Van Halen', 'start_date' => '1972', 'website' => 'http://www.van-halen.com/', 'still_active' => 1],
            ['id' => 4, 'name' => 'Led Zepplin', 'start_date' => '1968', 'website' => 'http://www.ledzeppelin.com/', 'still_active' => 0]

        ];

        DB::table('bands')->insert($bands);

    }
}
