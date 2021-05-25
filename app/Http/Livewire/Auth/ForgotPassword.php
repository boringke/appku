<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class ForgotPassword extends Component
{
    public $email = '';

    protected $rules = [
        'email' => 'required|email',
    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function requestPassword()
    {
        $this->validate();

        // reset password, send email ke pengguna
        // ...

        // Notify pengguna
        session()->flash('status', "Password request telah diemelkan kepada anda !");
    }

    public function render()
    {
        return view('auth.forgot-password')->layout('layouts.guest');
    }
}
