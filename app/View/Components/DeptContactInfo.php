<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DeptContactInfo extends Component
{
    public $name;
    public $phones;
    public $emails;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $phones, $emails)
    {
        $this->name = $name;
        $this->phones = $phones;
        $this->emails = $emails;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.dept-contact-info');
    }
}
