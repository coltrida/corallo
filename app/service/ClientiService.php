<?php

namespace App\service;

use App\Models\User;

class ClientiService
{
    public function lista()
    {
        return User::clienti()->latest()->paginate(10);
    }
}
