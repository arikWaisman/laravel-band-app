<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $albums = [

            ['id' => 1, 'band_id' => 1, 'name' => 'Breaking the Chains', 'recorded_date' => '1983', 'release_date' => '09-18-1983',
                'number_of_tracks' => 10, 'label' => 'Elektra', 'producer' => 'Michael Wagener', 'genre' => 'heavy metal'],
            ['id' => 2, 'band_id' => 2, 'name' => 'Out of the Cellar', 'recorded_date' => '1984', 'release_date' => '03-27-1984',
                'number_of_tracks' => 10, 'label' => 'Atlantic', 'producer' => 'Beau Hill', 'genre' => 'heavy metal'],
            ['id' => 3, 'band_id' => 3, 'name' => 'Van Halen', 'recorded_date' => '1977', 'release_date' => '02-10-1978',
                'number_of_tracks' => 11, 'label' => 'Warner Bros.', 'producer' => 'Ted Templeman', 'genre' => 'hard rock'],
            ['id' => 4, 'band_id' => 4, 'name' => 'Led Zeppelin', 'recorded_date' => '1968', 'release_date' => '01-12-1968',
                'number_of_tracks' => 9, 'label' => 'Atlantic', 'producer' => 'Jimmy Pge', 'genre' => 'classic rock'],
            ['id' => 5, 'band_id' => 1, 'name' => 'Tooth and Nail', 'recorded_date' => '1984', 'release_date' => '09-14-1984',
             'number_of_tracks' => 10, 'label' => 'Elektra', 'producer' => 'Tom Werman', 'genre' => 'heavy metal'],
            ['id' => 6, 'band_id' => 2, 'name' => 'Invasion of Your Privacy', 'recorded_date' => '1985', 'release_date' => '06-13-1984',
             'number_of_tracks' => 10, 'label' => 'Atlantic', 'producer' => 'Beau Hill', 'genre' => 'heavy metal'],
            ['id' => 7, 'band_id' => 3, 'name' => 'Van Halen II', 'recorded_date' => '1979', 'release_date' => '03-23-1979',
             'number_of_tracks' => 10, 'label' => 'Warner Bros.', 'producer' => 'Ted Templeman', 'genre' => 'hard rock']

        ];

        DB::table('albums')->insert($albums);

    }
}
