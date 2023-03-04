<?php

namespace App\service;

use App\Models\Esercizio;

class EserciziService
{
    public function lista()
    {
        return Esercizio::paginate(10);
    }
}
