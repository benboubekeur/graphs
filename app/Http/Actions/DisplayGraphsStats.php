<?php

namespace App\Http\Actions;

use App\Models\Graph;

class DisplayGraphsStats
{
    /**
     * @param $id
     * @return mixed
     */
    public function execute($id)
    {
        return $this->getGraphById($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    private function getGraphById($id)
    {
        return Graph::where('id', $id)
                     ->select(['name', 'description'])
                     ->withCount(['nodes', 'relations'])
                     ->get();
    }
}