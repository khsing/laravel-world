# Laravel World Database

This package focused on World Countries, Regions, and Cities database with locale support for Laravel.


## Conceptions

There are 5 main objects in this package.

- World: the earth world.
- Continent: 7 continent
- Country: 247 countries
- Region: several countries have region/state/province , e.g. US, UK, and China.
- City: the last level region, some city up to Country, some up to region.

### Attributes

Every object has `name`, `full_name` attributes, 

`full_name` is not supported for Continent/Region/City.

```php
use Khsing\World\Models\Country;
$china = Country::getByCode('cn');
$china->name; // China, 中国
$china->full_name; // People's Republic of China, 中华人民共和国
$china->code; // CN
$china->code3; // CHN
$china->has_region; // true

```

### Locales

Right now, only English(default and fallback) and `zh-cn` are supported. Locale settings is following Laravel project settings in `config/app.php`.


## Setup

- `composer require`

```php
composer require 'khsing/world:dev-master'
```

- Add Service Provider into `config/app.php`

```php
'providers' => [
    // ...
    Khsing\World\WorldServiceProvider::class,
]
```
- Publish and init
```php
php artisan vender:publish
composer dump-autoload
php artisan world:init
```

## Usage 

- get all Continent
```php
use Khsing\World\World;

World::getContinents()

```
- get all Countries
```php
use Khsing\World\World;

World::getCountries()
```
- get country by code
```php
use Khsing\World\Models\Country;

Country::getByCode('cn');
```
- get countries belong to a continent
```php
use Khsing\World\Models\Continent;

$asia = Continent::getByCode('AS');
$countries = $asia->countries()->get();
// or use children method
$countries = $asia->children();
```

- get continent or parent
```php
$china = Country::getByCode('cn');
$asia = $china->parent();

```
- get region/state/province via Conutry

```php
$china = Country::getByCode('cn');
$provinces = $china->regions()->get()
// or use children method
$provinces = $china->children();
```

- get cities via Country or Region.
```php
$china = Country::getByCode('cn');
// check has_region to determine next level is region or city.
$china->has_region; // true, otherwise is false
$regsions = $china->children();

```

## About

This package published under MIT license. If you have any question or suggestion, please feel free to submit a issue, or email me Guixing<khsing.cn(AT)gmail.com>. 

Have a nice day. 