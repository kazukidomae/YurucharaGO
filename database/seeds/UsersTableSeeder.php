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
            [
                'name' => 'yuruchara',
                'email' => 'yuruchara@gmail.com',
                'password' => '$2y$10$mJ7K28/w3PBd8yhnrpgnxeFTTv4gwmz0/UZRLofzLeUdYP/faMptm',
                'remember_token' => null,
                'created_at' => '2018-07-25',
                'updated_at' => '2018-07-25',

            ],
            [
                'name' => 'yuruchara1',
                'email' => 'yuruchara1@gmail.com',
                'password' => '$2y$10$6t8zR2tXjeOz2PTGbJFBfOWh/DUo6OMkSAM5KkSQOGh7xIxGejeAG',
                'remember_token' => null,
                'created_at' => '2018-07-26',
                'updated_at' => '2018-07-26',

            ],
            [
                'name' => 'yuruchara2',
                'email' => 'yuruchara2@gmail.com',
                'password' => '$2y$10$swyKO6SfT4WxMen3Z9UuKe9WXNeAnaJb4NPV5dJiixjcXNz.qY9O6',
                'remember_token' => null,
                'created_at' => '2018-07-26',
                'updated_at' => '2018-07-26',

            ],
            [
                'name' => 'yuruchara3',
                'email' => 'yuruchara3@gmail.com',
                'password' => '$2y$10$v8BHWQ8gw4kQJX8M9PQzVuSc8SMsflBEk4ymJcYGck7LeiX2HU5dK',
                'remember_token' => null,
                'created_at' => '2018-07-26',
                'updated_at' => '2018-07-26',

            ],
        ]);
    }
}
