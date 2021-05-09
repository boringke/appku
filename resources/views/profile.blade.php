@section('page-title', 'Profil')
@section('page-name', 'Profil')

<div>
    <h1 class="mb-8 font-bold text-3xl">Profil</h1>

    <div class="bg-white rounded-md shadow overflow-hidden max-w-3xl">
        <form wire:submit.prevent="simpanProfil">
            <div class="p-8 -mr-6 -mb-8 flex flex-wrap">
                <x-text-input id="name" wire:model.debounce.500ms="form.name" :error="$errors->first('form.name')" group-class="pb-8 pr-5 w-full" label="Nama Penuh" />
                <x-text-input id="email" wire:model.debounce.500ms="form.email" :error="$errors->first('form.email')" group-class="pb-8 pr-5 w-full" label="E-mel" />
                {{-- 
                <text-input v-model="form.email" :error="form.errors.email" class="pr-6 pb-8 w-full lg:w-1/2"
                    label="Email" />
                <text-input v-model="form.password" :error="form.errors.password" class="pr-6 pb-8 w-full lg:w-1/2"
                    type="password" autocomplete="new-password" label="Password" />
                <select-input v-model="form.owner" :error="form.errors.owner" class="pr-6 pb-8 w-full lg:w-1/2"
                    label="Owner">
                    <option :value="true">Yes</option>
                    <option :value="false">No</option>
                </select-input>
                <file-input v-model="form.photo" :error="form.errors.photo" class="pr-6 pb-8 w-full lg:w-1/2"
                    type="file" accept="image/*" label="Photo" /> --}}
            </div>
            <div class="px-8 py-4 bg-gray-50 border-t border-gray-100 flex justify-end items-center">
                <x-button-loading loading-targer="simpanProfil" class="btn-indigo" type="submit">Simpan Profil</x-button-loading>
            </div>
        </form>
    </div>
</div>
