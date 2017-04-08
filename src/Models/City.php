<?php
namespace Khsing\World\Models;

use Illuminate\Database\Eloquent\Model;
use Khsing\World\WorldTrait;

/**
 * City
 */
class City extends Model
{
    use WorldTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'world_cities';

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
    
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function children()
    {
        return null;
    }

    public function parent()
    {
        if ($this->region_id === null) {
            return $this->country;
        } else {
            return $this->region;
        }
    }

    public function locales()
    {
        return $this->hasMany(CityLocale::class);
    }

    /**
     * Get City by name
     *
     * @param string $name
     * @return collection
     */
    public static function getByName($name)
    {
        $localed = CityLocale::where('name', $name)->first();
        if (is_null($localed)) {
            return $localed;
        } else {
            return $localed->city;
        }
    }

    /**
     * Search City by name
     *
     * @param string $name
     * @return collection
     */
    public static function searchByName($name)
    {
        return CityLocale::where('name', 'like', "%".$name."%")
            ->get()->map(function ($item) {
                return $item->city;
            });
    }
}
