<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ScrollingMarquee extends Component
{
    public $messages;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($messages)
    {
        $this->messages = $messages;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.scrolling-marquee');
    }
}