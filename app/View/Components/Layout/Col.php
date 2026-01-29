<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Col extends Component
{
    public string $colClass;

    /**
     * @param string $colClass Custom column class e.g. col-md-4, col-lg-3
     */
    public function __construct(string $colClass = 'col-md-12')
    {
        $this->colClass = $colClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.col');
    }
}
