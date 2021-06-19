<?php

namespace App\Http\Actions;

use App\Models\Graph;
use App\Models\Node;

class GenerateRandomGraph
{
    public function execute($nbNodes)
    {
        $this->createGraph($nbNodes);
    }

    /**
     * @param $nbNodes
     * @return \Illuminate\Database\Eloquent\Collection
     */
    private function createGraph($nbNodes)
    {
        return Graph::factory()
            ->has(Node::factory()->count($nbNodes))
            ->create();
    }
}