<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Score;
use App\Models\Domains\DomainCategory;
use App\Models\Exercise;

class SeedDbFakeData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:seed-db-fake-data {--count=10}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fill the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $count = $this->option('count');

        $score = Score::factory($count)->create();
        $cat = DomainCategory::factory($count)->create();
        $excersises = Exercise::factory($count)->create();
    }
}
