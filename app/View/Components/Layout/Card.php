<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public ?string $title;
    public ?string $footer;
    public ?string $class;

    /**
     * Create a new component instance.
     *
     * @param string|null $title
     * @param string|null $footer
     * @param string|null $class
     */
    public function __construct(?string $title = null, ?string $footer = null, ?string $class = null)
    {
        $this->title = $title;
        $this->footer = $footer;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.card');
    }
}
