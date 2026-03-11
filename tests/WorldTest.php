<?php

namespace Khsing\World\Tests;

use Illuminate\Support\Str;
use Khsing\World\Exceptions\InvalidCodeException;
use Khsing\World\Models\City;
use Khsing\World\Models\Continent;
use Khsing\World\Models\Country;
use Khsing\World\Models\Division;
use Khsing\World\World;
use Orchestra\Testbench\TestCase;

class WorldTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [\Khsing\World\WorldServiceProvider::class];
    }

    protected function getEnvironmentSetUp($app): void
    {
        // Use sqlite on disk so large seed data is manageable
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connections.testing', [
            'driver' => 'sqlite',
            'database' => __DIR__.'/../database/database.sqlite',
            'prefix' => '',
        ]);
    }

    protected function setUp(): void
    {
        parent::setUp();

        // Migrate package tables
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    /** @test */
    public function world_class_exists()
    {
        $this->assertTrue(class_exists(World::class));
    }

    /** @test */
    public function get_by_code_throws_for_invalid_code_on_empty_db()
    {
        $this->expectException(InvalidCodeException::class);

        World::getByCode('xx');
    }

    /** @test */
    public function migrations_create_expected_tables()
    {
        $schema = $this->app['db']->connection()->getSchemaBuilder();

        foreach ([
            'world_continents',
            'world_continents_locale',
            'world_countries',
            'world_countries_locale',
            'world_divisions',
            'world_divisions_locale',
            'world_cities',
            'world_cities_locale',
            'world_languages',
        ] as $table) {
            $this->assertTrue($schema->hasTable($table), "Missing table: {$table}");
        }
    }

    /** @test */
    public function seeding_world_tables_populates_basic_data()
    {
        // Run the package init command which seeds all tables
        $this->artisan('world:init')->run();

        $this->assertGreaterThan(0, Continent::count(), 'Continents should be seeded');
        $this->assertGreaterThan(0, Country::count(), 'Countries should be seeded');
        $this->assertGreaterThan(0, City::count(), 'Cities should be seeded');
        $this->assertGreaterThan(0, Division::count(), 'Divisions should be seeded');
    }

    /** @test */
    public function can_resolve_china_by_iso_code_after_seeding()
    {
        $this->artisan('world:init')->run();

        $china = World::getByCode('cn');

        $this->assertNotNull($china);
        $this->assertSame('CN', Str::upper($china->code));
        $this->assertTrue($china->has_division);
    }

    /** @test */
    public function can_switch_locale_to_chinese_after_seeding()
    {
        $this->artisan('world:init')->run();

        $china = World::getByCode('cn');
        $china->setLocale('zh-cn');

        $this->assertNotEmpty($china->local_name);
        $this->assertNotEmpty($china->local_full_name);
    }
}
