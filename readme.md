# Laravel World Database

This package focused on World Countries, Regions, and Cities database with locale support for Laravel.


## Conceptions

There are 5 main objects in this package.

- World: the earth world.
- Continent: 7 continent
- Country: 247 countries
- Division: Divisions such as state/province.
- City: the last level of region, some cities up to Country, some up to Division.

### Attributes

Common attributes:

- `name`: Common name of region.
- `full_name`: Full name or official name
- `code`: ISO-3166-1-alpha2/ISO-3166-2 code
- `local_name`: translation of Common name
- `local_full_name`: translation of full name
- `local_alias`: alias in different language
- `local_abbr`: Abbreviation

Country spec attributes:

- `emoji`: Emoji flag of country
- `capital`: Captial of this country
- `code_alpha3`: Code of ISO-3166-1-alpha3
- `currency_code`: ISO-4177 Currency Code, e.g. USD, CNY
- `currency_name`: ISO-4177 Currency Name, 
- `local_currency_name`: ISO-4177 Currency name in locale

Example:

```php
use Khsing\World\World;
$china = World::getByCode('cn');
$china->setLocale('zh-cn');
$china->name; // China
$china->local_name; // 中国
$china->full_name; // People's Republic of China
$china->local_full_name; // 中华人民共和国
$china->emoji; // 🇨🇳
$china->code; // CN
$china->code_alpha3; // CHN
$china->has_division; // true

```

### Localization

Right now, only English(default and fallback) and Chinese-Simp `zh-cn` are supported. Locale settings is following Laravel project settings in `config/app.php`.

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
php artisan vendor:publish --force --provider="Khsing\World\WorldServiceProvider"
composer dump-autoload
php artisan world:init
```

## Usage 

- get all Continent
```php
use Khsing\World\World;

World::Continents()

```
- get all Countries
```php
use Khsing\World\World;

World::Countries()
```
- get country by code
```php
use Khsing\World\World;

World::getByCode('cn');
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