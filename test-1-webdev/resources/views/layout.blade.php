<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Produk') · CRUD Dummy</title>
    <style>
        :root {
            --bg: #f4f6fb;
            --card: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --border: #e5e7eb;
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --danger: #dc2626;
            --success-bg: #ecfdf5;
            --success: #047857;
            --error-bg: #fef2f2;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.5;
        }
        .navbar {
            background: var(--primary);
            color: #fff;
            padding: 16px 0;
            box-shadow: 0 2px 8px rgba(79, 70, 229, .25);
        }
        .navbar a { color: #fff; text-decoration: none; font-weight: 700; font-size: 1.15rem; }
        .container { max-width: 820px; margin: 0 auto; padding: 0 20px; }
        main.container { padding-top: 32px; padding-bottom: 48px; }

        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, .05);
        }
        .page-head {
            display: flex; justify-content: space-between; align-items: center;
            margin-bottom: 20px; gap: 12px; flex-wrap: wrap;
        }
        h2 { margin: 0; font-size: 1.4rem; }

        /* tombol */
        .btn {
            display: inline-block; border: 0; cursor: pointer;
            padding: 8px 16px; border-radius: 8px;
            font-size: .9rem; font-weight: 600; font-family: inherit;
            text-decoration: none; transition: background .15s;
            background: var(--primary); color: #fff;
        }
        .btn:hover { background: var(--primary-dark); }
        .btn-light { background: #eef2ff; color: var(--primary); }
        .btn-light:hover { background: #e0e7ff; }
        .btn-danger { background: #fee2e2; color: var(--danger); }
        .btn-danger:hover { background: #fecaca; }
        .btn-sm { padding: 5px 11px; font-size: .82rem; }
        .btn-plain { background: transparent; color: var(--muted); }
        .btn-plain:hover { background: #f3f4f6; }

        /* tabel */
        table { width: 100%; border-collapse: collapse; }
        th {
            text-align: left; font-size: .75rem; text-transform: uppercase;
            letter-spacing: .05em; color: var(--muted);
            padding: 10px 12px; border-bottom: 2px solid var(--border);
        }
        td { padding: 14px 12px; border-bottom: 1px solid var(--border); }
        tr:last-child td { border-bottom: 0; }
        tbody tr:hover { background: #fafbff; }
        .actions { display: flex; gap: 6px; justify-content: flex-end; }
        .actions form { margin: 0; }
        th.right { text-align: right; }
        .empty { text-align: center; color: var(--muted); padding: 40px 0; }

        /* form */
        label { display: block; font-weight: 600; font-size: .9rem; margin-bottom: 6px; }
        .field { margin-bottom: 18px; }
        input[type=text], input[type=number], textarea {
            width: 100%; padding: 10px 12px; font: inherit;
            border: 1px solid var(--border); border-radius: 8px; background: #fff;
        }
        input:focus, textarea:focus {
            outline: 2px solid rgba(79, 70, 229, .35); border-color: var(--primary);
        }
        textarea { min-height: 110px; resize: vertical; }
        .form-actions { display: flex; gap: 8px; margin-top: 8px; }

        /* alert */
        .alert { padding: 12px 16px; border-radius: 8px; margin-bottom: 20px; font-size: .92rem; }
        .alert-success { background: var(--success-bg); color: var(--success); border: 1px solid #a7f3d0; }
        .alert-error { background: var(--error-bg); color: #991b1b; border: 1px solid #fecaca; }
        .alert-error ul { margin: 0; padding-left: 18px; }

        /* detail */
        .detail-price { font-size: 1.6rem; font-weight: 700; color: var(--primary); margin: 8px 0 16px; }
        .detail-desc { color: var(--muted); white-space: pre-line; margin-bottom: 24px; }

        @media (max-width: 560px) {
            .card { padding: 16px; }
            .actions { flex-wrap: wrap; }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="{{ route('products.index') }}">🛍️ CRUD Produk</a>
        </div>
    </nav>

    <main class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
