<?php

namespace Database\Seeders;

use App\Models\Allenamento;
use App\Models\Esercizio;
use App\Models\Giornoallenamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllenamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $giornoAllenamento = Giornoallenamento::get();
            foreach ($giornoAllenamento as $giorno) {
                for ($i=0; $i<3; $i++){
                    Allenamento::create([
                        'giornoallenamento_id' => $giorno->id,
                        'esercizio_id' => Esercizio::get()->random()->id,
                        'ripetizioni' => \Arr::random([8, 6]),
                        'serie' => \Arr::random([3, 4]),
                        'peso' => \Arr::random([30, 40, 10, 20, 23, 56]),
                        'duration' => \Arr::random(['01:00:00', '01:30:00']) ,
                        'rest' => \Arr::random(['02:00:00', '03:30:00']),
                    ]);
                }
            }
    }
}
