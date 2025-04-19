<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ResponsiveNavLink extends Component
{
    public function __construct(
        public string $href,
        public bool $active = false
    ) {}

    public function render()
    {
        return view('components.responsive-nav-link');
    }
} 