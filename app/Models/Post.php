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

    public function type()
    {
        return $this->belongsTo(Type::class, 'type', 'id');
    }

    public function photo()
    {
        return $this->hasMany(Photo::class, 'id_post');
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller');
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function favourites()
    {
        return $this->belongsToMany(Favourites::class, 'id_post');
    }
}
