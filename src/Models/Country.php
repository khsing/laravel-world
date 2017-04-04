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
        'has_region' => 'boolean',
    ];

    /**
     * append names
     * 
     * @var array
     */
    protected $appends = ['name','full_name','alias'];


    public function regions()
    {
        return $this->hasMany(Region::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    
    public function continent()
    {
        return $this->belongsTo(Continent::class);
    }

    public function children()
    {
        if ($this->has_region == true){
            return $this->regions;
        } else {
            return $this->cities;
        }
    }

    public function parent()
    {
        return $this->continent;
    }


    public function locales()
    {
        return $this->hasMany(CountryLocale::class);
    }

}