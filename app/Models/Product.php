<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','name_en','description_en','price','image'];
    
    public function getImageUrl()
    {
        return asset('storage/products/' . $this->image);
    }


}
