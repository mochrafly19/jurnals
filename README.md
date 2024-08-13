    # Jurnals

    ### Manual Setup

    1. **Clone the Project**
        ```bash
        git clone https://github.com/mochrafly19/jurnals jurnals
        ```

    2. **install dependencies**
        ```cd jurnals
        composer install
        ```

    3. **copy configuration file**
        ```cp .env.example .env
        ```

    4. **generate application key**
        ```php artisan key:generate
        ```

    5. **create db called ``jurnals``**

    6. **configure APP_URL on ``.env``**
        ```APP_URL=http://ticketing.test
        ```

    7. **configure db connection on ``.env``**
        ```DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=ticketing
            DB_USERNAME=root
            DB_PASSWORD=
        ```

    8. **run db migration**
        ```php artisan migrate
        ```

    9. **install frontend dependencies**
        ```npm install
        ```

    10. **build frontend assets**
        ```npm run build
        ```

    11. **run the project**
        ```php artisan serve
        ```

    12. **open the project at http://localhost:8000**

