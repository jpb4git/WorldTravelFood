<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Bissap',
           'description' =>'...',
            'price' => 5.45 ,
            'image' => 'afr_bissap.jpg',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 1 ,


        ]);

        DB::table('products')->insert([
            'name' => 'Nik Naks',
            'description' =>'...',
            'price' => 2.23 ,
            'image' => 'afr_Naks-2.jpg',
            'weight' => 0.500 ,
            'stock' => 50,

            'category_id' => 3 ,
        ]);

        DB::table('products')->insert([
            'name' => 'TomTom',
            'description' =>'...',
            'price' => 5.00 ,
            'image' => 'afr_tomtom.jpg',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 2 ,
        ]);

        DB::table('products')->insert([
            'name' => 'Vitamalt',
            'description' =>'...',
            'price' => 3.99 ,
            'image' => 'afr_vitamalt.jpg',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 1 ,
        ]);

        DB::table('products')->insert([
            'name' => 'Dr Pepper',
            'description' =>'...',
            'price' => 2.50,
            'image' => 'ame_drpepper.jpeg',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 1 ,
        ]);

        DB::table('products')->insert([
            'name' => 'Bubbaloo',
            'description' =>'...',
            'price' => 1.50 ,
            'image' => 'ame_bubbaloo.jpg',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 2 ,
        ]);

        DB::table('products')->insert([
            'name' => 'Gansito',
            'description' =>'...',
            'price' => 5.99 ,
            'image' => 'ame_gansito.jpg',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 2 ,
        ]);

        DB::table('products')->insert([
            'name' => 'Inca Kola',
            'description' =>'...',
            'price' => 3.99 ,
            'image' => 'ame_incacola.jpeg',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 1 ,
        ]);

        DB::table('products')->insert([
            'name' => 'Chocolate Fish',
            'description' =>'...',
            'price' => 2.45 ,
            'image' => 'oce_chocolatefish.png',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 2 ,
        ]);

        DB::table('products')->insert([
            'name' => 'Choco Boy',
            'description' =>'...',
            'price' => 3.99 ,
            'image' => 'as_Choco-Boy.jpg',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 2 ,
        ]);

        DB::table('products')->insert([
            'name' => 'Ramune',
            'description' =>'...',
            'price' => 1.50,
            'image' => 'asi_ramune.jpg',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 1 ,
        ]);

        DB::table('products')->insert([
            'name' => 'Soju',
            'description' =>'...',
            'price' => 7.00 ,
            'image' => 'asi_soju.jpg',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 1 ,
        ]);

        DB::table('products')->insert([
            'name' => 'Pepero',
            'description' =>'...',
            'price' => 5.45 ,
            'image' => 'asi_White-Cookie-Pepero.png',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 2 ,
        ]);

        DB::table('products')->insert([
            'name' => 'Don Simon',
            'description' =>'...',
            'price' => 8.45 ,
            'image' => 'eur_donsimon.jpg',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 1 ,
        ]);

        DB::table('products')->insert([
            'name' => 'Perrier',
            'description' =>'...',
            'price' => 2.45 ,
            'image' => 'eur_perrier.jpg',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 1 ,
        ]);

        DB::table('products')->insert([
            'name' => 'Smurf',
            'description' =>'...',
            'price' => 1.45 ,
            'image' => 'eur_smurf.jpg',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 2 ,
        ]);

        DB::table('products')->insert([
            'name' => 'Tortica',
            'description' =>'...',
            'price' => 2.45 ,
            'image' => 'eur_tortica.jpg',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 3 ,
        ]);

        DB::table('products')->insert([
            'name' => 'Bundaberg',
            'description' =>'...',
            'price' => 2.45 ,
            'image' => 'ocea_bundaberg.jpg',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 1 ,
        ]);

        DB::table('products')->insert([
            'name' => 'Solo',
            'description' =>'...',
            'price' => 1.45 ,
            'image' => 'ocea_soda.jpg',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 1 ,
        ]);

        DB::table('products')->insert([
            'name' => 'Wizz Fizz',
            'description' =>'...',
            'price' => 1.45 ,
            'image' => 'oce_wizzfizz.jpg',
            'weight' => 0.500 ,
            'stock' => 50,
            'category_id' => 2 ,
        ]);


    }
}
