<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $form = [
        'email' => 'admin@appku.com',
        'password' => 'password',
        'remember' => false,
    ];

    protected $rules = [
        'form.email' => 'required|email',
        'form.password' => 'required|min:3',
    ];

    protected $validationAttributes = [
        'form.email' => 'e-mail address',
        'form.password' => 'password',
    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }
    
    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->form['email'], 'password' => $this->form['password']], $this->form['remember']))
        {
            return redirect()->route('dashboard');
        }

        $this->addError('login.failed', 'Login Failed ! Please enter your valid account.');
    }
    
    public function render()
    {
        return view('auth.login')->layout('layouts.guest');
    }
}
