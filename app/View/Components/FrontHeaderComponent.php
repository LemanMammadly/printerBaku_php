<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\NavItem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class FrontHeaderComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $navItems = NavItem::all();
        $categories = Category::all();
        $user = null;
        if (Auth::user()) {
            $user = Auth::user()->name;
        }
        return view('components.front-header-component', compact('navItems', 'categories', 'user'));
    }
}
