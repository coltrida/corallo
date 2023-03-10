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
        for($giorno = 1; $giorno < 5; $giorno++){
            Settimanallenamento::create([
                'schedallenamento_id' => 1,
                'numero' => $giorno
            ]);
        }
    }
}
