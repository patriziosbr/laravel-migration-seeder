<?php

use Illuminate\Database\Seeder;
use App\Trips;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrTrips = config('trip');
        dd($arrTrips);
    }
}
