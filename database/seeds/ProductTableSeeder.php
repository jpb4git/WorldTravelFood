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
        DB::table("products")->insert([
            "nom" => "produit1",
            "description"=>"idéal pour une soirée entre amis",
            "prix"=>"19.50",
            "stock"=>"59",
            "image"=>"car-1.jpg",

        ]);

        DB::table("products")->insert([
            "nom" => "produit2",
            "description"=>"description produit2",
            "prix"=>"12.50",
            "stock"=>"15",
            "image"=>"car-2.jpg",

        ]);

        DB::table("products")->insert([
            "nom" => "produit3",
            "description"=>"description produit3",
            "prix"=>"14.50",
            "stock"=>"56",
            "image"=>"car-3.jpg",

        ]);
    }
}
