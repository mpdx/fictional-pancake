<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static Builder planned()
 * @method static Builder thisWeek()
 */
class Quit extends Model
{
    protected $fillable = ['employee'];

    public static function getLatest()
    {
        return self::query()
            ->where(static::CREATED_AT, '<', Carbon::now()->startOfWeek())
            ->latest()
            ->first();
    }

    public function scopePlanned(Builder $builder): Builder
    {
        return $builder->whereDate($this->getCreatedAtColumn(), '>', Carbon::now()->endOfWeek());
    }

    public function scopeThisWeek(Builder $builder): Builder
    {
        return $builder->whereBetween($this->getCreatedAtColumn(), [
            Carbon::now()->startOfWeek(),
            Carbon::now()->endOfWeek(),
        ]);
    }
}
