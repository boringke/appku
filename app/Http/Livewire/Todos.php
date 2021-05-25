<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Livewire\WithPagination;

class Todos extends Component
{
    use WithPagination;

    public $title = '';
    public $editId = null;
    public $search = '';

    protected $rules = [
        'title' => 'required|min:10|unique:todos,tajuk',
    ];
    
    
    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function simpanTodo()
    {
        $this->validate();

        if ($this->editId != null)
        {
            Todo::find($this->editId)->update([
                'tajuk' => $this->title
            ]);
        }
        else
        {
            Todo::create([
                'user_id' => auth()->id(),
                'tajuk' => $this->title,
                'selesai' => false,
            ]);
        }        

        $this->title = '';
        $this->editId = null;
    }

    public function padamTodo($id)
    {
        Todo::find($id)->delete();
    }

    public function setSelesai($id)
    {
        $todo = Todo::find($id);
        $todo->selesai = !$todo->selesai;
        $todo->save();
    }

    public function editTodo($id)
    {
        $todo = Todo::find($id);
        $this->title = $todo->tajuk;
        $this->editId = $todo->id;
    }

    public function render()
    {
        return view('todos', [
            'todos' => Todo::where('tajuk', 'like', '%'.$this->search.'%')->orderBy('id', 'desc')->paginate(5)
        ]);
    }
}
