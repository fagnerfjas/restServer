<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'email' => 'user1@email.com',
        ]);

        factory(\App\User::class)->create([
            'email' => 'user2@email.com',
        ]);
    }
}