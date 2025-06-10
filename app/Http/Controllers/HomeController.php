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
        $pages = Page::all();
        $footer = Footer::first();
        $aboutFooter = Page::find(2);
        $images = PageImage::all();
        $products = Product::all();

        return view('frontend.home', compact('pages', 'footer', 'aboutFooter','images','products'));
    }

    public function showPage($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        
        $pages = Page::all();
        $footer = Footer::first();
        $images = $page->images;

        $products = collect();

        if (Str::slug($page->title) === 'product') {
            $products = Product::all();
        }

        return view('frontend.show', compact('page', 'pages', 'footer', 'images', 'products'));
    }

    public function product(Product $product)
    {
        return view('frontend.product', compact('product'));
    }

}
