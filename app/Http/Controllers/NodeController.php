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
     * @OA\Get(
     *      path="/graphs/{graph}/nodes",
     *      operationId="getProjectsList",
     *      tags={"Nodes"},
     *      summary="Create node for the graph",
     *      description="Create node for the graph",
     *       @OA\Parameter(
     *          name="id",
     *          description="Node id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Server Error",
     *      ),
     *     )
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
