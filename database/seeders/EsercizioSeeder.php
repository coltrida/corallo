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
                'linkFoto' => 'images/2.jpg',
                'linkVideo' => 'video/2.mp4',
                'descrizione' => 'movimento lento, portare il bilanciere al petto e spingere, piedi piantati a terra e inarcare',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'spinte manubri Arnold',
                'linkFoto' => 'images/12.jpg',
                'linkVideo' => 'video/12.mp4',
                'muscoli' => 'spalle - tricipiti',
                'descrizione' => 'movimento lento, portare i manubri in basso e spingere dafads fadsf azdsf azsdf azsdfaszd',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'alzate laterali',
                'linkFoto' => 'images/22.jpg',
                'linkVideo' => null,
                'muscoli' => 'spalle - trapezio',
                'descrizione' => 'asfadsfdsf adsfads fasdf asdfasd fadsfads fadsf adsf asdf adsfa fad fadsf adf adfa fadszf azsdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'leg curl',
                'linkFoto' => 'images/32.jpg',
                'linkVideo' => null,
                'muscoli' => 'quadricipiti',
                'descrizione' => 'sadfadsfasdf dsf asdfafd asdf adsf azdfads fasdf azsdf dfasd fazdsf azsdf azsdfas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'squat',
                'linkFoto' => 'images/42.jpg',
                'linkVideo' => null,
                'muscoli' => 'quadricipiti - glutei',
                'descrizione' => 'sadfasdfa adf adsf adzsfasdfsasdfa dfa zdsfadsz fadszfas dzfadszfaszdf asz',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'lat machine',
                'linkFoto' => 'images/52.jpg',
                'linkVideo' => 'video/52.mp4',
                'muscoli' => 'dorsali',
                'descrizione' => 'dasfasdfa dsf adsf adsf adsf asdf asdfadsfadszf adsf zdsf zdsf sadzf sdzfa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'tricipiti machine',
                'linkFoto' => 'images/62.jpg',
                'linkVideo' => null,
                'muscoli' => 'tricipiti',
                'descrizione' => 'sdfasdf adsf adsfa fads asdf dszf zsdf zsd adsfzasdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'affondi',
                'linkFoto' => 'images/72.jpg',
                'linkVideo' => null,
                'muscoli' => 'quadricipiti - glutei',
                'descrizione' => 'asdfasd adsf adsa dfs adszf zdfasdz adsf adszf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nome' => 'crunch',
                'linkFoto' => 'images/82.jpg',
                'linkVideo' => null,
                'muscoli' => 'addominali',
                'descrizione' => 'sdfaasdf ads adsf asdzf aszdfasdfa df aszdfzsdfzdsf zdf szdsf zdsf zdfdsfdsfasdz',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
