<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateGraphShapeRequest;
use App\Models\Graph;
use App\Models\Relation;
use Illuminate\Http\Request;

class UpdateGraphShapeController extends Controller
{
    /**
     * @param UpdateGraphShapeRequest $request
     * @param Relation $relation
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateGraphShapeRequest $request, Relation $relation)
    {
        $request->update();

        return response()->noContent();
    }
}
