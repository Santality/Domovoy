<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Post;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalogList(){
        $list = Post::with('photo')->get();
        return view('catalog', ['catalogList' => $list]);
    }
}
