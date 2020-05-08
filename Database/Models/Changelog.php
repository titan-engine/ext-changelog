<?php

namespace Extensions\Ian\Changelog\Database\Models;

use App\User;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Changelog extends Model
{
    use Sluggable;

    public function author(): HasOne {
        return $this->hasOne(User::class, 'id', 'author_id');
    }

    public function sluggable(): array
    {
        return [
            'slug'  =>  [
                'source'    =>  'title'
            ]
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
