<?php

namespace App\Console\Commands;

use App\Models\Activity;
use App\Models\Location;
use Illuminate\Console\Command;

class SeedTestData extends Command
{
    protected $signature = 'hs:seed';

    protected $description = 'Seeds test data to the database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Activity::factory(100)->create();
        Location::factory(10)->create();

        return 0;
    }
}
