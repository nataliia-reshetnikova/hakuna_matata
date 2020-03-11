<p align="center"><img src="https://cdn.icon-icons.com/icons2/390/PNG/512/lion_39035.png" width="100"><strong>Hakuna Matata<strong>
    <img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="300"></p>
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Thank you @HAMIDNGU and @amakaobehi for your contribution to the project :+1:
## Installation

**1.** Clone the repository-
```
git clone https://github.com/nataliereshetnikova/hakuna_matata.git
```

**2.** Then change directory into the folder with this command-
```
cd hakuna_matata
```

**3.** Install all dependencies 
```
composer install
```

**4.** Make copy of ".env.example" file in same directory and rename it to ".env"<br/>
**5.** In ".env":

change:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
to
 **DB_CONNECTION=sqlite**
 
 **6.** In folder "database" create empty file "database.sqlite"<br/>
 
 **7.** Run 
```
php artisan serve
```
**8.** If you have mistake on page concerning generating key, do as suggested on this page =)

**9.** To see your database there is a tool - [DB Browser for SQLite](https://sqlitebrowser.org/) where you can open "database.sqlite" file and then run queries to see the data, for example
```
php artisan serve
```

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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
