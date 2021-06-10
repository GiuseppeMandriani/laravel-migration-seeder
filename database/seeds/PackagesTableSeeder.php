<?php

use Illuminate\Database\Seeder;

use App\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 30; $i++){
            // Creazione istanza
            $newPackage = new Package();

            // Popolazione colonne 

            $newPackage->city = 'Foggia';
            $newPackage->state = 'Italia';
            $newPackage->n_person = rand(1,10);
            $newPackage->period = rand(2,21);
            $newPackage->type = 'Relax';
            $newPackage->description = 'Lorem ipsum relax soggiorno per le persone che vuoi quando vuoi perchè a Foggia mangi tanto.';
            $newPackage->price = rand(90, 5000) ;

            


            // Salva records

            $newPackage->save();
        }
    }
}
