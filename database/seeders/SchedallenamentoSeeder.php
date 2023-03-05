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
        $clienti = User::clienti()->get();
        foreach ($clienti as $cliente){
            $nrSchede = \Arr::random([1,2]);

            for ($i=0; $i<$nrSchede; $i++){
                Schedallenamento::create([
                    'user_id' => $cliente->id
                ]);
            }
        }

        /*foreach ($clienti as $cliente){
            $scheda = Schedallenamento::make();
            $cliente->schedallenamento()->save($scheda);
        }*/
    }
}
