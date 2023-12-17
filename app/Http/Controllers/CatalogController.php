<?php

namespace App\Http\Controllers;

use App\Models\Estate;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Room;
use App\Models\Type;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalogList(){
        $list = Post::with('photo')->where('status', 1)->paginate(20);
        $types = Type::all();
        $estates = Estate::all();
        $rooms = Room::all();
        return view('catalog', ['catalogList' => $list, 'types' => $types, 'estates' => $estates, 'rooms' => $rooms]);
    }

    public function catalogFilter(Request $request){
        $selectedCategories = $request->input('type', []);

        $posts = Post::with('photo')->when(count($selectedCategories) > 0, function ($query) use ($selectedCategories) {
            return $query->whereHas('type', function ($subQuery) use ($selectedCategories) {
                $subQuery->whereIn('id', $selectedCategories);
            });
        })->where('status', 1)->paginate(20);
        $types = Type::all();
        $estates = Estate::all();
        $rooms = Room::all();
        return view('catalog', ['catalogList' => $posts, 'types' => $types, 'estates' => $estates, 'rooms' => $rooms]);
    }
}
