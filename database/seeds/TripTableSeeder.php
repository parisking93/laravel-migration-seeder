<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripTableSeeder extends Seeder
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
            $newTrip = new Trip();

            $newTrip->deperture_city = $arrayCity[rand(0,6)];
            $newTrip->arrival_city = $arrayCity[rand(0,6)];
            $newTrip->deperture_time = '2021/12/21';
            $newTrip->arrival_time = '2021/12/28';
            $newTrip->name_owner = $arrayName[rand(0,6)];
            $newTrip->surname_owner = $arraySurname[rand(0,6)];
            $newTrip->price = rand(1,10000);
            $newTrip->hotel_name = $arrayCity[rand(0,6)];
            $newTrip->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, doloribus!';
            
            $newTrip->save();
        }
    }
}
