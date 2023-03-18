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
            foreach ($giornoAllenamento as $item) {
                    if ($item->giorno == 'lunedi'){
                        Allenamento::insert([
                            [
                                'giornoallenamento_id' => $item->id,
                                'esercizio_id' => Esercizio::get()[0]->id,
                                'ripetizioni' => 8,
                                'serie' => 4,
                                'duration' => \Arr::random(['01:00:00', '01:30:00']) ,
                                'rest' => \Arr::random(['02:00:00', '03:30:00']),
                            ],
                            [
                                'giornoallenamento_id' => $item->id,
                                'esercizio_id' => Esercizio::get()[1]->id,
                                'ripetizioni' => 10,
                                'serie' => 3,
                                'duration' => \Arr::random(['01:00:00', '01:30:00']) ,
                                'rest' => \Arr::random(['02:00:00', '03:30:00']),
                            ],
                            [
                                'giornoallenamento_id' => $item->id,
                                'esercizio_id' => Esercizio::get()[2]->id,
                                'ripetizioni' => 8,
                                'serie' => 3,
                                'duration' => \Arr::random(['01:00:00', '01:30:00']) ,
                                'rest' => \Arr::random(['02:00:00', '03:30:00']),
                            ],
                        ]);
                    } elseif ($item->giorno == 'mercoledi'){
                        Allenamento::insert([
                            [
                                'giornoallenamento_id' => $item->id,
                                'esercizio_id' => Esercizio::get()[3]->id,
                                'ripetizioni' => 8,
                                'serie' => 4,
                                'duration' => \Arr::random(['01:00:00', '01:30:00']) ,
                                'rest' => \Arr::random(['02:00:00', '03:30:00']),
                            ],
                            [
                                'giornoallenamento_id' => $item->id,
                                'esercizio_id' => Esercizio::get()[4]->id,
                                'ripetizioni' => 10,
                                'serie' => 3,
                                'duration' => \Arr::random(['01:00:00', '01:30:00']) ,
                                'rest' => \Arr::random(['02:00:00', '03:30:00']),
                            ],
                            [
                                'giornoallenamento_id' => $item->id,
                                'esercizio_id' => Esercizio::get()[5]->id,
                                'ripetizioni' => 8,
                                'serie' => 3,
                                'duration' => \Arr::random(['01:00:00', '01:30:00']) ,
                                'rest' => \Arr::random(['02:00:00', '03:30:00']),
                            ],
                        ]);
                    } elseif ($item->giorno == 'venerdi'){
                        Allenamento::insert([
                            [
                                'giornoallenamento_id' => $item->id,
                                'esercizio_id' => Esercizio::get()[6]->id,
                                'ripetizioni' => 8,
                                'serie' => 4,
                                'duration' => \Arr::random(['01:00:00', '01:30:00']) ,
                                'rest' => \Arr::random(['02:00:00', '03:30:00']),
                            ],
                            [
                                'giornoallenamento_id' => $item->id,
                                'esercizio_id' => Esercizio::get()[7]->id,
                                'ripetizioni' => 10,
                                'serie' => 3,
                                'duration' => \Arr::random(['01:00:00', '01:30:00']) ,
                                'rest' => \Arr::random(['02:00:00', '03:30:00']),
                            ],
                            [
                                'giornoallenamento_id' => $item->id,
                                'esercizio_id' => Esercizio::get()[8]->id,
                                'ripetizioni' => 8,
                                'serie' => 3,
                                'duration' => \Arr::random(['01:00:00', '01:30:00']) ,
                                'rest' => \Arr::random(['02:00:00', '03:30:00']),
                            ],
                        ]);
                    }

                }

    }
}
