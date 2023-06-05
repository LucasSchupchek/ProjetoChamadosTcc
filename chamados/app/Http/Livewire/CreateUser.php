<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class CreateUser extends Component
{
    public $name;
    public $email;
    public $password;
    public $role = 'user';

    public function render()
    {
        return view('livewire.create-user');
    }

    public function createUser()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|in:user,admin'
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'role' => $this->role,
        ]);

        session()->flash('message', 'User created successfully!');

        // Clear the input fields after creating the user
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->role = 'user';
    }
}