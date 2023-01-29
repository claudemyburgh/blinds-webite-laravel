<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class CategoryList extends Component
{
    public $categories;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = Category::with('products.media')->tree()->get()->toTree();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.category-list');
    }
}
