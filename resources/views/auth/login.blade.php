<div>
    <div class="p-6 bg-indigo-800 min-h-screen flex justify-center items-center">
        <div class="w-full max-w-md">
            <form wire:submit.prevent="login" class="mt-8 bg-white rounded-lg shadow-xl overflow-hidden">
                <div class="px-10 py-12">
                    <a href="/"><x-logo class="block mx-auto w-full max-w-xs fill-white" height="80" /></a>
					<h1 class="text-center font-bold text-3xl mt-6">{{config('app.name')}}</h1>
                    <h6 class="text-center text-cool-blue-500 mt-3 leading-normal">AppKu oleh Zulkifli Mohamed.<br>Aplikasi <i>Single Page Application (SPA)</i> !</h6>
                    <div class="mx-auto mt-6 w-24 border-b-2"></div>

                    @error('login.failed')
                        <div class="h5 form-error mt-5 font-semibold">{{ $message }}</div>
                    @enderror

                    <x-text-input wire:model.debounce.500ms="form.email" wire:key="form.email" :error="$errors->first('form.email')" id="email" label="Alamat E-mel" type="email" group-class="mt-5" autofocus autocapitalize="off" />
                    <x-text-input wire:model.debounce.500ms="form.password" wire:key="form.password" :error="$errors->first('form.password')" id="password" group-class="mt-6" label="Kata Laluan" type="password" />

                    <div class="mt-6">
                        <label class="select-none flex items-center space-x-2" for="remember">
                            <input wire:model="form.remember" id="remember" class="mr-1" type="checkbox" />
                            <span class="text-sm">Ingat Ku</span>
                        </label>
                    </div>
                </div>
                <div class="px-10 py-4 bg-gray-100 border-t border-gray-100 flex justify-between items-center">
                    <a href="{{ route('register') }}" class="hover:underline" tabindex="-1">Daftar Akaun</a>

                    <x-button-loading loading-target="login" class="btn-indigo" type="submit">
                        Log Masuk
                    </x-button-loading>
                </div>
            </form>
        </div>
    </div>
</div>
