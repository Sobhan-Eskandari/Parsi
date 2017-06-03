<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CrewsTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(SponsorsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(LecturersTableSeeder::class);
    }
}
