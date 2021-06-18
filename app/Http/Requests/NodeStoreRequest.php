<?php

namespace App\Http\Requests;

use App\Models\Node;

class NodeStoreRequest extends BaseRequest
{
    public function store()
    {
        return Node::create(['graph_id' => $this->graph->id]);
    }
}
