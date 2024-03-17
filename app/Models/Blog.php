<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title','small_desc','description','section_desc','meta_title','meta_desc','category_id','sub_category_id', 'is_active'];
	protected $dates = ['created_at', 'updated_at'];
}
