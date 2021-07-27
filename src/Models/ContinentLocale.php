<?php

namespace Khsing\World\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Continent Locale
 */
class ContinentLocale extends Model
{
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
