<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $products = [
            // Sports and Toys
            'Sports Shoe', 'Basketball', 'Cricket Bat', 'Football', 'Tennis Racket',
            'Badminton Shuttle', 'Chess Set', 'Rubik\'s Cube', 'Action Figure', 'Doll',
            // Gadgets and Electronics
            'Smartphone', 'Laptop', 'Headphones', 'Smartwatch', 'Tablet',
            'LED TV', 'Bluetooth Speaker', 'Gaming Console', 'VR Headset', 'Digital Camera',
            // Clothes
            'T-Shirt', 'Jeans', 'Jacket', 'Dress', 'Suit',
            'Sneakers', 'Cap', 'Socks', 'Scarf', 'Gloves',
            // Machines
            'Washing Machine', 'Refrigerator', 'Microwave Oven', 'Air Conditioner', 'Vacuum Cleaner',
            'Dishwasher', 'Coffee Maker', 'Blender', 'Juicer', 'Iron',
            // Watches and Accessories
            'Analog Watch', 'Digital Watch', 'Luxury Watch', 'Fitness Band', 'Smart Glasses',
            'Wallet', 'Handbag', 'Belt', 'Sunglasses', 'Cufflinks'
        ];

        $salespersons = ['Sam', 'Joes Daniel', 'Balaji', 'Leelavathi', 'Siva','Manoj'];

        foreach ($products as $product) {
            DB::table('sales')->insert([
                'product_name' => $product,
                'sales_amount' => $faker->numberBetween(10000, 90000),
                'sales_date' => $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
                'sales_person' => $faker->randomElement($salespersons),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
    }
}
