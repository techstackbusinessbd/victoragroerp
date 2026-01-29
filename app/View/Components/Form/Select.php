<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{

    public string $name;
    public array $options;
    public $selected;
    public bool $required;
    public ?string $class;

    /**
     * Create a new component instance.
     */
    public function __construct(string $name, array $options = [], $selected = null, bool $required = false, string $class = null)
    {
        $this->name = $name;
        $this->options = $options;
        $this->selected = $selected;
        $this->required = $required;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.select');
    }
}
