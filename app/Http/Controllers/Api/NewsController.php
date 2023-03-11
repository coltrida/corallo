<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\service\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function ultima(NewsService $newsService)
    {
        return $newsService->ultimaNews();
    }
}
