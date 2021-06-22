@section('page-title', 'Profil')
@section('page-name', 'Profil')

<div>
    <h1 class="mb-8 font-bold text-3xl">Profil</h1>

    <div class="bg-white rounded-md shadow overflow-hidden max-w-3xl">
        <form wire:submit.prevent="simpanProfil">
            <div class="p-8 -mr-6 -mb-8 flex flex-wrap">

                {{-- Nama Penuh --}}
                <x-text-input id="name" wire:model.debounce.500ms="form.name" :error="$errors->first('form.name')" group-class="pb-8 pr-5 w-full" label="Nama Penuh" />

                {{-- Alamat E-mel --}}
                <x-text-input id="email" wire:model.debounce.500ms="form.email" :error="$errors->first('form.email')" group-class="pb-8 pr-5 w-full" label="E-mel" />

                {{-- DOB --}}
                <x-text-date id="dob" wire:model.lazy="form.dob" :error="$errors->first('form.dob')"
                    group-class="pb-8 pr-5 w-full" label="Tarikh Lahir" />

                {{-- Password --}}
                <x-text-input id="password" type="password" wire:model.debounce.500ms="form.password" :error="$errors->first('form.password')"
                    group-class="pb-8 pr-5 w-full" label="Kata Laluan (Tukar Sahaja)" />

            </div>
            <div class="px-8 py-4 bg-gray-50 border-t border-gray-100 flex justify-end items-center space-x-3">
                <x-button-loading loading-target="simpanProfil" class="btn-indigo" type="submit">Simpan Profil</x-button-loading>
            </div>
        </form>
    </div>
</div>
