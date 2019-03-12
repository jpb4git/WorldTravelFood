<?php


use App\Order;
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
        for ($i = 1; $i < 7; $i++) {

            $order = new Order;
            $order->number = "1234567890";
            $order->date = \Carbon\Carbon::now();
            $order->user_id = 1;
            $order->address_shipping_id = 1;
            $order->address_delivery_id = 1;
            $order->save();
        }
    }
}
