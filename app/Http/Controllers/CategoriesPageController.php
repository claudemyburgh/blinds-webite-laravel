<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class CategoriesPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return View
     */
    public function __invoke(Category $categories): View
    {
        $categories = Category::with('media', 'products')->orderBy('title')->tree()->get()->toTree();
        return view('categories.index', [
            'categories' => $categories
        ]);
    }
}
