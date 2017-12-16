# moodle-symfony

Mini moodle replica created with symfony

### Prerequisites

What things you need to install the software and how to install them

Web server

```
XAMPP
```

### Instalasi Symfony

Buka folder php di XAMPP

```
cd C:\xampp\php
```

Jalankan command ini untuk download symfony

```
php -r "file_put_contents('symfony', file_get_contents('https://symfony.com/installer'));"
```

Buat Executable symfony (jalankan di cmd)

```
(echo @ECHO OFF & echo php "%~dp0symfony" %*) > symfony.bat
```


### Cara Cloning dan Running

Clone Project ke htdocs,

```
cd C:\XAMPP\htdocs
git clone https://github.com/dimasmamot/moodle-symfony.git
```

Masuk ke folder moodle-symfony

```
cd moodle-symfony
```

Jalankan Composer Install & Bower

```
composer install

bower install ./vendor/sonata-project/admin-bundle/bower.json

php bin/console cache:clear

php bin/console assets:install

```

Jalankan command ini untuk run

```
php bin/console server:run
```

Buka di http://localhost:8000
