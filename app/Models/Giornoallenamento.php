<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Giornoallenamento
 *
 * @property int $id
 * @property int $scedallenamento_id
 * @property string $giorno
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Giornoallenamento newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Giornoallenamento newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Giornoallenamento query()
 * @method static \Illuminate\Database\Eloquent\Builder|Giornoallenamento whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Giornoallenamento whereGiorno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Giornoallenamento whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Giornoallenamento whereScedallenamentoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Giornoallenamento whereUpdatedAt($value)
 * @property int $esercizio_id
 * @property int $ripetizioni
 * @property int $serie
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Esercizio> $esercizi
 * @property-read int|null $esercizi_count
 * @property-read \App\Models\Schedallenamento|null $schedallenamento
 * @method static \Database\Factories\GiornoallenamentoFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Giornoallenamento whereEsercizioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Giornoallenamento whereRipetizioni($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Giornoallenamento whereSerie($value)
 * @mixin \Eloquent
 */
class Giornoallenamento extends Model
{
    use HasFactory;

    protected $table = 'giornoallenamentos';
    protected $guarded = [];

    public function settimanallenamento()
    {
        return $this->belongsTo(Settimanallenamento::class, 'settimanallenamento_id', 'id');
    }

    public function allenamenti()
    {
        return $this->hasMany(Allenamento::class, 'giornoallenamento_id', 'id');
    }
}
