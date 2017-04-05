<?php

namespace Khsing\World\Console;

use Illuminate\Console\Command;

/**
 * Init Command
 */
class InitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'world:init';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Execute migrate first, migrating...');
        $this->call('migrate');
        $this->info('Seeding datas');
        $this->call('db:seed',["--class"=>"WorldTablesSeeder"]);
        $this->info('Done!');
    }
}