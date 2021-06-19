<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graph extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function nodes()
    {
        return $this->hasMany(Node::class);
    }

    public function relations()
    {
        return $this->hasMany(Relation::class);
    }

    public function purge()
    {
        $this->relations->each->delete();

        $this->nodes->each->delete();

        $this->delete();
    }
}
