# Panduan untuk AI Agent

Project: CRUD Produk (Laravel 12, SQLite, Blade) dengan Route Model Binding.

## Konvensi
- Controller: `app/Http/Controllers/ProductController.php` memakai `Route::resource('products', ...)`.
- Method `show`, `edit`, `update`, `destroy` memakai Route Model Binding (`Product $product`), jangan ganti ke `findOrFail`.
- Validasi dilakukan di controller via `$request->validate(...)`.
- View memakai Blade di `resources/views`, layout utama di `layout.blade.php`.
- Gunakan `php artisan test` untuk menjalankan tes sebelum selesai.
- Format kode dengan `vendor/bin/pint --dirty`.
