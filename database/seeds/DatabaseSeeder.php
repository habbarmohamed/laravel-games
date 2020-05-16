<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $nbrUsers = (int)$this->command->ask('How many of user you want to generate?', 5);
        factory(App\User::class, $nbrUsers)->create();
    }
}
