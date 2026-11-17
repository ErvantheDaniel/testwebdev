# CRUD Dummy Laravel (Product) + Route Model Binding

Project Laravel 12 yang simpel: CRUD Produk (Create, Read, Update, Delete)
dan sudah memakai Route Model Binding. Pakai SQLite jadi tidak perlu setup database.

## Syarat
- PHP 8.2 atau lebih baru (ekstensi sqlite/pdo_sqlite aktif)
- Composer

## Cara menjalankan
```bash
composer install
php artisan migrate
php artisan db:seed      # opsional, isi 3 data contoh
php artisan serve
```
Buka http://127.0.0.1:8000/products

Kalau file `.env` tidak ada (misalnya setelah clone dari GitHub):
```bash
cp .env.example .env
php artisan key:generate
```

## File penting
- routes/web.php                                  -> Route::resource('products', ...)
- app/Http/Controllers/ProductController.php      -> CRUD + Route Model Binding
- app/Models/Product.php
- database/migrations/..._create_products_table.php
- resources/views/products/*.blade.php

## Route Model Binding
Di ProductController, method show/edit/update/destroy memakai parameter
`Product $product`. Laravel otomatis mencari data Product berdasarkan {product}
di URL (tanpa Product::findOrFail($id)). Kalau ID tidak ada -> 404.

## Testing
```bash
php artisan test
```
Ada `tests/Feature/ProductTest.php` yang menguji CRUD dan Route Model Binding (ID tidak ada -> 404).
