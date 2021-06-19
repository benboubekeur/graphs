<?php

namespace App\Console\Commands;

use App\Http\Actions\ClearEmptyGraphs;
use Illuminate\Console\Command;

class ClearGraph extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'graph:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear empty graphs';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle(ClearEmptyGraphs $actions)
    {
        $actions->execute();
    }
}
