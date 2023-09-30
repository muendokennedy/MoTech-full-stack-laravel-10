<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminLayout extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('layouts.admin');
    }
}
