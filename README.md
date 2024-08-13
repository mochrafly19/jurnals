# Jurnals

### Manual Setup

1. **Clone the Project**
    ```bash
    git clone https://github.com/mochrafly19/jurnals.git jurnals
    ```

2. **Install Dependencies**
    ```bash
    cd jurnals
    composer install
    ```

3. **Copy Configuration File**
    ```bash
    cp .env.example .env
    ```

4. **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

5. **Create Database**
    - Create a database named `jurnals`

6. **Configure `APP_URL` in `.env`**
    ```env
    APP_URL=http://localhost:8000
    ```

7. **Configure Database Connection in `.env`**
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=jurnals
    DB_USERNAME=root
    DB_PASSWORD=
    ```

8. **Run Database Migrations**
    ```bash
    php artisan migrate
    ```

9. **Install Frontend Dependencies**
    ```bash
    npm install
    ```

10. **Build Frontend Assets**
    ```bash
    npm run build
    ```

11. **Run the Project**
    ```bash
    php artisan serve
    ```

12. **Open the Project**
    - Access the project at [http://localhost:8000](http://localhost:8000)
