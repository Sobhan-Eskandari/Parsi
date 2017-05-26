<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Morilog\Jalali\Facades\jDate;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->truncate();

        $faker = Faker::create("fa_IR");
        $messages = [];
        $time = jDate::forge('now')->format('datetime', true);

        foreach (range(1, 50) as $index){
            $messages[] = [
                'name' => $faker->name,
                'email' => $faker->email,
                'message' => $faker->realText(300),
                'created_at' => $time,
                'updated_at' => $time,
            ];
        }

        DB::table('messages')->insert($messages);
    }
}
