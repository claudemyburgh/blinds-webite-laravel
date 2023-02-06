<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CatalogPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return View
     */
    public function __invoke(Category $categories): View
    {

        SEOMeta::setTitle('List');

        $categories = Category::live()->with('media', 'products')->orderBy('title')->tree()->get()->toTree();

        return view('catalog.index', [
            'categories' => $categories
        ]);
    }
}
