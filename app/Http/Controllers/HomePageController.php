<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomePageController extends Controller
{
    /**
     * @return View
     */
    public function __invoke(Category $categories): View
    {

        $cates = $categories->find(1)->descendants()->depthFirst()->get();

        return view('home', [
            'categories' => $cates
        ]);
    }
}
