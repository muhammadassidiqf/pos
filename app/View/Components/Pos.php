<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Pos extends Component
{
    public $category;
    public $cart;
    public function __construct($category = null, $cart = null)
    {
        $this->category = $category;
        $this->cart = $cart;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.pos');
    }
}
