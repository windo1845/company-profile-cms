<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title','slug','content','title_en','content_en',];

    public function images()
    {
        return $this->hasMany(PageImage::class);
    }

}
