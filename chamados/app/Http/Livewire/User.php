<?php

namespace App\Http\Livewire;

use Livewire\Component;

class User extends Component
{
    public function render()
    {
        return view('usuarios.show');
    }

    // public function create()
    // {
    //     $this->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6',
    //     ]);

    //     User::create([
    //         'name' => $this->name,
    //         'email' => $this->email,
    //         'password' => bcrypt($this->password),
    //         'role' => $this->role,
    //     ]);

    //     session()->flash('message', 'User created successfully!');

    //     // Clear the input fields after creating the user
    //     $this->reset(['name', 'email', 'password']);
    // }
}
