<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\popular_item;

class mainController extends Controller
{
    //
    public function index(){

        $categories = category::oldest()->paginate(8);
        $item = popular_item::oldest()->paginate(5);

        return view('home', compact('item', 'categories'));
    }

    public function about(){
        return view('about');
    }
}
