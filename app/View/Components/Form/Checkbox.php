<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    public string $name;
    public $value;
    public bool $checked;
    public ?string $class;
    /**
     * Create a new component instance.
     */
    public function __construct(string $name, $value = 1, bool $checked = false, string $class = null)
    {
        $this->name = $name;
        $this->value = $value;
        $this->checked = $checked;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.checkbox');
    }
}
