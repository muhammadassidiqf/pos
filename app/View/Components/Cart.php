<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cart extends Component
{
    public $cart;
    public $total;

    public function __construct($cart = null, $total = 0)
    {
        $this->cart = $cart;
        $this->total = $total;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.cart');
    }
}
