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
}