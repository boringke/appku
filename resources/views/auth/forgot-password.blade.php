<div>
    <div class="p-6 bg-indigo-800 min-h-screen flex justify-center items-center">
        <div class="w-full max-w-md">
            <form wire:submit.prevent="requestPassword" class="mt-8 bg-white rounded-lg shadow-xl overflow-hidden">
                <div class="px-10 py-12">
                    <h1 class="text-center font-bold text-3xl mt-6">Lupa Passowrd ?</h1>
                    <h6 class="text-center mt-3">Tidak mengapa. Kami boleh bantu kamu. Masukkan e-mel kamu</h6>
                    <div class="mx-auto mt-6 w-24 border-b-2"></div>
                    <x-text-input wire:model.debounce.500ms="email" :error="$errors->first('email')" id="email" label="E-mel" type="email" group-class="mt-10" autofocus autocapitalize="off" />
                </div>
                <div class="px-10 py-4 bg-gray-100 border-t border-gray-100 flex justify-end items-center space-x-3">
                    <x-button-loading loading-target="requestPassword" class="btn-indigo" type="submit">
                        Reset Password
                    </x-button-loading>
                    <a href="/" class="btn-indigo" >Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
