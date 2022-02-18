<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\adminController;
use App\Models\popular_item;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Auth;

class adminController extends Controller
{
    //
    public function index(){


        return view('admin.dashboard');
    }

    public function popular(){
        $item = popular_item::oldest()->paginate(5);


        return view('admin.layouts.side_menu.popular', compact('item'));
    }

    public function addPop(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniquid());
        $img_ext = strtolower($image->getClientOriginalExtensions());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = "admin/assets/images/"

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
   
   
    public function update(Request $request, $id){
        $update = popular_item::find($id)->update([
            'title' => $request->title,
        ]);

        // return Redirect()->back()->with('success', 'Category inserted successfully');
        return Redirect('/popular')->with('success', 'Category updated successfully');


        // return view('admin.popular.edit', compact('item'));
    }

    public function delete($id){
        $delete = popular_item::find($id)->delete();
        return Redirect()->back()->with('success', 'Category deleted successfully');

    }


}
