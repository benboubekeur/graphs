<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddRelationToGraphRequest;
use App\Models\Graph;
use Illuminate\Http\Request;

class AddRelationToGraphController extends Controller
{
    /**
     * @param AddRelationToGraphRequest $request
     * @param Graph $graph
     * @return \Illuminate\Http\Response
     */
    public function __invoke(AddRelationToGraphRequest $request, Graph $graph)
    {
        $request->store();

        return response()->noContent();
    }
}
