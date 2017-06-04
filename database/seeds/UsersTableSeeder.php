<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Morilog\Jalali\Facades\jDate;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $faker = Faker::create("fa_IR");
        $users = [];
        $time = jDate::forge('now')->format('datetime', true);

        foreach (range(1, 10) as $index){
            $users[] = [
                'name'=>$faker->name,
                'email'=>$faker->unique()->email,
                'password'=>bcrypt('1234567890'),
                'created_at' => $time,
                'updated_at' => $time,
            ];
        }

        DB::table('users')->insert($users);
    }
}
