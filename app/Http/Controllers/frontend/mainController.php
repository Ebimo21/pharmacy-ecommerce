<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class mainController extends Controller
{
    //
    public function index(){

        $categories = category::latest()->paginate(8);
        return view('home', compact('categories'));
    }

    public function about(){
        return view('about');
    }
}
