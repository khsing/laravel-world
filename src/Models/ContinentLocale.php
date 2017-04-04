<?php

namespace Khsing\World\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Continent Locale
 */
class ContinentLocale extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'world_continents_locale';

    /**
     * return belonged Continent
     * 
     * @return void
     */
    public function continent()
    {
        return $this->belongsTo(Continent::class);
    }

}
