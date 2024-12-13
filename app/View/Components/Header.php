<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;


class Header extends Component
{
    public bool $whiteHeader = false;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        if (Str::contains(request()->route()->getName(), ['models','legal','privacy','testdrive','sitemap'])) {
            $this->whiteHeader = true;
        } else {
            $this->whiteHeader = false;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
