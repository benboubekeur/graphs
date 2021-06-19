<?php

namespace App\Http\Controllers;

use App\Http\Requests\GraphIndexRequest;
use App\Http\Requests\GraphUpdateRequest;
use App\Http\Resources\GraphResource;
use App\Models\Graph;
use Illuminate\Http\Request;

class GraphController extends Controller
{
    /**
     * @OA\Get(
     *      path="/graphs",
     *      operationId="getGraphsList",
     *      tags={"Graphs"},
     *      summary="Display list of all graphs",
     *      description="Display list of all graphs",
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
    public function index(GraphIndexRequest $request)
    {
        return GraphResource::collection($request->index());
    }

    /**
     * @OA\Post (
     *      path="/graphs",
     *      operationId="createNewGraph",
     *      tags={"Graphs"},
     *      summary="Create new graph",
     *      description="Create new graph",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/GraphResource")
     *       ),
     *       @OA\Response(
     *          response=500,
     *          description="Server Error",
     *      ),
     *     )
     */
    public function store(Request $request)
    {
        return new GraphResource(Graph::create());
    }

    /**
     * @OA\Get(
     *      path="/graphs/{id}",
     *      operationId="getGraphById",
     *      tags={"Graphs"},
     *      summary="Get graph information",
     *      description="Get graph information",
     *      @OA\Parameter(
     *          name="id",
     *          description="Graph id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/GraphResource")
     *       ),
     * )
     */
    public function show(Request $request, Graph $graph)
    {
        return new GraphResource($graph);
    }

    /**
     * @OA\Put(
     *      path="/graphs/{id}",
     *      operationId="updateGraph",
     *      tags={"Graphs"},
     *      summary="Update existing graph",
     *      description="Returns updated graph data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Graph id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/GraphUpdateRequest")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/GraphResource")
     *       ),
     * )
     */
    public function update(GraphUpdateRequest $request, Graph $graph)
    {
        $request->update();
        return new GraphResource($graph);
    }

    /**
     * @OA\Delete (
     *      path="/graphs/{id}",
     *      operationId="deleteGraph",
     *      tags={"Graphs"},
     *      summary="Delete existing graph",
     *      description="Delete graph",
     *      @OA\Parameter(
     *          name="id",
     *          description="Graph id",
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
     * )
     */
    public function destroy(Graph $graph)
    {
        $graph->purge();

        return response()->noContent();
    }
}
