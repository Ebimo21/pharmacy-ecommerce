<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\adminController;
use App\Models\popular_item;

use Illuminate\Support\Carbon;
use Auth;

class adminController extends Controller
{
    //
    public function index(){


        return view('admin.dashboard');
    }

    public function popular(){
        $item = popular_item::all();


        return view('admin.layouts.side_menu.popular', compact('item'));
    }

    public function addPop(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            
        ]);

        popular_item::insert([
            'user_id' =>Auth::user()->id,
            'title' => $request->title,
            'created_at'=> Carbon::now(),
            // 'item_image' => $request->
        ]);

        return Redirect()->back()->with('success', 'Category inserted successfully');
    }


    public function edit($id){
        $item = popular_item::find($id);
        // $item = popular_item::all();


        return view('admin.popular.edit', compact('item'));
    }
}
