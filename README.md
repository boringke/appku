## AppKu - Single Page Application (SPA) oleh Zulkifli Mohamed

- Framework Laravel v8.x
- Livewire
- TailwindCSS
- AlpineJS
- PHP 7.4.x ke atas

### Demo Unit

- https://appku.zulmd.com


## Installation

Cara dan langkah demi langkah untuk mencuba aplikasi AppKu. Sila rujuk langkah seperti dibawah.

Clone repo ke localhost:

```sh
git clone https://github.com/BoringKe/appku.git appku
cd appku
```

Install Composer:

```sh
composer install
```

Install NPM Package:

```sh
npm install && npm run dev
```

Setup Configuration:

```sh
cp .env.example .env
```

Generate laravel key baru

```sh
php artisan key:generate
```

Migrate database:

```sh
php artisan migrate --seed
```

Run laravel:

```sh
php artisan serve
```

Login akaun E-mel & Password:

- E-mail : admin@appku.io
- Password : password

Selamat mencuba ! Bye !!!!
