<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allenamento extends Model
{
    use HasFactory;

    protected $table = 'allenamentos';
    protected $guarded = [];

    public function giornoallenamento()
    {
        return $this->belongsTo(Giornoallenamento::class, 'giornoallenamento_id', 'id');
    }

    public function esercizio()
    {
        return $this->belongsTo(Esercizio::class, 'esercizio_id', 'id');
    }
}
