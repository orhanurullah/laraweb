<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowProjects extends Component
{
    protected $user = 'Orhan';

    public function render()
    {
        return view('livewire.show-projects',[
            'user' => $this->user,
        ]);
    }
}
