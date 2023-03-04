<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Schedalimentazione
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Schedalimentazione newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedalimentazione newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedalimentazione query()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedalimentazione whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedalimentazione whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedalimentazione whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Schedalimentazione extends Model
{
    use HasFactory;

    protected $table = 'schedalimentaziones';
    protected $guarded = [];
}
