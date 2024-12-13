<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class QuickAction extends Component
{
    public $nameModal;
    /**
     * Create a new component instance.
     */
    public function __construct($nameModal = "modal-brochure")
    {
        $this->nameModal = $nameModal;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.quick-action');
    }
}
