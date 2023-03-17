<?php

namespace App\service;

use App\Events\NuovoEsercizioEvent;
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
        $esercizio = Esercizio::create($request->except(['file', 'videoFile']));

        if ($request->hasFile('file')){
            $this->salvaFoto($esercizio, $request);
        }

        if ($request->hasFile('videoFile')){
            $this->salvaVideo($esercizio, $request);
        }

        event(new NuovoEsercizioEvent('esercizio Salvato'));
        return $esercizio->save();
    }

    public function elimina($idEsercizio)
    {
        if (\Storage::disk('public')->exists("images/$idEsercizio.jpg")){
            \Storage::disk('public')->delete("images/$idEsercizio.jpg");
        }
        Esercizio::find($idEsercizio)->delete();
        event(new NuovoEsercizioEvent('esercizio Eliminato'));
    }

    public function dettagli($idEsercizio)
    {
        return Esercizio::find($idEsercizio);
    }

    private function salvaFoto($esercizio, $request): void
    {
        $file = $request->file('file');
        $filename = $esercizio->id . '.' . $file->extension();
        $filenameWithPath = $file->storeAs('images', $filename);
        $esercizio->linkFoto = $filenameWithPath;
    }

    private function salvaVideo($esercizio, $request): void
    {
        $file = $request->file('videoFile');
        $filename = $esercizio->id . '.' . $file->extension();
        $filenameWithPath = $file->storeAs('video', $filename);
        $esercizio->linkVideo = $filenameWithPath;
    }
}
