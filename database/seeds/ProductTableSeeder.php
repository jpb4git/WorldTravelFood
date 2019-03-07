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

            "title" => "Mon produit 1",
            "price" => 8,
            "imaggie" => "Maphoto1.jpg",
            "provenance" => "Chine",
            "categorie" => "Boissons",
        ]);

        DB::table("products")->insert([

            "title" => "Mon produit 2",
            "price" => 9,
            "image" => "Maphoto2.jpg",
            "provenance" => "Amérique",
            "categorie" => "Boissons",
        ]);

        DB::table("products")->insert([

            "title" => "Mon produit 3",
            "price" => 12,
            "image" => "Maphoto3.jpg",
            "provenance" => "Mexique",
            "categorie" => "Boissons",
        ]);

        DB::table("products")->insert([

            "title" => "Mon produit 4",
            "price" => 18,
            "image" => "Maphoto4.jpg",
            "provenance" => "Chine",
            "categorie" => "Boissons",
        ]);


    }
}
