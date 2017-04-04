<?php

namespace Khsing\World\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Region
 */
class RegionLocale extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'world_regions_locale';

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

}
