<?php

namespace App\service;

use App\Events\NuovaNewsEvent;
use App\Models\News;

class NewsService
{
    public function lista()
    {
        return News::latest()->paginate(10);
    }

    public function ultimaNews()
    {
        return News::latest()->first();
    }

    public function news($idNews)
    {
        return News::find($idNews);
    }

    public function salva($request)
    {
        $news = News::create($request->except('file'));
        if ($request->hasFile('file')){
            $this->salvaFoto($news, $request);
        }
        $news->save();

        event(new NuovaNewsEvent($news));
    }

    public function modifica($request)
    {
        $news = News::find($request->idNews);
        $news->update($request->except(['file', 'idNews']));
        if ($request->hasFile('file')){
            $this->salvaFoto($news, $request);
        }
    }

    private function salvaFoto($news, $request): void
    {
        $file = $request->file('file');
        $filename = $news->id . '.' . $file->extension();
        $filenameWithPath = $file->storeAs('news', $filename);
        $news->linkFoto = $filenameWithPath;
    }
}
