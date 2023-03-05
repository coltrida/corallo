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
 * @property int $user_id
 * @method static \Database\Factories\SchedallenamentoFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Schedallenamento whereUserId($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Giornoallenamento> $giorniallenamento
 * @property-read int|null $giorniallenamento_count
 * @property-read \App\Models\User|null $user
 * @mixin \Eloquent
 */
class Schedallenamento extends Model
{
    use HasFactory;

    protected $table = 'schedallenamentos';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function settimanallenamento()
    {
        return $this->hasMany(Settimanallenamento::class, 'schedallenamento_id', 'id');
    }
}
