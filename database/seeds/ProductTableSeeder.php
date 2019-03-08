<?php

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

        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'label' => 'Produit ' . $i,
                'description' => 'Déscription produit' . $i,
                'poids' => 0.50 + $i,
                'stock' => 25 + $i,
                'urlimage' => 'new-1.jpg',
                'price' => 52.0 + $i
            ]);

        }

    }
}
