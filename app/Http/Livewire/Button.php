<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $st = false;
    public function state()
    {
        $this->st = !($this->st);
        return !$this->st;
    }

    public function render()
    {
        return view('livewire.button', [
            'state' => $this->st
        ]);
    }
}
