@section('page-title', 'Dashboard')
@section('page-name', 'Dashboard')

<div>
    <h1 class="mb-8 font-bold text-3xl">Dashboard</h1>
    
    <p class="mb-8 leading-normal">
        Hai komer !<br>
        Selamat datang ke AppKu oleh Zulkifli Mohamed (putera).
    </p>

    <p class="mb-8 leading-normal">
        Ini adalah merupakan aplikasi contoh untuk memudahkan pembangunan web moden.<br>
        Dengan menggunakan <a href="https://laravel.com" target="_blank" class="font-bold">Framework Laravel</a> dan juga component dari<br>
        <a href="https://laravel-livewire.com" target="_blank" class="font-bold">Livewire</a>, <a href="https://tailwindcss.com" target="_blank" class="font-bold">TailwindCSS</a> juga <a href="https://github.com/alpinejs/alpine" target="_blank" class="font-bold">AplineJS</a>,
        anda boleh membangunkan aplikasi dengan mudah.
    </p>
    
    <div class="mb-8 flex space-x-3">
        <a wire:click="testMethod('Sudirman')" class="cursor-pointer btn-indigo">Livewire method test (data = 'Sudirman')</a>
        <a wire:click="error404" class="cursor-pointer btn-indigo ml-1">Livewire method tak jumpa</a>
    </div>

    <p class="leading-normal">
        👆 Butang ini nak nunjukkan contoh macam mana Livewire panggil<br>
        method (function) dalam controller class.
    </p>

    <p class="mt-8 leading-normal">
        Jom contribute sesama di <a href="https://github.com/BoringKe/appku.git" target="_blank" class="font-bold">Github AppKu</a>.
    </p>
</div>
