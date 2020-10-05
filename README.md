# tutorial

        https://www.vultr.com/docs/configure-php-7-2-on-ubuntu-18-04

        https://itsolutionstuff.com/post/laravel-7-crud-example-laravel-7-tutorial-for-beginnersexample.html

        https://linuxize.com/post/how-to-install-and-use-composer-on-ubuntu-18-04/

        https://www.getcraftable.com/

# Dependencies Linux php

        sudo apt-get update
        sudo apt install php-xml

# composer

        sudo apt update

        sudo apt install wget php-cli php-zip unzip

        php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

        HASH="$(wget -q -O - https://composer.github.io/installer.sig)"

        php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

        sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

        composer

        ```
        ______
        / ____/___  ____ ___  ____  ____  ________  _____
        / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
        / /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
        \____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                        /_/
        Composer version 1.8.5 2019-04-09 17:46:47

        ```

# Project

        php artisan key:generate

        * Step 1 : Install Laravel 7
                composer create-project --prefer-dist laravel/laravel blog
        * Step 2: Database Configuration
                .env

                        DB_CONNECTION=mysql
                        DB_HOST=127.0.0.1
                        DB_PORT=3306
                        DB_DATABASE=here your database name(blog)
                        DB_USERNAME=here database username(root)
                        DB_PASSWORD=here database password(root)

        * Step 3: Create Migration
                composer install
                php artisan make:migration create_products_table --create=products
                php artisan make:migration create_persons_table --create=persons
                php artisan migrate

        * Step 4: Add Resource Route
                routes/web.php

                Route::resource('products','ProductController');

        * Step 5: Add Controller and Model

                php artisan make:controller ProductController --resource --model=Product

        Step 6: Add Blade Files


https://bulma.style/imperial/dist/profile.html