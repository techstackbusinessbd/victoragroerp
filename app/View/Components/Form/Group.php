<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Group extends Component
{
    public ?string $label;
    public ?string $name;
    public ?string $help;
    public ?string $class;
    public bool $required;

    /**
     * Create a new component instance.
     *
     * @param string|null $label
     * @param string|null $name
     * @param string|null $help
     * @param string|null $class
     * @param bool $required
     */
    public function __construct(?string $label = null, ?string $name = null, ?string $help = null, ?string $class = null, bool $required = false)
    {
        $this->label = $label;
        $this->name = $name;
        $this->help = $help;
        $this->class = $class;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.group');
    }
}
