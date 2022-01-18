<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)->create();
        Location::factory(10)->create();
        Activity::factory(20)->create();
    }
}
