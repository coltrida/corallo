<?php

namespace Database\Seeders;

use App\Models\Schedallenamento;
use App\Models\User;
use Carbon\Carbon;
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
            'user_id' => User::where('role', 'u')->first()->id,
            'scadenza' => Carbon::now()->addMonths(1)->format('Y-m-d'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
