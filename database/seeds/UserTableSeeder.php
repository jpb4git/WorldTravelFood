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

        $user = new User;
        $user->name = 'aaa';
        $user->email = 'aaa@aaa.fr';
        $user->password = Hash::make('aaa');
        $user->save();

        $user = new User;
        $user->name = Str::random(10);
        $user->email = Str::random(10) . '@domain.com';
        $user->password = Hash::make('motdepasse');
        $user->save();

        $user = new User;
        $user->name = 'bbb';
        $user->email = 'bbb@bbb.fr';
        $user->password = Hash::make('bbb');
        $user->save();


    }

}
