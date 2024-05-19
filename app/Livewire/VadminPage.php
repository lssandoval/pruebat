<?php

namespace App\Livewire;

use Livewire\Component;

class VadminPage extends Component
{
    public function mostrarCrud()
    {
        return redirect('/crud');
    }

    public function render()
    {
        return view('livewire.vadmin-page');
    }
}
