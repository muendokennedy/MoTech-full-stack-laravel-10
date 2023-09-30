<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminGuestLayout extends Component
{
    public function render(): View
    {
        return view('layouts.adminguest');
    }
}
