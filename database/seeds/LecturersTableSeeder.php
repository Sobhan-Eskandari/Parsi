<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Morilog\Jalali\Facades\jDate;

class LecturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lecturers')->truncate();

        $faker = Faker::create("fa_IR");
        $lecturers = [];
        $time = jDate::forge('now')->format('datetime', true);

        foreach (range(1, 5) as $index){
            $lecturers[] = [
                'name' => $faker->name,
                'profession' => $faker->company,
                'desc' => $faker->realText(300),
                'created_at' => $time,
                'updated_at' => $time,
            ];
        }

        DB::table('lecturers')->insert($lecturers);
    }
}
