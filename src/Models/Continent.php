<?php

namespace Khsing\World\Models;

use Illuminate\Database\Eloquent\Model;
use Khsing\World\WorldTrait;

/**
 * Continent
 */
class Continent extends Model
{
    use WorldTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'world_continents';

    /**
     * append names
     *
     * @var array
     */
    protected $appends = ['name','full_name','alias'];

    /**
     * return Countries
     *
     * @return void
     */
    public function countries()
    {
        return $this->hasMany(Country::class);
    }

    public function children()
    {
        return $this->countries;
    }

    public function parent()
    {
        return null;
    }

    /**
     * return Continent locales
     *
     * @return void
     */
    public function locales()
    {
        return $this->hasMany(ContinentLocale::class);
    }

    /**
     * Get Continent by name
     *
     * @param string $name
     * @return collection
     */
    public static function getByName($name)
    {
        $localed = ContinentLocale::where('name', $name)->first();
        if (is_null($localed)) {
            return $localed;
        } else {
            return $localed->Continent;
        }
    }

    /**
     * Search Continent by name
     *
     * @param string $name
     * @return collection
     */
    public static function searchByName($name)
    {
        return ContinentLocale::where('name', 'like', "%".$name."%")
            ->get()->map(function ($item) {
                return $item->Continent;
            });
    }
}
