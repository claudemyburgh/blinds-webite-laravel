<?php

namespace App\ViewComposers;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class CategoriesSelectViewComposer
{

    public function compose(View $view)
    {

        $categories = Category::live()->orderBy('title')->tree()->get()->toTree();


        return $view->with('categories', $categories);
    }


}
