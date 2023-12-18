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
        $types = Type::all();
        $estates = Estate::all();
        $rooms = Room::all();

        $sort = $request['sort'];

        $selectedTypes = $request->input('type', []);
        $selectedEstates = $request->input('estate', []);
        $selectedRooms = $request->input('room', []);

        $posts = Post::when($selectedTypes, function ($query) use ($selectedTypes) {
            return $query->whereIn('type', $selectedTypes);
        })
        ->when($selectedEstates, function ($query) use ($selectedEstates) {
            return $query->whereIn('estate', $selectedEstates);
        })
        ->when($selectedRooms, function ($query) use ($selectedRooms) {
            return $query->whereIn('room', $selectedRooms);
        })->with('photo')->where('status', 1)->paginate(20);
        return view('catalog', ['catalogList' => $posts, 'types' => $types, 'estates' => $estates, 'rooms' => $rooms]);
    }
}
