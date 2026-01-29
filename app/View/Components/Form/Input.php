<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public string $name;
    public string $type;
    public ?string $value;
    public bool $required;
    public ?string $class;

    /**
     * Create a new component instance.
     */
    public function __construct(string $name, string $type = 'text', string $value = null, bool $required = false, string $class = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        $this->required = $required;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}
