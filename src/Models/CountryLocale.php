<?php
namespace Khsing\World\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Country Locale
 */
class CountryLocale extends Model
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
    protected $table = 'world_countries_locale';

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
