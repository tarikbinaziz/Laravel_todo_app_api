<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = ['title', 'description', 'price', 'image',"color","size", "category_id",];

   public function category()
   {
       return $this->belongsTo(Category::class);
   }
}
