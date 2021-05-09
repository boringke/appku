<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MainMenu extends Component
{
    protected $listeners = ['logout'];

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function render()
    {
        return view('layouts.main-menu');
    }
}
