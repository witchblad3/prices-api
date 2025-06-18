# Laravel Prices API

Простой API для получения списка товаров с конвертацией цены по валютам.

---

## Установка и запуск проекта

1. Клонируйте репозиторий и перейдите в папку проекта:

```bash
git clone <URL_репозитория>
cd <название_папки>

composer install

cp .env.example .env
php artisan key:generate
```
Запуск миграций
```bash
php artisan migrate
```
Запуск сидера с товарами 
```bash
php artisan db:seed
```
Запустите локальный сервер:
```
php artisan serve
```
Доступен GET-эндпоинт для получения списка товаров:
```bash
http://localhost:8000/api/prices
```
По умолчанию цены возвращаются в рублях (₽).
Для конвертации в другую валюту используйте параметр currency со значениями:

RUB — рубли (₽)

USD — доллары ($), курс 1 USD = 90 RUB

EUR — евро (€), курс 1 EUR = 100 RUB
```
http://localhost:8000/api/prices?currency=USD
```

