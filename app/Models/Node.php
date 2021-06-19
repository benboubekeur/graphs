<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['graph_id'];

    public function childRelations()
    {
        return $this->hasMany(Relation::class, 'parent_id', 'id');
    }

    public function parentRelations()
    {
        return $this->hasMany(Relation::class, 'child_id', 'id');
    }

    public function relations()
    {
        return $this->childRelations->merge($this->parentRelations);
    }

    public function purge()
    {
        $keys = $this->relations()->modelKeys();

        Relation::destroy($keys);

        $this->delete();
    }
}
