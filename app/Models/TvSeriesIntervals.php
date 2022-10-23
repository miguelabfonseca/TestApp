<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvSeriesIntervals extends Model
{
    use HasFactory;
    protected $fillable = ['id_tv_series', 'week_day', 'show_time'];

    public function tvSerie()
    {
        return $this->belongsTo(TvSeries::class, 'id_tv_series', 'id');
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('week_day');
        });
    }
}
