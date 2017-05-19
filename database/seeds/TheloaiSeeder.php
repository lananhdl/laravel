<?php

use Illuminate\Database\Seeder;

class TheloaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('theloai')->insert(
					[
						[
							'tentheloai' => 'The loai 1',
							
						],
						[
							'tentheloai' => 'The loai 2',
						],
						[
							'tentheloai' => 'The loai 3',
						],
						[
							'tentheloai' => 'The loai 4',
						],
						[
							'tentheloai' => 'The loai 5',
						],
					]
				); 
    }
}
