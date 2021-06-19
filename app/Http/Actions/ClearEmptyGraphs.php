<?php

namespace App\Http\Actions;

use App\Models\Graph;

class ClearEmptyGraphs
{
    public function execute()
    {
        $this->getEmptyGraphs()->each->delete();
    }

    /**
     * @return mixed
     */
    private function getEmptyGraphs()
    {
        return Graph::doesntHave('nodes')->get();
    }
}