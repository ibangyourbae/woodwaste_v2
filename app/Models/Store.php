<?php

namespace App\Models;

use App\Models\User;
use App\Models\AllWood;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Store extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];

    public function wood(){
        return $this->hasMany(AllWood::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'store_name'
            ]
        ];
    }
}
