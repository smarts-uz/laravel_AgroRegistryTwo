<?php

namespace Modules\Region\Entities;

use App\Http\Filters\Filterable;
use Modules\Region\Entities\UzRegion;
use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Builder;

class UzDistrict extends Model
{
    use Filterable;

    protected $guard_name = 'web';
    protected $table = 'uz_districts';
    public $timestamps = false;

    protected $fillable = ['areaid', 'regionid', 'areacode', 'nameru', 'nameuz'];

    protected static function booted() {
        static::addGlobalScope('ordered', function (Builder $builder) {
            $builder->orderBy('areaid', 'asc');
        });
    }

    public function region()
    {
        return $this->belongsTo(UzRegion::class, 'regionid', 'regionid');
    }

    public function scopeFilters($query)
    {
        return $query->whereNotIn('areacode', [200, 400, 260]);
    }
}
