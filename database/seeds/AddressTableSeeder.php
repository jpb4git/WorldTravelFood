<?php

use Illuminate\Database\Seeder;
use App\Address;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 8; $i++){
            $address = new Address;
            $address->street = '15,rue Victor Hugo' . $i;
            $address->zip_code = '26000' . $i;
            $address->complement = '';
            $address->city = 'valence' . $i;
            $address->country = 'France' . $i;
            $address->last_name = 'Dupont' . $i;
            $address->first_name = 'Bernard' . $i;
            $address->wording = 'domicile' . $i;
            $address->user_id = $i;
            $address->save();
        }





    }
}
