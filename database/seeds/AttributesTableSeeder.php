<?php

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributes')->insert([
            [
                'AttributeName' => 'Nature',
                'AttributeIconPath' => '',
            ],
            [
                'AttributeName' => 'Castle',
                'AttributeIconPath' => '',
            ],
            [
                'AttributeName' => 'Station',
                'AttributeIconPath' => '',
            ],
            [
                'AttributeName' => 'Food',
                'AttributeIconPath' => '',
            ],
        ]);
    }
}
