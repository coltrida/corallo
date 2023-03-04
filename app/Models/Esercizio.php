<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Esercizio
 *
 * @property int $id
 * @property string $nome
 * @property string $linkFoto
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Esercizio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Esercizio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Esercizio query()
 * @method static \Illuminate\Database\Eloquent\Builder|Esercizio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Esercizio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Esercizio whereLinkFoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Esercizio whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Esercizio whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Esercizio extends Model
{
    use HasFactory;

    protected $table = 'esercizios';
    protected $guarded = [];
}
