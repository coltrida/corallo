<?php

namespace Database\Seeders;

use App\Models\Schedallenamento;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchedallenamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedallenamento::create([
            'user_id' => 2
        ]);
    }
}
