<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\NewspaperCutout as CutoutModel; // Import your model

class NewspaperCutout extends Component
{
    public $cutouts; // Property to hold the cutouts

    /**
     * Create a new component instance.
     *
     * @param  \Illuminate\Database\Eloquent\Collection  $cutouts
     * @return void
     */
    public function __construct($cutouts)
    {
        $this->cutouts = $cutouts; // Assign the cutouts to the property
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.newspaper-cutout');
    }
}