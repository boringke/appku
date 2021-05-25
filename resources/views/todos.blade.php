@section('page-title', 'Todo List')
@section('page-name', 'Todo List')

<div>
    <h1 class="mb-8 font-bold text-3xl">Todo List</h1>

    <div class="mb-6 flex justify-between items-center">
      <x-text-input id="search-todo" 
            wire:model.debounce.500ms="search" 
            group-class="w-full" 
            label="Carian" 
            placeholder="Carian..."
        />
    </div>

    <div class="bg-white rounded-md shadow overflow-x-auto">
      <table class="w-full whitespace-nowrap">
        <tr class="text-left font-bold">
            <th class="px-6 pt-6 pb-4">
                <x-text-input id="name" 
                    wire:model.debounce.500ms="title" 
                    wire:keydown.enter="simpanTodo" 
                    :error="$errors->first('title')" 
                    group-class="w-full" 
                    label="" 
                    placeholder="Tambah todo baru... (enter)"
                />
            </th>
        </tr>
        @forelse ($todos as $todo)
            <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                <td class="border-t flex justify-between">
                    <div class="cursor-pointer px-6 py-4 flex items-center focus:text-indigo-500 {{ $todo->selesai ? 'line-through':'' }}">
                        <input 
                            wire:change="setSelesai({{ $todo->id }})" 
                            type="checkbox" 
                            class="mr-5" {{ $todo->selesai ? 'checked':'' }}
                        />
                        <a wire:click="editTodo({{ $todo->id }})">    
                            {{ $todo->tajuk }}
                        </a>
                    </div>                
                    <a 
                        onclick="confirm('Anda pasti ?') || event.stopImmediatePropagation()" 
                        wire:click="padamTodo({{ $todo->id }})" 
                        class="cursor-pointer px-6 py-3 flex items-center focus:text-indigo-500"
                    >
                        <x-icon name="trash" class="block w-4 h-4 fill-red-400" />
                    </a>
                </td>
            </tr>
        @empty
            <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                <td class="border-t px-6 py-10 text-center" colspan="4">- Tiada data todo list -</td>
            </tr>
        @endforelse
        
      </table>
    </div>
    <div class="mt-3">
        {{ $todos->links() }}
    </div>
</div>
