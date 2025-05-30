<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Dropdown extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $align = 'right',
        public string $width = '48'
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.dropdown');
    }

} 