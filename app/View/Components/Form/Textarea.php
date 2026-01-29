<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    public string $name;
    public ?string $value;
    public bool $required;
    public ?string $class;
    public int $rows;
    /**
     * Create a new component instance.
     */
    public function __construct(string $name, string $value = null, bool $required = false, string $class = null, int $rows = 3)
    {
        $this->name = $name;
        $this->value = $value;
        $this->required = $required;
        $this->class = $class;
        $this->rows = $rows;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.textarea');
    }
}
