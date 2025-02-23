# Laravel Project Setup Guide

## Requirements
- PHP >= 8.1
- Composer
- MySQL

## Installation

### 1. Clone the Repository
```sh
git clone https://github.com/icebergD/pdf_form.git
cd pdf_form
```

### 2. Install Dependencies
```sh
composer install
```

### 3. Configure Environment
```sh
cp .env.example .env
```
- Set database credentials in `.env`:
  ```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=your_database
  DB_USERNAME=your_username
  DB_PASSWORD=your_password
  ```

### 4. Generate Application Key
```sh
php artisan key:generate
```

### 5. Run Migrations & Seed Database
```sh
php artisan migrate --seed
```

### 6. Start Development Server
```sh
php artisan serve
```

### 7. Access the Application
Open your browser and navigate to:
```
http://localhost:8000
```
