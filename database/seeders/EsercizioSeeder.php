<?php

namespace Database\Seeders;

use App\Models\Esercizio;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EsercizioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Esercizio::insert([
            [
                'nome' => 'bench press',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'spinte manubri',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'alzate laterali',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'leg curl',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'squat',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'spinte deltoidi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'tricipiti machine',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'affondi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'addominali',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
