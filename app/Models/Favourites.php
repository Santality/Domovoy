<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourites extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_post',
    ];

    public function post()
    {
        return $this->belongsToMany(Post::class);
    }

    public function seller()
    {
        return $this->belongsToMany(User::class);
    }

    public $timestamps = false;
}
