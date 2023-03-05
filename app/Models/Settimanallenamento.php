<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settimanallenamento extends Model
{
    use HasFactory;

    protected $table = 'settimanallenamentos';
    protected $guarded = [];

    public function schedallenamento()
    {
        return $this->belongsTo(Schedallenamento::class, 'schedallenamento_id', 'id');
    }

    public function giorniallenamento()
    {
        return $this->hasMany(Giornoallenamento::class, 'settimanallenamento_id', 'id');
    }
}
