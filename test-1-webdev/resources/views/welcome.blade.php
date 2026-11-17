<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        body { font-family: system-ui, sans-serif; display: grid; place-items: center; min-height: 100vh; margin: 0; background: #fdfdfc; color: #1b1b18; }
        a { color: #f53003; }
    </style>
</head>
<body>
    <main>
        <h1>{{ config('app.name', 'Laravel') }}</h1>
        <p><a href="{{ route('products.index') }}">Buka daftar produk &rarr;</a></p>
    </main>
</body>
</html>
