# Laravel World Database

This package focused on World Countries, Regions, and Cities database with locale support for Laravel.

## Conceptions

There are 5 main objects in this package.

- World: the earth world.
- Continent: 7 continent
- Country: 248 countries
- Division: Divisions such as state/province.
- City: the last level of region, some cities up to Country, some up to Division.

### Attributes

Common attributes:

- `name`: Common name of region(english).
- `full_name`: Full name or official name(english).
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
$china->callingcode; // 86
$china->code; // CN
$china->code_alpha3; // CHN
$china->has_division; // true
$china->currency_code; // CNY
$china->currency_name; // Yuan Renminbi
$china->local_currency_name; // 人民币
```

### Localization

Right now, only English(default and fallback) and Chinese-Simp `zh-cn` are supported. Locale settings is following Laravel project settings in `config/app.php`.

## Setup

- `composer require`

```php
composer require khsing/world
```

- Add Service Provider into `config/app.php`, (Only required before Laravel 5.5)

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

- get country/city/division by code

```php
use Khsing\World\World;

World::getByCode('cn'); // iso-3166 alpha 2 code
World::getByCode('chn'); // iso-3166 alpha 3 code
World::getByCode('cn-11'); // Beijing
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

- get division/state/province via Conutry

```php
$china = Country::getByCode('cn');
$provinces = $china->divisions()->get()
// or use children method
$provinces = $china->children();
```

- get cities via Country or Division.

```php
$china = Country::getByCode('cn');
// check has_division to determine next level is division or city.
$china->has_division; // true, otherwise is false
$regsions = $china->children();
```

## Contributions

If you want contribute to this library, issue and pr are welcome. please following those steps.

1. start a new laravel project and install this library.
2. install [orangehill/iseed](https://github.com/orangehill/iseed).
3. modify datas via sql.
4. generate seeds via `artisan iseed world_cities,world_cities_locale,world_continents,world_continents_locale,world_countries,world_countries_locale,world_divisions,world_divisions_locale`
5. replace `delete()` with `truncate()`, `cd database/seeders/ && sed -i 's/->delete()/->truncate()/g' World*.php`
6. copy seeds files into library.
7. commit your work. ;)

## TODO

- change the way to seed data, eg. loading data from json?
- add front-end support
- find a way to update dataset

## Data Sources

- [ISO 639-1 Standard Language Codes](https://www.knowledgebase-script.com/kb/article/iso-639-1-standard-language-codes-255.html): language codes
- [ISO 639-1 standard language codes](https://www.andiamo.co.uk/resources/iso-language-codes/): language codes
- [United Nations Statistics Division: Standard country or area codes for statistical use (M49)](https://unstats.un.org/unsd/methodology/m49/overview/): ISO-3166-alpha3 code and country list.
- [ISO 3166-2](https://en.wikipedia.org/wiki/ISO_3166-2): main data source

## Thanks

- [moolighty/geo](https://github.com/moolighty/geo)
- [mledoze/countries](https://github.com/mledoze/countries)
- [cn/GB2260](https://github.com/cn/GB2260)

## About

This package published under MIT license. If you have any question or suggestion, please feel free to submit a issue, or email me Guixing<khsing.cn(AT)gmail.com>.

Have a nice day.
