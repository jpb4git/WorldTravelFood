<?php

use App\Discount;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DiscountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 8; $i++) {
            $discount = new Discount;
            $discount->name = Str::random(10);
            $discount->start = \Carbon\Carbon::now();
            $discount->end = \Carbon\Carbon::now();
            $discount->new_price =0;
            $discount->percent = 20;
            $discount -> product_id =1;
            $discount->save();
        }

    }
}
