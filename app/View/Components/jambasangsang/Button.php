<?php

namespace App\View\Components\Jambasangsang;

use Illuminate\View\Component;

class Button extends Component
{
    public $type;

    public $name;

    public $id;

    public $class;

    public function __construct($name, $id, $class, $type)
    {
        $this->type  = $type;
        $this->name  = $name;
        $this->id    = $id;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.jambasangsang.button');
    }
}
