<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Morilog\Jalali\Facades\jDate;

class CrewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crews')->truncate();
        $faker = Faker::create("fa_IR");
        $crews = [];
        $time = jDate::forge('now')->format('datetime', true);

        foreach (range(1, 10) as $index){
            $crews[] = [
                'name' => $faker->firstName,
                'created_at' => $time,
                'updated_at' => $time,
            ];
        }

        DB::table('crews')->insert($crews);
    }
}
