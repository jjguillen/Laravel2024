<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Boton extends Component
{
    public $type;
    public $mensaje;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $mensaje)
    {
        $this->type = $type;
        $this->mensaje = $mensaje;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.boton');
    }
}
