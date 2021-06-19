<?php

namespace App\Console\Commands;

use App\Http\Actions\DisplayGraphsStats;
use Illuminate\Console\Command;

class GraphSats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'graph:stats  {--gid= : The grap\'s id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display graphs stats (display the graph meta data, number of nodes, number of relations) by graph id.';

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
    public function handle(DisplayGraphsStats $action   )
    {
        $this->table(
            ['Name', 'Description', 'Nbr of nodes', 'Nbr of relations'],
            $action->execute(  $this->option('gid'))
        );
    }
}
