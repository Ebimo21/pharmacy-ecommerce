<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class popular_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        // 'created_at'
        'image',

        
    ];
}

