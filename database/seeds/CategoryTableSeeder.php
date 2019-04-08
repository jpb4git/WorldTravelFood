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



        DB::table('categories')->insert([
                'name' => 'Boissons',
                ]);

        DB::table('categories')->insert([
            'name' => 'Bonbons',
        ]);

        DB::table('categories')->insert([
            'name' => 'Snacking',
        ]);

        DB::table('categories')->insert([
            'name' => 'Aperitif',
        ]);

        DB::table('categories')->insert([
            'name' => 'Vegan',
        ]);


    }
}
