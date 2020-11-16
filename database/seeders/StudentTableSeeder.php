<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class StudentTableSeeder
 *
 * @package Database\Seeders
 */
class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'firstname'    => 'Milos',
            'lastname'     => 'Markovic',
            'image'        => 'slika1.jpg',
            'height'       => 120,
            'classroom_id' => 1,
        ]);

        DB::table('students')->insert([
            'firstname'    => 'Marko',
            'lastname'     => 'Milosevic',
            'image'        => 'slika2.jpg',
            'height'       => 112,
            'classroom_id' => 1,
        ]);

        DB::table('students')->insert([
            'firstname'    => 'Milos',
            'lastname'     => 'Markovic',
            'image'        => 'slika4.jpg',
            'height'       => 120,
            'classroom_id' => 1,
        ]);

        DB::table('students')->insert([
            'firstname'    => 'Jovan',
            'lastname'     => 'Djuric',
            'image'        => 'slika3.jpg',
            'height'       => 180,
            'classroom_id' => 1,
        ]);

        DB::table('students')->insert([
            'firstname'    => 'Coa',
            'lastname'     => 'Stojanovic',
            'image'        => 'slika5.jpg',
            'height'       => 150,
            'classroom_id' => 1,
        ]);

        DB::table('students')->insert([
            'firstname'    => 'Milica',
            'lastname'     => 'Tesic',
            'image'        => 'slika2.jpg',
            'height'       => 142,
            'classroom_id' => 1,
        ]);

        DB::table('students')->insert([
            'firstname'    => 'Janko',
            'lastname'     => 'Jovanovic',
            'image'        => 'slika3.jpg',
            'height'       => 146,
            'classroom_id' => 1,
        ]);

        DB::table('students')->insert([
            'firstname'    => 'Milan',
            'lastname'     => 'Obranovic',
            'image'        => 'slika3.jpg',
            'height'       => 160,
            'classroom_id' => 1,
        ]);
    }
}
