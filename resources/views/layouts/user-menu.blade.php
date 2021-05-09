<div>
    <div x-data="{ open: false }" class="mt-1">
        <div @click="open = true" class="flex items-center cursor-pointer select-none group">
            <div class="text-gray-700 group-hover:text-indigo-600 focus:text-indigo-600 mr-1 whitespace-nowrap">
                <span>{{ auth()->user()->name }}</span>
            </div>
            <x-icon name="cheveron-down" class="w-5 h-5 group-hover:fill-indigo-600 fill-gray-700 focus:fill-indigo-600" />
        </div>
        
        <div x-show="open" @click.away="open = false">
            <div @click="open = false" style="position: fixed; top: 0; right: 0; left: 0; bottom: 0; z-index: 99998; background: black; opacity: .2"></div>
            <div @click="open = false" class="right-0 pr-12" style="position: absolute; z-index: 99999;">
                <div class="mt-2 py-2 shadow-xl bg-white rounded text-sm">
                    <a href="{{ route('profile') }}" class="block px-6 py-2 hover:bg-indigo-500 hover:text-white flex items-center space-x-3">
                        <x-icon name="user" class="w-4 h-4" />
                        <span>Profil</span>
                    </a>
                    <a wire:click="$emit('logout')" class="cursor-pointer block px-6 py-2 hover:bg-indigo-500 hover:text-white w-full text-left flex items-center space-x-3">
                        <x-icon name="logout" class="w-4 h-4" />
                        <span>Log Keluar</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

