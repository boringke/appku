@section('page-title', 'Dashboard')
@section('page-name', 'Dashboard')

<div>
    <h1 class="mb-8 font-bold text-3xl">Dashboard</h1>
    
    <p class="mb-8 leading-normal">
        Assalamualaikum & Salam Sejahtera coders !
    </p>

    <p class="mb-8 leading-normal">
        Ini adalah merupakan aplikasi contoh Single Page Application (SPA)<br>
        untuk memudahkan pembangunan web moden.<br><br>

        Dengan menggunakan <a href="https://laravel.com" target="_blank" class="font-bold">Framework Laravel</a> dan juga komponen dari<br>
        <a href="https://laravel-livewire.com" target="_blank" class="font-bold">Livewire</a>, <a href="https://tailwindcss.com" target="_blank" class="font-bold">TailwindCSS</a> dan juga <a href="https://github.com/alpinejs/alpine" target="_blank" class="font-bold">AplineJS</a>,
        anda boleh membangunkan<br>
        aplikasi SPA dengan mudah dan cepat.
    </p>
    
    <h1 class="font-bold mb-5">Contoh Panggil Method / Functions</h1>

    <div class="mb-8 flex flex-col md:flex-row space-y-3 md:space-y-0 space-x-0 md:space-x-3">
        <button type="button" wire:click="testMethod('Sudirman')" class="cursor-pointer btn-indigo">Livewire testMethod('Sudirman')</button>
        <button type="button" wire:click="error404" class="cursor-pointer btn-indigo">Livewire method tak jumpa</button>
    </div>

    <p class="leading-normal">
        👆 Butang ini menunjukkan contoh bagaimana Livewire panggil<br>
        method/function dalam controller class.
    </p>

    <p class="mt-8 leading-normal">
        Sos kod boleh dapatkan di <a href="https://github.com/boringke/appku.git" target="_blank" class="font-bold">Github AppKu</a>.
    </p>
</div>
