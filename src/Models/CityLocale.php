<?php
namespace Khsing\World\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * City
 */
class CityLocale extends Model
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
    protected $table = 'world_cities_locale';

    /**
     * return belonged City
     *
     * @return void
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
