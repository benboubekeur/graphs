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
     * @param GraphIndexRequest $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(GraphIndexRequest $request)
    {
        return GraphResource::collection($request->index());
    }

    public function store(Request $request)
    {
        return new GraphResource(Graph::create());
    }

    public function show(Request $request, Graph $graph)
    {
        return new GraphResource($graph);
    }

    /**
     * @param GraphUpdateRequest $request
     * @param Graph $graph
     * @return GraphResource
     */
    public function update(GraphUpdateRequest $request, Graph $graph)
    {
        $request->update();
        return new GraphResource($graph);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Graph $graph
     * @return \Illuminate\Http\Response
     */
    public function destroy(Graph $graph)
    {
        $graph->delete();
        return response()->noContent();
    }
}
