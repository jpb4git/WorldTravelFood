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
        /* for ($i = 1; $i < 8; $i++){
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
         }*/

            $address = new Address;
            $address->street = '15,rue Victor Hugo';
            $address->zip_code = '26000';
            $address->complement = '';
            $address->city = 'Valence';
            $address->country = 'France';
            $address->last_name = 'Dupont';
            $address->first_name = 'Bernard';
            $address->wording = 'domicile';
            $address->user_id = 1;
            $address->save();

            $address = new Address;
            $address->street = '99, rue du saumon';
            $address->zip_code = '69000';
            $address->complement = '';
            $address->city = 'Lyon';
            $address->country = 'France';
            $address->last_name = 'Ubuntu';
            $address->first_name = 'Peter';
            $address->wording = 'travail';
            $address->user_id = 2;
            $address->save();

            $address = new Address;
            $address->street = '55, rue du caillou';
            $address->zip_code = '75000';
            $address->complement = 'résidence Truc';
            $address->city = 'Paris';
            $address->country = 'France';
            $address->last_name = 'Banane';
            $address->first_name = 'Hubert';
            $address->wording = 'domicile';
            $address->user_id = 3;
            $address->save();

    }
}
