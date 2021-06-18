<?php

namespace App\Http\Requests;

use App\Models\Relation;
use Illuminate\Http\Request;

class AddRelationToGraphRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'from' => ['required', 'numeric'],
            'to' => ['required', 'numeric']
        ];
    }

    public function store()
    {
        Relation::create(['graph_id' => $this->graph->id,'parent_id' => $this->from, 'child_id' => $this->to]);
    }
}
