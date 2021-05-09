<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public $saved = false;
    public $form = [
        'name' => '',
        'email' => '',
    ];

    protected $rules = [
        'form.name' => 'required|max:255',
        'form.email' => 'required|email',
    ];

    public function mount()
    {
        $this->form['name'] = auth()->user()->name;
        $this->form['email'] = auth()->user()->email;
    }

    public function simpanProfil()
    {
        $profilData = $this->validate();

        auth()->user()->update($profilData['form']);

        $this->emit('notify-success', 'Profil telah berjaya dikemaskini !');
    }

    public function render()
    {
        return view('profile');
    }
}
