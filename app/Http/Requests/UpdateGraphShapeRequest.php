<?php

namespace App\Http\Requests;

use App\Models\Relation;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGraphShapeRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'from' => ['required', 'numeric'],
            'to' => ['required', 'numeric']
        ];
    }

    public function update()
    {
        $this->relation->update($this->getValidated());
    }

    /**
     * @return array
     */
    private function getValidated(): array
    {
        return ['parent_id' => $this->from, 'child_id' => $this->to];
    }
}
