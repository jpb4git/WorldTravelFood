<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=1; $i<7; $i++)
        {

            $category = new category;
            $category->name = 'Boissons'.$i;
            $category->save();

        }


    }
}
