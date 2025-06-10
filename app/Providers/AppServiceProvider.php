<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\View;
use App\Models\Footer;
use App\Models\Page;
use App\Models\PageImage;
use App\Models\SocialMedia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('frontend.*', function ($view) {
        $view->with('footer', \App\Models\Footer::first());
        $view->with('pages', \App\Models\Page::all());
        $view->with('aboutFooter', \App\Models\Page::find(2));
        
        $aboutPage = \App\Models\Page::where('slug', 'about')->first();
        $aboutImages = $aboutPage?->images ?? collect();
        $view->with('aboutImages', $aboutImages);

        // Tambahkan ini
        $view->with('socials', SocialMedia::all());
    });
    }
}
