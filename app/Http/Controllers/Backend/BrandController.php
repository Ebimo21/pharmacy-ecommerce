<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Carbon;

use App\Models\Brand;

class BrandController extends Controller
{
    //

    public function BrandView(){

        $brands = Brand::oldest()->get();

        return view('admin.sidemenu.brands.brand_view', compact('brands'));

    }

    public function addBrand(Request $request){

        $validatedData = $request->validate([
            'brand_name' => 'required',
            'image' => 'required',
            
        ]);

        $image = $request->file('brand_image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = "admin/assets/images/uploads/";
        $last_image = $up_location.$img_name;
        $image->move($up_location, $img_name);

        brand::insert([
            // 'user_id' =>Auth::user()->id,
            'brand_name' => $request->brand_name,
            'brand_slug'=> $request->brand_name,
            'brand_image'=> $img_name,
            'created_at'=> Carbon::now(),
            
        ]);

        return Redirect()->back()->with('success', 'Category inserted successfully');

    }


    public function editBrand($id){
        $brands = brand::find($id);
        // $item = popular_item::all();


        return view('admin.sidemenu.brands.edit-brand', compact('brands'));
    }
   
   
    public function updateBrand(Request $request, $id){

        $validatedData = $request->validate([
            'title' => 'required',
            'image' => 'required',
            
        ]);

        $old_image = $request->old_image;

        $image = $request->file('image');

        if($image){

            $name_gen = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = "admin/assets/images/uploads/";
        $last_image = $up_location.$img_name;
        $image->move($up_location, $img_name);



        unlink($up_location.$old_image);


        brand::find($id)->update([
            'title' => $request->title,
            'image' => $img_name,
        ]);

        // return Redirect()->back()->with('success', 'Category inserted successfully');
        return Redirect()->back()->with('success', 'Category updated successfully');


        }
        else{

            brand::find($id)->update([
                'title' => $request->title,
            ]);
    
            // return Redirect()->back()->with('success', 'Category inserted successfully');
            return Redirect('/popular')->with('success', 'Category updated successfully');

        }

        


        // return view('admin.popular.edit', compact('item'));
    }

    public function deleteBrand($id){


        $deleteBrand = brand::find($id);
        $deleteImage = $deleteBrand->brand_image;
        $up_location = "admin/assets/images/uploads/";

        unlink($up_location.$deleteImage);
        $deleteBrand->delete();

        return Redirect()->back()->with('success', 'Category deleted successfully del');

    }
}
