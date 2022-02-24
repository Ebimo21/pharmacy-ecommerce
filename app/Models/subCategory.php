<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subCategory extends Model
{
    use HasFactory;

    protected $fillable = [

        'category_id',
        'subCategory_id',
        'subCategory_name',
        'subCategory_slug',
        
    ];
}
