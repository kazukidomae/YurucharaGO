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
                'CardDesignPath' => 'images/wallpaper.png',
            ],
            [
                'AttributeName' => 'Food',
                'AttributeIconPath' => '',
                'CardDesignPath' => 'images/wallpaper.png',
            ],
            [
                'AttributeName' => 'Building',
                'AttributeIconPath' => '',
                'CardDesignPath' => 'images/wallpaper.png',
            ],
            [
                'AttributeName' => 'Culture',
                'AttributeIconPath' => '',
                'CardDesignPath' => 'images/wallpaper.png',
            ],
        ]);
    }
}
