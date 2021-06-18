<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GraphUpdateRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:255', 'unique:graphs'],
            'description' => ['required']
        ];
    }

    public function update()
    {
        return $this->graph->update($this->validated());
    }
}
