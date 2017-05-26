<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Morilog\Jalali\Facades\jDate;

class SponsorsTableSeeder extends Seeder
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
        $sponsors = [];
        $time = jDate::forge('now')->format('datetime', true);

        foreach (range(1, 50) as $index){
            $sponsors[] = [
                'name' => $faker->name,
                'link' => $faker->unique()->domainName,
                'created_at' => $time,
                'updated_at' => $time,
            ];
        }

        DB::table('sponsors')->insert($sponsors);
    }
}
