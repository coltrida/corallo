<?php

namespace App\service;

use App\Models\Esercizio;

class EserciziService
{
    public function lista()
    {
        return Esercizio::paginate(5);
    }

    public function listaNonPaginate()
    {
        return Esercizio::get();
    }

    public function salva($request)
    {
        $esercizio = new Esercizio();
        $esercizio->nome = $request->nome;
        $esercizio->save();

        if ($request->hasFile('file')){
            $this->salvaFoto($esercizio, $request);
        }

        return $esercizio->save();
    }

    public function elimina($idEsercizio)
    {
        if (\Storage::disk('public')->exists("images/$idEsercizio.jpg")){
            \Storage::disk('public')->delete("images/$idEsercizio.jpg");
        }
        Esercizio::find($idEsercizio)->delete();
    }

    private function salvaFoto($esercizio, $request): void
    {
        $file = $request->file('file');
        $filename = $esercizio->id . '.' . $file->extension();
        $filenameWithPath = $file->storeAs('images', $filename);
        $esercizio->linkFoto = $filenameWithPath;
    }
}
