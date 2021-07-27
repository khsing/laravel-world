<?php
namespace Khsing\World\Models;

use Illuminate\Database\Eloquent\Model;
use Khsing\World\WorldTrait;

/**
 * Country
 */
class Country extends Model
{
    use WorldTrait;

    /**
     * The database table doesn't use 'created_at' and 'updated_at' so we disable it from Inserts/Updates.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'world_countries';

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'has_division' => 'boolean',
    ];

    /**
     * append names
     *
     * @var array
     */
    protected $appends = ['local_name','local_full_name','local_alias', 'local_abbr', 'local_currency_name'];

    public function divisions()
    {
        return $this->hasMany(Division::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    /**
     * Continent of country
     *
     * @return Continent
     */
    public function continent()
    {
        return $this->belongsTo(Continent::class);
    }

    /**
     * Get next level
     *
     * @return collection
     */
    public function children()
    {
        if ($this->has_division == true) {
            return $this->divisions;
        }
        return $this->cities;
    }

    /**
     * Get up level
     *
     * @return Continent
     */
    public function parent()
    {
        return $this->continent;
    }

    public function locales()
    {
        return $this->hasMany(CountryLocale::class);
    }

    /**
     * Get alias of locale
     *
     * @return string
     */
    public function getLocalCurrencyNameAttribute()
    {
        if ($this->locale == $this->defaultLocale) {
            return $this->currency_name;
        }
        $localized = $this->getLocalized();
        if (!is_null($localized)) {
            return !is_null($localized->currency_name) ? $localized->currency_name: $this->currency_name;
        }
        return $this->currency_name;
    }
    /**
     * Get country by name
     *
     * @param string $name
     * @return collection
     */
    public static function getByName($name)
    {
        $localized = CountryLocale::where('name', $name)->first();
        if (is_null($localized)) {
            return $localized;
        }
        return $localized->country;
    }

    /**
     * Search country by name
     *
     * @param string $name
     * @return collection
     */
    public static function searchByName($name)
    {
        return CountryLocale::where('name', 'like', "%" . $name . "%")
            ->get()->map(function ($item) {
                return $item->country;
            });
    }
}
