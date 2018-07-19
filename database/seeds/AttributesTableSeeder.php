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
                'CardDesignPath' => 'NatureCard.png',
            ],
            [
                'AttributeName' => 'Food',
                'AttributeIconPath' => '',
                'CardDesignPath' => 'FoodCard.png',
            ],
            [
                'AttributeName' => 'Building',
                'AttributeIconPath' => '',
                'CardDesignPath' => 'BuildingCard.png',
            ],
            [
                'AttributeName' => 'Culture',
                'AttributeIconPath' => '',
                'CardDesignPath' => 'CultureCard.png',
            ],
            [
                'AttributeName' => 'Rare',
                'AttributeIconPath' => '',
                'CardDesignPath' => 'RareCard.png',
            ],
        ]);
    }
}
