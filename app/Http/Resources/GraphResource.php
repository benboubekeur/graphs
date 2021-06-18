<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GraphResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'nodes' => new  NodeResourceCollection($this->nodes),
            'relations' => $this->relations
        ];
    }
}
