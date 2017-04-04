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
        if ($this->region_id === null){
            return $this->country;
        } else {
            return $this->region;
        }
    }

    public function locales()
    {
        return $this->hasMany(CityLocale::class);
    }
    
}
