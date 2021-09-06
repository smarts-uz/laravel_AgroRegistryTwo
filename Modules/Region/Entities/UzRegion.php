<?php

namespace Modules\Region\Entities;

use App\Http\Filters\Filterable;
use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Builder;

class UzRegion extends Model
{
    use Filterable;

    protected $table = 'uz_regions';

    protected $fillable = ['regionid', 'regioncode', 'nameru', 'nameuz'];

    protected static function booted() {
        static::addGlobalScope('ordered', function (Builder $builder) {
            $builder->orderBy('id', 'asc');
        });
    }
}
