<div>
    <div class="p-6 bg-indigo-800 min-h-screen flex justify-center items-center">
        <div class="w-full max-w-md">
            <form wire:submit.prevent="register" class="mt-8 bg-white rounded-lg shadow-xl overflow-hidden">
                <div class="px-10 py-12">
                    <h1 class="text-center font-bold text-3xl mt-6">Daftar Akaun</h1>
                    <h6 class="text-center mt-3">Mari daftar akaun baru.</h6>
                    <div class="mx-auto mt-6 w-24 border-b-2"></div>

                    <x-text-input wire:model.debounce.500ms="name" wire:key="name" :error="$errors->first('name')"
                        id="name" label="Nama" group-class="mt-5" autofocus autocapitalize="off" />
                    <x-text-input wire:model.debounce.500ms="email" wire:key="email" :error="$errors->first('email')"
                        id="email" label="Alamat E-mel" type="email" group-class="mt-5" />
                    <x-text-input wire:model.debounce.500ms="password" wire:key="password" :error="$errors->first('password')"
                        id="password" name="password" label="Kata Laluan" type="password" group-class="mt-5" />
                    <x-text-input wire:model.debounce.500ms="password_confirmation" wire:key="password_confirmation" :error="$errors->first('password_confirmation')"
                        id="password_confirmation" name="password_confirmation" label="Pengesahan Kata Laluan" type="password" group-class="mt-5" />

                </div>
                <div class="px-10 py-4 bg-gray-100 border-t border-gray-100 flex justify-end items-center space-x-3">
                    <x-button-loading loading-target="register" class="btn-indigo" type="submit">
                        Daftar Akaun
                    </x-button-loading>
                    <a href="/" class="btn-indigo">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
