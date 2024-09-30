<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IndexCircularComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $notices;

    public function __construct($notices)
    {
        $this->notices = $notices;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.index-circular-component');
    }
}
