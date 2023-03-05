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
                for ($i=0; $i<12; $i++){
                    Allenamento::create([
                        'giornoallenamento_id' => $giorno->id,
                        'esercizio_id' => Esercizio::get()->random()->id,
                        'ripetizioni' => \Arr::random([8, 6]),
                        'serie' => \Arr::random([3, 4]),
                        'peso' => \Arr::random([30, 40, 10, 20, 23, 56])
                    ]);
                }
            }
    }
}
