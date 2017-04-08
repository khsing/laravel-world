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

    protected $supported_locales = [
        'en',
        'zh-cn',
    ];

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
        if (!in_array($locale, $this->supported_locales)) {
            $locale = 'en';
        }
        $this->locale = $locale;
        return $this;
    }
 
    /**
     * get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Get localized instance
     *
     * @return object
     */
    protected function getLocalized()
    {
        return $this->locales()->where('locale', $this->locale)->first();
    }

    /**
     * Get localized name of instance
     *
     * @return string
     */
    public function getLocalNameAttribute()
    {
        if ($this->locale == $this->defaultLocale) {
            return $this->name;
        }
        $localized = $this->getLocalized();
        return !is_null($localized)? $localized->name: $this->name;
    }

    /**
     * Get localized Full Name of instance
     *
     * @return string
     */
    public function getLocalFullNameAttribute()
    {
        if ($this->locale == $this->defaultLocale) {
            return $this->full_name;
        }
        $localized = $this->getLocalized();
        return !is_null($localized)? $localized->full_name: $this->full_name;
    }

    /**
     * Get alias of locale
     *
     * @return string
     */
    public function getLocalAliasAttribute()
    {
        if ($this->locale == $this->defaultLocale) {
            return $this->name;
        }
        $localized = $this->getLocalized();
        return !is_null($localized)? $localized->alias: $this->name;
    }

    /**
     * Get alias of locale
     *
     * @return string
     */
    public function getLocalAbbrAttribute()
    {
        if ($this->locale == $this->defaultLocale) {
            return $this->name;
        }
        $localized = $this->getLocalized();
        return !is_null($localized)? $localized->abbr: $this->name;
    }

    /**
     * Get instance by code like country code etc.
     *
     * @param string $code
     * @return instance
     */
    public static function getByCode($code)
    {
        $code = strtolower($code);
        $world = self::where('code', $code)->first();
        if (is_null($world)) {
            throw new InvalidCodeException("${code} does not exist");
        }
        return $world;
    }
}
