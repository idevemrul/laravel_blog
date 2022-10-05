<?php

namespace App\View\Components;

use Illuminate\View\Component;

class component1 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    //  =====data from view======

    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.component1');
    }
}
