<?php

namespace Database\Seeders;

use App\Models\Giornoallenamento;
use App\Models\Settimanallenamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GiornoallenamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settimanaAllenamento = Settimanallenamento::get();
        foreach ($settimanaAllenamento as $settimana){
                Giornoallenamento::insert([
                    [
                        'settimanallenamento_id' => $settimana->id,
                        'giorno' => 'lunedi',
                    ],
                    [
                        'settimanallenamento_id' => $settimana->id,
                        'giorno' => 'mercoledi',
                    ],
                    [
                        'settimanallenamento_id' => $settimana->id,
                        'giorno' => 'venerdi',
                    ],
                ]);
        }
    }
}
