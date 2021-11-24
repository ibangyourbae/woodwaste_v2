<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class AllWood extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded = ['id'];

    public function store(){
        return $this->belongsTo(Store::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'wood_name'
            ]
        ];
    }
}
