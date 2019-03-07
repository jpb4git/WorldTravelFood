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
        DB::table('products')->insert([
            'title' => 'produit1',
            'price' => '15',
            'image' =>'https://cdn-a.william-reed.com/var/wrbm_gb_food_pharma/storage/images/publications/food-beverage-nutrition/foodnavigator.com/news/policy/uk-launches-consultation-on-restricting-junk-food-promotions/9023808-3-eng-GB/UK-launches-consultation-on-restricting-junk-food-promotions_wrbm_large.jpg',
        ]);

        DB::table('products')->insert([
            'title' => 'produit2',
            'price' => '5',
            'image' =>'https://static.independent.co.uk/s3fs-public/thumbnails/image/2016/12/19/18/sush0istock-gkrphoto.jpg',
        ]);

        DB::table('products')->insert([
            'title' => 'produit3',
            'price' => '10',
            'image' =>'https://peopledotcom.files.wordpress.com/2018/11/tout-122.jpg',
        ]);






    }




}
