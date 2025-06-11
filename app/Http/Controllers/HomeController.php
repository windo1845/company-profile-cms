<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Page;
use App\Models\Footer;
use App\Models\PageImage;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $lang = session('lang', 'id');

        $pages = Page::all()->map(function ($page) use ($lang) {
            return (object) [
                'slug' => $page->slug,
                'title' => $lang === 'en' && $page->title_en ? $page->title_en : $page->title,
            ];
        });        

        $footer = Footer::first();
        $aboutFooter = Page::find(2);
        $images = PageImage::all();
        $products = Product::all();

        return view('frontend.home', compact('pages', 'footer', 'aboutFooter', 'images', 'products'));
    }

    public function showPage($slug)
    {
        $lang = session('lang', 'id');
    
        $page = Page::where('slug', $slug)->firstOrFail();
    
        // Jangan ubah slug-nya, cukup ubah title & content untuk tampilan
        $page->title = $lang === 'en' && $page->title_en ? $page->title_en : $page->title;
        $page->content = $lang === 'en' && $page->content_en ? $page->content_en : $page->content;
    
        $pages = Page::all()->map(function ($page) use ($lang) {
            return (object) [
                'slug' => $page->slug,
                'title' => $lang === 'en' && $page->title_en ? $page->title_en : $page->title,
            ];
        });
    
        $footer = Footer::first();
        $images = $page->images;
    
        $products = collect();
        if ($page->slug === 'product') {
            $products = Product::all();
        }
    
        return view('frontend.show', compact('page', 'pages', 'footer', 'images', 'products'));
    }


    public function product(Product $product)
    {
        return view('frontend.product', compact('product'));
    }

}
