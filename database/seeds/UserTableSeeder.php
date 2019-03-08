<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 8; $i++) {
            $user = new User;
            $user->last_name = Str::random(10);
            $user->first_name = Str::random(10);
            $user->email = Str::random(10) . '@domain.com';
            $user->password = Hash::make('motdepasse');
            $user->save();
        }

    }

}
