<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Schedallenamento
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Schedallenamento newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedallenamento newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedallenamento query()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedallenamento whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedallenamento whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedallenamento whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Schedallenamento extends Model
{
    use HasFactory;

    protected $table = 'schedallenamentos';
    protected $guarded = [];
}
