<?php

namespace App\Http\Requests;

use App\Models\Graph;
use Illuminate\Foundation\Http\FormRequest;

class GraphIndexRequest extends BaseRequest
{

    public function index()
    {
        return Graph::all('name', 'description');
    }
}
