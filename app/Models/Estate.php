<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_estate',
    ];

    public function post()
    {
        return $this->hasMany(Post::class, 'estate', 'id');
    }

    public $timestamps = false;
}
