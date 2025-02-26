# PDF Form Generator

## Требования для Docker
- Docker
- Docker Compose

## Установка через Docker

<<<<<<< HEAD
1. Клонируйте репозиторий:
```bash
git clone <your-repository-url>
cd pdf_form
```

2. Создайте файл .env из примера:
```bash
=======
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
>>>>>>> e8d75e906783ff2a3022f903e695391b5607afc5
cp .env.example .env
```

3. Настройте переменные окружения в .env:
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=pdf_form
DB_USERNAME=pdf_user
DB_PASSWORD=pdf_password
```

4. Запустите контейнеры:
```bash
docker-compose up -d
```

5. Установите зависимости:
```bash
docker-compose exec app composer install
```

6. Сгенерируйте ключ приложения:
```bash
docker-compose exec app php artisan key:generate
```

7. Выполните миграции:
```bash
docker-compose exec app php artisan migrate
```

8. Установите шрифт для PDF:
```bash
docker-compose exec app mkdir -p storage/fonts
docker-compose exec app curl -o storage/fonts/DejaVuSans.ttf https://github.com/dejavu-fonts/dejavu-fonts/raw/master/ttf/DejaVuSans.ttf
```

## Доступ к приложению

- Приложение: http://localhost:8888
- phpMyAdmin: http://localhost:8889
- MySQL: localhost:3307 (если нужно подключаться напрямую)

## Полезные команды Docker

```bash
# Запуск контейнеров
docker-compose up -d

# Остановка контейнеров
docker-compose down

# Просмотр логов
docker-compose logs -f

# Доступ к контейнеру приложения
docker-compose exec app bash

# Пересборка контейнеров
docker-compose up -d --build
```
