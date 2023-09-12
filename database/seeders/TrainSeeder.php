<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new_train = new Train();

        $new_train->azienda = 'Italo';
        $new_train->stazione_di_partenza = 'Reggio Emilia';
        $new_train->stazione_di_arrivo = 'Napoli';
        $new_train->orario_di_partena = '2015-03-02 17:34';
        $new_train->orario_di_arrivo = '2015-03-02 19:34';
        $new_train->codice_treno = '555';
        $new_train->numero_di_carrozze = '9';
        $new_train->in_orario = '1';
        $new_train->cancellato = '0';

        $new_train->save();
    }
}
