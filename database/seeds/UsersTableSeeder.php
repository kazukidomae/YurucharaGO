<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'TestUser',
                'email' => 'testuser@gmail.com',
                'password' => '$2y$10$Jatj9X0Ctzf.jVooIRQdSepCYqRoOXQzH8wD7QI2Wpi9RTCkjSBeG',
                'remember_token' => null,
                'created_at' => '2018-06-11',
                'updated_at' => '2018-06-11',

            ],
        ]);
    }
}
