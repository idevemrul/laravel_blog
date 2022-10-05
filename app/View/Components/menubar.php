<?php

namespace App\View\Components;

use Illuminate\View\Component;

class menubar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $a;
    public $b;
    public $c;
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.menubar');
    }
}
