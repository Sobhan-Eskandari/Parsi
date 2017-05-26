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
        $faker = Faker::create('fa_IR');

        foreach (range(1,50) as $index) {
            User::create([
                'name'=>$faker->name,
                'email'=>$faker->unique()->email,
                'password'=>bcrypt('1234567890'),
            ]);
        }
    }
}
