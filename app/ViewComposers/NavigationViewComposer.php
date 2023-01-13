<?php

namespace App\ViewComposers;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class NavigationViewComposer
{

    public function compose(View $view)
    {

        $categories = Category::with('media')->orderBy('title')->tree()->get()->toTree();

        return $view->with('categories', $categories);
    }

}
