<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayCity = ['roma','firenze','milano','new york','london','madrid','san francesco'];
        $arrayName = ['cristian','francesco','edoardo','liasa','cristina','veronica','luca'];
        $arraySurname = ['bianche','rossi','gialli','verdi','blue','celesti','finiti'];


        for($i = 0; $i < 100; $i++){
            // creo un'istanza basata sul model Travel  
            $newTravel = new Travel();

            $newTravel->deperture_city = $arrayCity[rand(0,6)];
            $newTravel->arrival_city = $arrayCity[rand(0,6)];
            $newTravel->deperture_time = '2021/12/21';
            $newTravel->arrival_time = '2021/12/28';
            $newTravel->name_owner = $arrayName[rand(0,6)];
            $newTravel->surname_owner = $arraySurname[rand(0,6)];
            $newTravel->price = rand(1,10000);
            $newTravel->hotel_name = $arrayCity[rand(0,6)];
            $newTravel->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, doloribus!';
            
            $newTravel->save();
        }
    }
}
