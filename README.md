Документация Laravel API с использованием Swagger
Этот репозиторий содержит проект Laravel, интегрированный с Swagger для документирования API. 
Swagger - это инструмент для проектирования, создания и документирования RESTful API.

Предварительные требования:
PHP >= 8.3
Composer
Laravel >= 8.x

Установка:
1. Клонирование репозитория
    git clone https://github.com/krade88/testFuture.git
2. Установка зависимостей
   composer install
3. Копирование .env.example в .env и настройка переменных окружения
   cp .env.example .env
4. Генерация ключа приложения
   php artisan key:generate
5. Запуск миграций
    php artisan migrate
6. Запуск сервера
   php artisan serve

Swagger:
1.Установка Swagger-PHP и пакета Laravel Swagger
    composer require "darkaonline/l5-swagger"
2. Публикация конфигурационных файлов
    php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"
3. Генерация документации
    php artisan l5-swagger:generate
