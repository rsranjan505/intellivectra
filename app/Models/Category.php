<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','small_desc','meta_title','meta_desc','parent_id', 'is_active'];
	protected $dates = ['created_at', 'updated_at'];
}
