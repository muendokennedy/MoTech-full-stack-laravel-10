<?php

namespace App\View\Components;

use App\Models\Admin;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public $admin = '';

    public function __construct()
    {
        //
        $this->admin = Admin::find(4);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.admin', $this->admin);
    }
}
