<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;

class ProductIndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Category $category
     * @return View
     */
    public function __invoke(Category $category): View
    {
        $category->load('products.media');


        return view("products.index", compact('category'));
    }
}
