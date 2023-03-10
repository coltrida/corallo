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
                'muscoli' => 'petto - tricipiti',
                'linkFoto' => 'images/1.jpg',
                'descrizione' => 'movimento lento, portare il bilanciere al petto e spingere, piedi piantati a terra e inarcare',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'spinte manubri',
                'linkFoto' => 'images/2.jpg',
                'muscoli' => 'spalle - tricipiti',
                'descrizione' => 'movimento lento, portare i manubri in basso e spingere dafads fadsf azdsf azsdf azsdfaszd',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'alzate laterali',
                'linkFoto' => 'images/3.jpg',
                'muscoli' => 'spalle - trapezio',
                'descrizione' => 'asfadsfdsf adsfads fasdf asdfasd fadsfads fadsf adsf asdf adsfa fad fadsf adf adfa fadszf azsdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'leg curl',
                'linkFoto' => 'images/4.jpg',
                'muscoli' => 'quadricipiti',
                'descrizione' => 'sadfadsfasdf dsf asdfafd asdf adsf azdfads fasdf azsdf dfasd fazdsf azsdf azsdfas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'squat',
                'linkFoto' => 'images/5.jpg',
                'muscoli' => 'quadricipiti - glutei',
                'descrizione' => 'sadfasdfa adf adsf adzsfasdfsasdfa dfa zdsfadsz fadszfas dzfadszfaszdf asz',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'lat machine',
                'linkFoto' => 'images/6.jpg',
                'muscoli' => 'dorsali',
                'descrizione' => 'dasfasdfa dsf adsf adsf adsf asdf asdfadsfadszf adsf zdsf zdsf sadzf sdzfa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'tricipiti machine',
                'linkFoto' => 'images/7.jpg',
                'muscoli' => 'tricipiti',
                'descrizione' => 'sdfasdf adsf adsfa fads asdf dszf zsdf zsd adsfzasdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'affondi',
                'linkFoto' => 'images/8.jpg',
                'muscoli' => 'quadricipiti - glutei',
                'descrizione' => 'asdfasd adsf adsa dfs adszf zdfasdz adsf adszf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'crunch',
                'linkFoto' => 'images/9.jpg',
                'muscoli' => 'addominali',
                'descrizione' => 'sdfaasdf ads adsf asdzf aszdfasdfa df aszdfzsdfzdsf zdf szdsf zdsf zdfdsfdsfasdz',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
