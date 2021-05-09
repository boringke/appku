<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{

    public function testMethod($name)
    {
        dd("Ini adalah method testMethod() : data = '" . $name."'");
    }

    public function render()
    {
        return view('dashboard');
    }
}
