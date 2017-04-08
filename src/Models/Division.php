<?php

namespace Khsing\World\Models;

use Illuminate\Database\Eloquent\Model;
use Khsing\World\WorldTrait;

/**
 * Division
 */
class Division extends Model
{
    use WorldTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'world_divisions';

    /**
     * append names
     *
     * @var array
     */
    protected $appends = ['local_name','local_full_name','local_alias', 'local_abbr'];

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
        return $this->hasMany(DivisionLocale::class);
    }
    /**
     * Get Division by name
     *
     * @param string $name
     * @return collection
     */
    public static function getByName($name)
    {
        $localized = DivisionLocale::where('name', $name)->first();
        if (is_null($localized)) {
            return $localized;
        } else {
            return $localized->region;
        }
    }

    /**
     * Search Division by name
     *
     * @param string $name
     * @return collection
     */
    public static function searchByName($name)
    {
        return DivisionLocale::where('name', 'like', "%".$name."%")
            ->get()->map(function ($item) {
                return $item->division;
            });
    }
}
