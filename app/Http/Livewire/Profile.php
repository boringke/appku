<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Profile extends Component
{
    public $saved = false;
    public $form = [
        'name' => '',
        'email' => '',
        'dob' => '',
        'password' => '',
    ];

    protected $rules = [
        'form.name' => 'required|max:255',
        'form.email' => 'required|email',
        'form.dob' => 'required|date_format:d/m/Y',
        'form.password' => 'sometimes|min:3',
    ];

    protected $validationAttributes = [
        'form.name' => 'name',
        'form.name' => 'e-mail address',
        'form.dob' => 'date of birth (dob)',
        'form.password' => 'password',
    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function mount()
    {
        $this->form['name'] = auth()->user()->name;
        $this->form['email'] = auth()->user()->email;
        $this->form['dob'] = optional(auth()->user()->dob)->format('d/m/Y');
    }

    public function simpanProfil()
    {
        $this->validate();

        $data['name'] = $this->form['name'];
        $data['email'] = $this->form['email'];
        $data['dob'] = Carbon::createFromFormat('d/m/Y', $this->form['dob'])->format('Y-m-d');
        if ($this->form['password']) $data['password'] = Hash::make($this->form['password']);

        if (auth()->user()->id != 1) auth()->user()->update($data);

        $this->emit('notify-success', 'Profil anda telah berjaya dikemaskini !');
    }

    public function render()
    {
        return view('profile');
    }
}
