<?php

namespace Khsing\World\Models;

use Illuminate\Database\Eloquent\Model;
use Khsing\World\WorldTrait;
use DateTime;
use DateTimeZone;

/**
 * City.
 */
class City extends Model
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
    protected $table = 'world_cities';

    /**
     * append names.
     *
     * @var array
     */
    protected $appends = ['local_name', 'local_full_name', 'local_alias', 'local_abbr'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function children()
    {
        return null;
    }

    public function parent()
    {
        if ($this->division_id === null) {
            return $this->country;
        }
        return $this->division;
    }

    public function locales()
    {
        return $this->hasMany(CityLocale::class);
    }

    /**
     * Get timezone abbreviation.
     *
     * @param string $iana_timezone
     *
     * @return string
     */
    public static function timezoneAbbrev($iana_timezone)
    {
        if (empty($iana_timezone)) return '';
        if (!in_array($iana_timezone, timezone_identifiers_list(),true)) return '';

        $dateTime = new DateTime();
        $dateTime->setTimeZone(new DateTimeZone($iana_timezone));
        return $dateTime->format('T');
    }

    /**
     * Get GMT timezone offset.
     *
     * @param string $iana_timezone
     *
     * @return string
     */
    public static function timezoneOffset($iana_timezone)
    {
        if (empty($iana_timezone)) return '';
        if (!in_array($iana_timezone, timezone_identifiers_list(),true)) return '';

        $zones = timezone_identifiers_list();

        $dateTimeZone = new DateTimeZone($iana_timezone);
        $timeInCity = new DateTime('now', $dateTimeZone);
        $offset = $dateTimeZone->getOffset( $timeInCity ) / 3600;
        return "GMT" . ($offset < 0 ? $offset : "+".$offset);
    }

    /**
     * Get City by name.
     *
     * @param string $name
     *
     * @return collection
     */
    public static function getByName($name)
    {
        $localed = CityLocale::where('name', $name)->first();
        if (is_null($localed)) {
            return $localed;
        }
        return $localed->city;
    }

    /**
     * Search City by name.
     *
     * @param string $name
     *
     * @return collection
     */
    public static function searchByName($name)
    {
        return CityLocale::where('name', 'like', '%' . $name . '%')
            ->get()->map(function ($item) {
                return $item->city;
            });
    }
}
