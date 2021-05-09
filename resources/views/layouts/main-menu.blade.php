<div>
    <div class="space-y-3">
        <div>
            <a href="{{ route('dashboard') }}" class="flex items-center group py-3">
                <x-icon name="dashboard" class="w-4 h-4 mr-2 {{ (Route::currentRouteName() == 'dashboard') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white' }}" />
                <div class="{{ (Route::currentRouteName() == 'dashboard') ? 'text-white' : 'text-indigo-300 group-hover:text-white' }}">Dashboard</div>
            </a>
        </div>
        <div>
            <a href="{{ route('contacts') }}" class="flex items-center group py-3">
                <x-icon name="users" class="w-4 h-4 mr-2 {{ (Route::currentRouteName() == 'contacts') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white' }}" />
                <div class="{{ (Route::currentRouteName() == 'contacts') ? 'text-white' : 'text-indigo-300 group-hover:text-white' }}">Contacts</div>
            </a>
        </div>
        <div>
            <a wire:click="$emit('logout')" class="cursor-pointer flex items-center group py-3">
                <x-icon name="logout" class="w-4 h-4 mr-2 fill-indigo-400 group-hover:fill-white" />
                <div class="text-indigo-300 group-hover:text-white">Log Keluar</div>
            </a>
        </div>
    </div>
</div>
