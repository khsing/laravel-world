<?php

namespace Khsing\World\Models;

use Illuminate\Database\Eloquent\Model;
use Khsing\World\WorldTrait;

/**
 * Region
 */
class Region extends Model
{
    use WorldTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'world_regions';

    /**
     * append names
     * 
     * @var array
     */
    protected $appends = ['name','full_name','alias'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function children()
    {
        return $this->cities;
    }

    public function parent()
    {
        return $this->country;
    }

    public function locales()
    {
        return $this->hasMany(RegionLocale::class);
    }
}
