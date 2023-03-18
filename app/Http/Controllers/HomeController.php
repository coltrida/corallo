<?php

namespace App\Http\Controllers;

use App\Mail\ScadenzaSchedaAllenamento;
use App\Models\Schedallenamento;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function controllo()
    {
        $oggiPiuDieciGiorni = Carbon::now()->addDays(10);
        $schedeAllenamento = Schedallenamento::with('user')->get();
        foreach ($schedeAllenamento as $scheda){
            if ($scheda->scadenza < $oggiPiuDieciGiorni){
                $scheda->inScadenza = true;
                $scheda->save();
                \Mail::to('coltrida@gmail.com')->send(new ScadenzaSchedaAllenamento($scheda));
            }
        }
    }
}
