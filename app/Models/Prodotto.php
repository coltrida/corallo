<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Prodotto
 *
 * @property int $id
 * @property string $nome
 * @property int $prezzo
 * @property string $linkFoto
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Prodotto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Prodotto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Prodotto query()
 * @method static \Illuminate\Database\Eloquent\Builder|Prodotto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prodotto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prodotto whereLinkFoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prodotto whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prodotto wherePrezzo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prodotto whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Prodotto extends Model
{
    use HasFactory;

    protected $table = 'prodottos';
    protected $guarded = [];
}
