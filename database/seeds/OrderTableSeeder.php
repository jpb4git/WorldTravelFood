<?php


use App\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 7; $i++) {

            $order = new Order;
            $order->number = mt_rand(0, 9999999999);
            $order->date = \Carbon\Carbon::now();
            $order->price = mt_rand(1, 999.99);
            $order->user_id = 1;
            $order->address_shipping_id = 1;
            $order->address_delivery_id = 1;
            $order->save();
        }
    }
}
