<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subcategory;
use App\Models\category;


class subCategoryController extends Controller
{
    //

    public function subCategory_view(){

        $subCategories = subCategory::all();
        $categories =category::all();

        return view('admin.sidemenu.category.subCategory.subCategoryIndex', compact('subCategories', 'categories')); 
    }
}
