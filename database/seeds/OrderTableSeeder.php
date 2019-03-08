<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new order;
        $product->name = 'mon produit '.$i;
        $product->description = 'blabla'.$i;
        $product->price = '10'. $i;


        DB::table("orders")->insert([


            "number" => "1234567890",
            "date" => \Carbon\Carbon::now(),
            "user_id" => 1,
            "address_shipping" => 1,
            "address_delivery" => 1

        ]);

        DB::table("orders")->insert([

            "number" => "9876543210",
            "date" => \Carbon\Carbon::now(),
            "user_id" => 2,
            "address_shipping" => 2,
            "address_delivery" => 2

        ]);

        DB::table("orders")->insert([

            "number" => "5432109876",
            "date" => \Carbon\Carbon::now(),
            "user_id" => 3,
            "address_shipping" => 3,
            "address_delivery" => 3

        ]);

    }
}