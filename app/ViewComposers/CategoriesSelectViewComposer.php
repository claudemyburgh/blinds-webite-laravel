<?php

namespace App\ViewComposers;

use App\Models\Category;
use Illuminate\View\View;

class CategoriesSelectViewComposer
{

    public function compose(View $view)
    {

        $categories = Category::where(function ($query) {
            $query->where('parent_id', null);
        })->orderBy('title')->get();

        return $view->with('categories', $categories);
    }


}
