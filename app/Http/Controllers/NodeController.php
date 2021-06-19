<?php

namespace App\Http\Controllers;

use App\Http\Requests\NodeStoreRequest;
use App\Http\Resources\NodeResource;
use App\Models\Graph;
use App\Models\Node;
use Illuminate\Http\Request;

class NodeController extends Controller
{
    /**
     * @param NodeStoreRequest $request
     * @param Graph $graph
     * @return NodeResource
     */
    public function store(NodeStoreRequest $request, Graph $graph)
    {
        return new NodeResource($request->store());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Node $node
     * @return \Illuminate\Http\Response
     */
    public function destroy(Node $node)
    {
        $node->purge();

        return response()->noContent();
    }
}
