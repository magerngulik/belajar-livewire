<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class UserCreate extends Component
{
    public $name;
    public $email;
    public $password;
    public $check = false;

    public function render()
    {
        return view('livewire.user-create');
    }

    public function store(){
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->name = NULL;
        $this->email = null;
        $this->password = null;
        session()->flash('success', 'User barhasil di buat');
        $this->emit('userStore');
    }
}
