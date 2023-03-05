<?php

namespace Database\Seeders;

use App\Models\Schedallenamento;
use App\Models\Settimanallenamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettimanallenamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedeAllenamento = Schedallenamento::get();
        foreach ($schedeAllenamento as $scheda){
            for($giorno = 1; $giorno < 5; $giorno++){
                    Settimanallenamento::create([
                        'schedallenamento_id' => $scheda->id,
                        'numero' => $giorno
                    ]);
            }
        }
    }
}
