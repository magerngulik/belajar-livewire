<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{

    public $userId;
    public $name;
    public $email;

    public function mount($users){
        $this->userId =$users->id;
        $this->name =$users->name;
        $this->email =$users->email;
    }

    public function render()
    {
        return view('livewire.user-edit');
    }

    public function update(){
      
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|unique:users,email,'.$this->userId,
        ]);

        User::where('id',$this->userId)->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->name = NULL;
        $this->email = null;
        
        redirect()->route('user.home')->with('success', 'User Berhasil diupdate');
    }
}
