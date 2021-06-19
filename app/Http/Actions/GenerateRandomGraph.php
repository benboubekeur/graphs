<?php

namespace App\Http\Actions;

use App\Models\Graph;
use App\Models\Node;
use App\Models\Relation;

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
            ->afterCreating(
                function (Graph $graph) {
                    $graph->nodes->each(
                        function (Node $node) use ($graph) {
                            $this->createRelation($graph, $node);
                        }
                    );
                }
            )
            ->create();
    }

    /**
     * @param Graph $graph
     * @param Node $node
     */
    private function createRelation(Graph $graph, Node $node): void
    {
        Relation::create(
            [
                'graph_id' => $graph->id,
                'parent_id' => $node->id,
                'child_id' => $graph->nodes()
                                    ->where('id', '<>', $node->id)
                                    ->inRandomOrder()
                                    ->first()->id
            ]
        );
    }
}