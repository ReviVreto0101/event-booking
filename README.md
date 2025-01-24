<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


Nëse faqet e projektit janë të ndërtuara duke përdorur **Blade.php** (sistemi i shablloneve të Laravel), atëherë konfigurimi dhe struktura e projektit do të përditësohen pak për të reflektuar këtë ndryshim. Më poshtë është një version i përditësuar i **README.md**, duke marrë parasysh që frontend-i është pjesë e shablloneve të Laravel.

---



# Event Booking Website

Ky projekt është një sistem për rezervimin e biletave për evente, i zhvilluar duke përdorur **Laravel** për backend dhe **Blade.php** për shabllonet e frontend-it. Gjithashtu, përfshin një panel administrativ për menaxhimin e rezervimeve.

---

## **Përmbajtja**

1. [Kërkesat për Instalimin](#kërkesat-për-instalimin)  
2. [Etapat për Implementimin](#etapat-për-implementimin)  
   - [Instalimi i Backend dhe Frontend](#1-instalimi-i-backend-dhe-frontend)  
3. [Konfigurimi](#konfigurimi)  
4. [Struktura e Faqeve Blade](#struktura-e-faqeve-blade)  
5. [Testimi i Projektit](#testimi-i-projektit)  
6. [Funksionalitetet Kryesore](#funksionalitetet-kryesore)  

---

## **Kërkesat për Instalimin**

Sigurohuni që keni instaluar:

- **PHP** (versioni 8.0 ose më i lartë)  
- **Composer** (menaxher paketash për PHP)  
- **Node.js** dhe **npm** (për menaxhimin e varësive frontend)  
- **Database** (MySQL ose MariaDB)  
- **Web Server** (p.sh., Apache ose Nginx)  
- **Git** (për klonimin e projektit)  
- **WAMP/XAMPP** (për zhvillim lokal, opsionale)

---

## **Etapat për Implementimin**

### **1. Instalimi i Backend dhe Frontend**

1. **Klononi Projektin nga Repository**:  
   ```bash
   git clone https://github.com/username/event-booking.git
   cd event-booking
   ```

2. **Instaloni varësitë me Composer**:  
   ```bash
   composer install
   ```

3. **Kopjoni skedarin `.env.example` në `.env`**:  
   ```bash
   cp .env.example .env
   ```

4. **Gjeneroni çelësin e aplikacionit**:  
   ```bash
   php artisan key:generate
   ```

5. **Konfiguroni bazën e të dhënave në `.env`**:  
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=event_booking
   DB_USERNAME=root
   DB_PASSWORD=''
   ```

6. **Ekzekutoni migrimet për të krijuar tabelat në bazën e të dhënave**:  
   ```bash
   php artisan migrate
   ```

7. **Seedoni të dhëna testimi (opsionale)**:  
   ```bash
   php artisan migrate --seed
   ```

8. **Instaloni varësitë e frontend-it**:
   Instaloni Node.js dhe me pas ne terminal ekzekuto 
   ```bash
   npm install
   npm run dev
   ```

10. **Nisni serverin lokal të Laravel**:  
   ```bash
   php artisan serve
   ```

---

## **Konfigurimi**

1. **Rregullimi i Rrugëve**  
   - Të gjitha rrugët janë të vendosura në `routes/web.php`.  
   - Shembull:
     ```php
     Route::get('/', [HomeController::class, 'index'])->name('home');
     Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('auth')->name('admin.dashboard');
     ```

2. **Middleware për Autentikim**  
   - Sigurohuni që të përdorni middleware për të mbrojtur rrugët e dashboard-it:  
     ```php
     Route::group(['middleware' => 'auth'], function () {
         Route::get('/admin/dashboard', [AdminController::class, 'index']);
     });
     ```

3. **Integrimi i CSS dhe JavaScript**  
   - Përdorni **Blade** për të përfshirë skedarët CSS dhe JS në faqet tuaja:
     ```blade
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <script src="{{ asset('js/app.js') }}" defer></script>
     ```

---

## **Struktura e Faqeve Blade**

1. **Shablloni Kryesor (`resources/views/layouts/app.blade.php`)**  
   - Ky skedar përmban header, footer dhe skedarët kryesorë CSS/JS:
     ```blade
     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>@yield('title', 'Event Booking')</title>
         <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     </head>
     <body>
         @include('partials.navbar')
         <main>
             @yield('content')
         </main>
         <script src="{{ asset('js/app.js') }}" defer></script>
     </body>
     </html>
     ```

2. **Faqet e Veçanta**
   - Faqja kryesore (`resources/views/home.blade.php`):
     ```blade
     @extends('layouts.app')

     @section('content')
     <h1>Mirë se vini në Event Booking</h1>
     <p>Rezervoni bileta për eventet tuaja të preferuara!</p>
     @endsection
     ```

   - Dashboard (`resources/views/admin/dashboard.blade.php`):
     ```blade
     @extends('layouts.app')

     @section('content')
     <h1>Paneli Administrativ</h1>
     <p>Menaxhoni rezervimet dhe eventet këtu.</p>
     @endsection
     ```

---

## **Testimi i Projektit**

1. **Frontend**  
   - Kontrolloni shfaqjen dhe funksionalitetin e formave për rezervimin e biletave.

2. **Backend**  
   - Përdorni Postman për të testuar endpoint-et API (p.sh., rezervimi i biletave).

3. **Autentikimi dhe Paneli Admin**  
   - Hyni si admin dhe kontrolloni aksesin në dashboard.

4. **Testime të Plota**  
   - Kontrolloni ndërveprimin midis formave të frontend-it dhe backend-it për të siguruar që të dhënat të ruhen në bazën e të dhënave.

---

## **Funksionalitetet Kryesore**

1. **Rezervimi i Biletave**  
   - Përdoruesit mund të rezervojnë bileta për eventet e listuara.

2. **Paneli Administrativ**  
   - Adminët mund të menaxhojnë rezervimet dhe të ndryshojnë statusin e tyre.

3. **Autentikimi**  
   - Adminët mund të hyjnë në sistem përmes një mekanizmi të sigurt autentikimi.

4. **Integrim i Email-eve**  
   - Konfirmimet e rezervimeve dërgohen automatikisht me email.

--- 

Kjo strukturë siguron që kushdo mund ta instalojë dhe përdorë projektin me lehtësi.
