<?php

namespace App\Http\Virtual\Models;

/**
 * @OA\Schema(
 *     title="Graph",
 *     description="Graph model",
 *     @OA\Xml(
 *         name="Graph"
 *     )
 * )
 */
class Graph
{
    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var integer
     */
    private $id;
    /**
     * @OA\Property(
     *      title="Name",
     *      description="Name of the new Graph",
     *      example="A nice Graph"
     * )
     *
     * @var string
     */
    public $name;
    /**
     * @OA\Property(
     *      title="Description",
     *      description="Description of the new Graph",
     *      example="This is new Graph's Graph"
     * )
     *
     * @var string
     */
    public $description;
    /**
     * @OA\Property(
     *     title="Created at",
     *     description="Created at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $created_at;
    /**
     * @OA\Property(
     *     title="Updated at",
     *     description="Updated at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $updated_at;
    /**
     * @OA\Property(
     *     title="Deleted at",
     *     description="Deleted at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
}