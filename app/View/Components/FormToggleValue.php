<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormToggleValue extends Component
{
    public $key;
    public $dataForm;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($key,...$dataForm)
    {
        $this->key = $key;
        $this->dataForm = $dataForm;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-toggle-value');
    }
}
