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


        return view('admin.sidemenu.popular.popular', compact('item'));
    }

    public function addPop(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'image' => 'required',
            
            
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = "admin/assets/images/uploads/";
        $last_image = $up_location.$img_name;
        $image->move($up_location, $img_name);

        popular_item::insert([
            'user_id' =>Auth::user()->id,
            'title' => $request->title,
            'created_at'=> Carbon::now(),
            'image' => $img_name,
        ]);

        return Redirect()->back()->with('success', 'Category inserted successfully');
    }


    public function edit($id){
        $item = popular_item::find($id);
        // $item = popular_item::all();


        return view('admin.sidemenu.popular.edit', compact('item'));
    }
   
   
    public function update(Request $request, $id){

        $validatedData = $request->validate([
            'title' => 'required',
            
            
        ]);

        $old_image = $request->old_image;

        $image = $request->file('image');

        if($image){

            $name_gen = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = "admin/assets/images/uploads/";
        // $last_image = $up_location.$img_name;
        $image->move($up_location, $img_name);



        unlink($up_location.$old_image);


        popular_item::find($id)->update([
            'title' => $request->title,
            'image' => $img_name,
        ]);

        // return Redirect()->back()->with('success', 'Category inserted successfully');
        return Redirect('/popular')->with('success', 'Category updated successfully');


        }
        else{

            popular_item::find($id)->update([
                'title' => $request->title,
            ]);
    
            // return Redirect()->back()->with('success', 'Category inserted successfully');
            return Redirect('/popular')->with('success', 'Category updated successfully');

        }

        


        // return view('admin.popular.edit', compact('item'));
    }

    public function delete($id){


        $deletePopular = popular_item::find($id);
        $title = $deletePopular->title;
        $deleteImage = $deletePopular->image;
        $up_location = "admin/assets/images/uploads/";

        unlink($up_location.$deleteImage);
        $deletePopular->delete();


       
        return Redirect()->back()->with('success', $title.' '. 'Category deleted successfully');

    }


}
