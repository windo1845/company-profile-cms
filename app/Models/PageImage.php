<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageImage extends Model
{
    protected $fillable = ['page_id', 'image'];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
    
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

}

