[![Laravel](https://github.com/Back2022/Lara/actions/workflows/laravel.yml/badge.svg?branch=main&event=push)](https://github.com/Back2022/Lara/actions/workflows/laravel.yml)

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Lara
*** Radni okvir Laravel - Backend dev 2022 ***

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learavel Eloquent generatori

Eloquent BLUEPRINT generator: [generator](https://laravelarticle.com/laravel-migration-generator-online).  
Eloquent SEEDER generator: [generator](http://laravel.stonelab.ch/sql-seeder-converter/)

## Laravel Breeze instalacija
```
$ composer require laravel/breeze --dev
$ php artisan breeze:install
$ npm install
$ npm run dev
```

Korisnik@CR13-02 MINGW64 ***~/Code/Lara (main)***
***$ git commit -am "breeze install https://laravel.com/docs/9.x/starter-kits"***
[main 22235ab] breeze install https://laravel.com/docs/9.x/starter-kits
``` 55 files changed, 26392 insertions(+), 23 deletions(-)
 create mode 100644 app/Http/Controllers/Auth/AuthenticatedSessionController.php
 create mode 100644 app/Http/Controllers/Auth/ConfirmablePasswordController.php
 create mode 100644 app/Http/Controllers/Auth/EmailVerificationNotificationController.php
 create mode 100644 app/Http/Controllers/Auth/EmailVerificationPromptController.php
 create mode 100644 app/Http/Controllers/Auth/NewPasswordController.php
 create mode 100644 app/Http/Controllers/Auth/PasswordResetLinkController.php
 create mode 100644 app/Http/Controllers/Auth/RegisteredUserController.php
 create mode 100644 app/Http/Controllers/Auth/VerifyEmailController.php
 create mode 100644 app/Http/Requests/Auth/LoginRequest.php
 create mode 100644 app/Models/Photo.php
 create mode 100644 app/View/Components/AppLayout.php
 create mode 100644 app/View/Components/GuestLayout.php
 create mode 100644 database/migrations/2022_02_16_184318_create_froots.php
 rewrite public/js/app.js (91%)
 create mode 100644 resources/views/auth/confirm-password.blade.php
 create mode 100644 resources/views/auth/forgot-password.blade.php
 create mode 100644 resources/views/auth/login.blade.php
 create mode 100644 resources/views/auth/register.blade.php
 create mode 100644 resources/views/auth/reset-password.blade.php
 create mode 100644 resources/views/auth/verify-email.blade.php
 create mode 100644 resources/views/components/application-logo.blade.php
 create mode 100644 resources/views/components/auth-card.blade.php
 create mode 100644 resources/views/components/auth-session-status.blade.php
 create mode 100644 resources/views/components/auth-validation-errors.blade.php
 create mode 100644 resources/views/components/button.blade.php
 create mode 100644 resources/views/components/dropdown-link.blade.php
 create mode 100644 resources/views/components/dropdown.blade.php
 create mode 100644 resources/views/components/input.blade.php
 create mode 100644 resources/views/components/label.blade.php
 create mode 100644 resources/views/components/nav-link.blade.php
 create mode 100644 resources/views/components/responsive-nav-link.blade.php
 create mode 100644 resources/views/dashboard.blade.php
 create mode 100644 resources/views/layouts/app.blade.php
 create mode 100644 resources/views/layouts/guest.blade.php
 create mode 100644 resources/views/layouts/navigation.blade.php
 create mode 100644 routes/auth.php
 create mode 100644 routes/web_old.php
 create mode 100644 tailwind.config.js
 create mode 100644 tests/Feature/Auth/AuthenticationTest.php
 create mode 100644 tests/Feature/Auth/EmailVerificationTest.php
 create mode 100644 tests/Feature/Auth/PasswordConfirmationTest.php
 create mode 100644 tests/Feature/Auth/PasswordResetTest.php
 create mode 100644 tests/Feature/Auth/RegistrationTest.php
```
 
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
