<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;


class categoryController extends Controller
{
    //

    public function category_view(){

        $categories = category::all();
        return view('admin.sidemenu.category.categoryIndex', compact('categories'));
    }

    public function addCategory(Request $request){

        $validatedData = $request->validate([

            'category_name' => 'required',
            'category_icon' => 'required',
        ]);
        

        $category_name = $request->category_name;
        $category_icon = $request->category_icon;
        $category_slug = strtolower(str_replace(' ', '-', $category_name));

        category::insert([
            'category_name' => $category_name,
            'category_icon' => $category_icon,
            'category_slug' => $category_slug,
        ]);

        return redirect()->back();

    }

    public function deleteCategory($id){

        $itemDelete = category::find($id);

        $itemDelete->delete();
        return redirect()->back();


    }

    public function editCategory($id){

        $categories = category::find($id);

        return view('admin.sidemenu.category.edit_category', compact('categories'));


    }

    public function updateCategory(Request $request, $id){

        $validatedData = $request->validate([

            'category_name' => 'required',
            'category_icon' => 'required',
        ]);
        

        $category_name = $request->category_name;
        $category_icon = $request->category_icon;
        $category_slug = strtolower(str_replace(' ', '-', $category_name));

        category::find($id)->update([
            'category_name' => $category_name,
            'category_icon' => $category_icon,
            'category_slug' => $category_slug,
        ]);

        return redirect('/category/view');


    }
}
