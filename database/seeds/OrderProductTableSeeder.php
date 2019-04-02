<?php


use App\Order_product;
use Illuminate\Database\Seeder;

class OrderProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 7; $i++) {

            $orderProduct= new Order_product;
            $orderProduct->quantity =$i;
            $orderProduct->price = 15.9;
            $orderProduct->order_id = 1;
            $orderProduct->product_id = 1;
            $orderProduct->save();
        }
    }
}
