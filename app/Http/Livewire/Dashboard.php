<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{

    public function testMethod($data)
    {
        dd("Method/Function : testMethod() : data = `" . $data . "`");
    }

    public function render()
    {
        return view('dashboard');
    }
}
