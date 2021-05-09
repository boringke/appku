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

        // $status = Password::sendResetLink(['email' => $this->email]);

        // if ($status == Password::RESET_LINK_SENT)
        // {
        //     session()->flash('status', __($status));
        //     $this->email = '';
        // }
        // else
        // {
        //     $this->addError('request.failed', __($status));
        // }
    }

    public function render()
    {
        return view('auth.forgot-password')->layout('layouts.guest');
    }
}
