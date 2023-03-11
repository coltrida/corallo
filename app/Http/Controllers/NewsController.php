<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\service\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(NewsService $newsService)
    {
        $news = $newsService->lista();
        return view('news.index', compact('news'));
    }

    public function inserisciModifica(NewsService $newsService, $idNews = null)
    {
        $news = $idNews ? $newsService->news($idNews) : new News();
        return view('news.inserisci', compact('news'));
    }

    public function salva(Request $request, NewsService $newsService)
    {
        $newsService->salva($request);
        return redirect()->route('news');
    }

    public function modifica(Request $request, NewsService $newsService)
    {
        $newsService->modifica($request);
        return redirect()->route('news');
    }
}
