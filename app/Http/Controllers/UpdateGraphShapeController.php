<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateGraphShapeRequest;
use App\Models\Graph;
use App\Models\Relation;
use Illuminate\Http\Request;

class UpdateGraphShapeController extends Controller
{
    /**
     * @OA\Put (
     *      path="/relations/{relation}",
     *      operationId="updateNodeRelation",
     *      tags={"Relation"},
     *      summary="Update node's relation",
     *      description="Update node's relation",
     *       @OA\Parameter(
     *          name="id",
     *          description="Relation id",
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
    public function __invoke(UpdateGraphShapeRequest $request, Relation $relation)
    {
        $request->update();

        return response()->noContent();
    }
}
