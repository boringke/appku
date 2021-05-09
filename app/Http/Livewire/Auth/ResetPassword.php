<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class ResetPassword extends Component
{
    public function render()
    {
        return view('auth.reset-password')->layout('layouts.guest');
    }
}
