<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class HomePageController extends Controller
{
    /**
     * @return View
     */
    public function __invoke(): View
    {
        $categories = Cache::rememberForever('hero_links', function () {
           return Category::find(1)->descendants()->depthFirst()->get();
        });

        return view('home', [
            'categories' => $categories
        ]);
    }
}
