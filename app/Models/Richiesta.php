<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Richiesta extends Model
{
    use HasFactory;

    protected $table = 'richiestas';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
