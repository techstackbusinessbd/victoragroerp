<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Row extends Component
{
    public string $rowClass;

    /**
     * @param string $rowClass Custom classes for row e.g. justify-content-center, g-3
     */
    public function __construct(string $rowClass = 'row')
    {
        $this->rowClass = $rowClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.row');
    }
}
