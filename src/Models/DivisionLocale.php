<?php

namespace Khsing\World\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Division Locale
 */
class DivisionLocale extends Model
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
    protected $table = 'world_divisions_locale';

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
