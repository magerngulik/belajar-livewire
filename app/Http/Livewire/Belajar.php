<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Belajar extends Component
{
    public $name = '';
    public $check = false;
    public $jumlah = 0;
    public function render()
    {
        return view('livewire.belajar');
    }

    public function plus(){
        $this->jumlah++;
    }
    public function mines(){
        $this->jumlah--;
    }
}
