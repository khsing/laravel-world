<?php

namespace Khsing\World;

use Khsing\World\Exceptions\InvalidCodeException;

trait WorldTrait
{
    /**
     * default locale setting
     *
     * @var string
     */
    protected $defaultLocale = "en";

    /**
     * current locale setting
     *
     * @var string
     */
    protected $locale = "en";

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setLocale(config('app.locale'));
    }

    /**
     * setting locale
     *
     * @param string $locale
     * @return void
     */
    public function setLocale($locale)
    {
        $locale = str_replace('_', '-', strtolower($locale));
        if (starts_with($locale, 'en')) {
            $locale = 'en';
        }
        $this->locale = $locale;
    }
 
    /**
     * get locale
     *
     * @return string
     */
    protected function getLocale()
    {
        return $this->locale;
    }

    /**
     * Get localed instance
     *
     * @return object
     */
    protected function getLocaled()
    {
        return $this->locales()->where('locale', $this->locale)->first();
    }

    /**
     * Get localed name of instance
     *
     * @return string
     */
    public function getLocaleNameAttribute()
    {
        if ($this->locale == $this->defaultLocale) {
            return $this->name;
        }
        $localed = $this->getLocaled();
        return !is_null($localed)? $localed->name: $this->name;
    }

    /**
     * Get Localed Full Name of instance
     *
     * @return string
     */
    public function getLocaleFullNameAttribute()
    {
        if ($this->locale == $this->defaultLocale) {
            return $this->full_name;
        }
        $localed = $this->getLocaled();
        return !is_null($localed)? $localed->full_name: $this->full_name;
    }

    /**
     * Get alias of locale
     *
     * @return string
     */
    public function getAliasAttribute()
    {
        if ($this->locale == $this->defaultLocale) {
            return $this->name;
        }
        $localed = $this->getLocaled();
        return !is_null($localed)? $localed->alias: $this->name;
    }
    /**
     * Get instance by code like country code etc.
     *
     * @param string $code
     * @return instance
     */
    public static function getByCode($code)
    {
        $code = strtoupper($code);
        $world = self::where('code', $code)->first();
        if (is_null($world)) {
            throw new InvalidCodeException("${code} does not exist");
        }
        return $world;
    }
}
