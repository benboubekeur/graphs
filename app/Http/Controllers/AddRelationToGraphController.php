<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddRelationToGraphRequest;
use App\Models\Graph;
use Illuminate\Http\Request;

class AddRelationToGraphController extends Controller
{
    /**
     * @OA\Post (
     *      path="/graphs/{graph}/relations",
     *      operationId="addRelationToNodes",
     *      tags={"Nodes"},
     *      summary="Add relations between two nodes",
     *      description="Add relations between two nodes",
     *       @OA\Parameter(
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
     *      @OA\Response(
     *          response=500,
     *          description="Server Error",
     *      ),
     *     )
     */
    public function __invoke(AddRelationToGraphRequest $request, Graph $graph)
    {
        $request->store();

        return response()->noContent();
    }
}
