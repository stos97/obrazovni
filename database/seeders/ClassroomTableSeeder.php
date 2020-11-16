<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class ClassroomTableSeeder
 *
 * @package Database\Seeders
 */
class ClassroomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classrooms')->insert([
            'name' => 'IV 1',
        ]);

        DB::table('classrooms')->insert([
            'name' => 'V 6',
        ]);

        DB::table('classrooms')->insert([
            'name' => 'VII 8',
        ]);
    }
}
