<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(AddressTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(OrderProductTableSeeder::class);
        $this->call(DiscountTableSeeder::class);

    }
}
