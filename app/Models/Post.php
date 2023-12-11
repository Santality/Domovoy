<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'estate',
        'room',
        'seller',
        'description',
        'floor',
        'number',
        'cost',
        'address',
        'all_area',
        'living_area',
        'height',
        'status',
    ];

    public function photo()
    {
        return $this->hasMany(Photo::class, 'id_post');
    }
}