<?php

namespace Khsing\World;

use Khsing\World\Models\Continent;
use Khsing\World\Models\Country;
use Khsing\World\Models\Division;

/**
 * World
 */
class World
{
    public static function Continents()
    {
        return Continent::get();
    }

    public static function Countries()
    {
        return Country::get();
    }

    public static function getContinentByCode($code)
    {
        return Continent::getByCode($code);
    }

    public static function getCountryByCode($code)
    {
        return Country::getByCode($code);
    }

    public static function getByCode($code)
    {
        $code = strtolower($code);
        if (strpos($code, '-')) {
            list($country_code, $code) = explode('-', $code);
            $country = self::getCountryByCode($country_code);
        } else {
            return self::getCountryByCode($code);
        }
        if ($country->has_division) {
            return Division::where([
                ['country_id', $country->id],
                ['code', $code],
            ])->first();
        }
        return City::where([
                ['country_id', $country->id],
                ['code', $code],
            ])->first();

        throw new \Khsing\World\Exceptions\InvalidCodeException("Code is invalid");
    }
}
