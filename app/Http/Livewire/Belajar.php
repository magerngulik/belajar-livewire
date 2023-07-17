<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Belajar extends Component
{
    public $name = '';
    public $check = false;
    public function render()
    {
        return view('livewire.belajar');
    }
}
