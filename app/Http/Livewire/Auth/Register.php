<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('auth.register')->layout('layouts.guest');
    }
}
