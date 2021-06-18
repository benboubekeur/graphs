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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
     * Display the specified resource.
     *
     * @param \App\Models\Node $node
     * @return \Illuminate\Http\Response
     */
    public function show(Node $node)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Node $node
     * @return \Illuminate\Http\Response
     */
    public function edit(Node $node)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Node $node
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Node $node)
    {
        //
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
