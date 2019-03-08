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


        for ($i=1; $i<7; $i++)
        {


            $product = new product;
            $product->name = 'mon produit '.$i;
            $product->description = 'blabla'.$i;
            $product->price = '10'. $i;
            $product->image = 'new-1.jpeg';
            $product->weight = 1.50;
            $product->stock = 100;
            $product->category_id = $i;

            $product->save();

        }

    }
}
