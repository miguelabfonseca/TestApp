<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvSeries extends Model
{
    use HasFactory;
    protected $fillable = ['title','channel','gender'];

    // protected static function booted()
    // {
    //     self::addGlobalScope('ordered', function (Builder $queryBuilder) {
    //         $queryBuilder->orderBy('title');
    //     });
    // }
}
