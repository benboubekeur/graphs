<?php

namespace App\Console\Commands;

use App\Http\Actions\GenerateRandomGraph;
use Illuminate\Console\Command;

class GenerateGraph extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'graph:gen   {--nbNodes= : The number of nodes}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a random graph with a given nodes number and relations';

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
     * @return int
     */
    public function handle(GenerateRandomGraph  $action)
    {
        $action->execute($this->option('nbNodes'));
    }
}
