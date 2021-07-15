<?php

use Illuminate\Database\Seeder;
use App\Trip; //collegato al model

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrTrips = config('trips');
        dd($arrTrips); // adesso come faccio a fare debug ?

        
        foreach ($arrTrips as $item) {
            
            $newTrip = new Trip();
            
            $newTrip->nome_struttura = $item["nome_struttura"];
            $newTrip->citta = $item["citta"];
            $newTrip->stato = $item["stato"];
            $newTrip->cap = $item["cap"];
            $newTrip->via = $item["via"];
            $newTrip->voto = $item["voto"];
            $newTrip->descrizione = $item["descrizione"];
            $newTrip->recensione = $item["recensione"];
            $newTrip->partenza = $item["partenza"];
            $newTrip->destinazione = $item["destinazione"];
            $newTrip->cancellazione_gratis = $item["cancellazione_gratis"];
            $newTrip->posti_disponibili = $item["posti_disponibili"];
            $newTrip->sconto = $item["sconto"];
            $newTrip->andata = $item["andata"];
            $newTrip->ritorno = $item["ritorno"];

            $newTrip->save();

        }

    }
}
