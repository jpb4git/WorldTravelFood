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
            $orderProduct->price = mt_rand(1,8);
            $orderProduct->order_id = mt_rand(1,6);
            $orderProduct->product_id = mt_rand(1,20);
            $orderProduct->save();
        }
    }
}
