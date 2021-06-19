<?php

namespace App\Http\Virtual\Resources;

/**
 * @OA\Schema(
 *     title="GraphResource",
 *     description="Graph resource",
 *     @OA\Xml(
 *         name="GraphResource"
 *     )
 * )
 */
class GraphResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\Graph
     */
    private $data;
}