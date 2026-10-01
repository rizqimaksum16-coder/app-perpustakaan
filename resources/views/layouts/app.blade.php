<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perpustakaan Digital Kampus')</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: sans-serif; margin: 0; color: #1f2937; }

        /* Navbar */
        .navbar { background: #1e3a8a; padding: 14px 40px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; }
        .navbar .brand { color: #fff; font-weight: bold; font-size: 18px; }
        .navbar ul { list-style: none; display: flex; gap: 20px; margin: 0; padding: 0; }
        .navbar ul li a { color: #cbd5e1; text-decoration: none; padding: 6px 4px; }
        .navbar ul li a.active { color: #fff; font-weight: bold; border-bottom: 2px solid #fff; }

        /* Konten */
        main { max-width: 900px; margin: 0 auto; padding: 30px 40px; }
        table { border-collapse: collapse; width: 100%; margin-top: 16px; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
        th.label-col { width: 160px; background: #f3f4f6; }

        /* Alert & tombol */
        .alert-success { background: #d1fae5; color: #065f46; padding: 10px 14px; border-radius: 4px; margin-bottom: 16px; }
        .btn { display: inline-block; padding: 6px 14px; background: #2563eb; color: #fff; text-decoration: none; border-radius: 4px; border: none; cursor: pointer; }
        form.inline { display: inline; }

        /* Form */
        .form-box { max-width: 500px; }
        .form-box label { display: block; margin-top: 12px; font-weight: bold; }
        .form-box input, .form-box select, .form-box textarea { width: 100%; padding: 6px; margin-top: 4px; }
        .form-box .error { color: #b91c1c; font-size: 14px; margin-top: 4px; }
        .form-box .btn { margin-top: 20px; padding: 8px 16px; }

        /* Pagination */
        .pagination { display: flex; list-style: none; gap: 6px; padding: 0; margin: 16px 0; }
        .pagination .page-link { display: block; padding: 4px 10px; border: 1px solid #ccc; border-radius: 4px; color: #1f2937; text-decoration: none; }
        .pagination .active .page-link { background: #2563eb; border-color: #2563eb; color: #fff; }
        .pagination .disabled .page-link { color: #9ca3af; }

        /* Footer */
        footer { text-align: center; padding: 20px; color: #6b7280; font-size: 14px; border-top: 1px solid #e5e7eb; margin-top: 40px; }
    </style>
</head>
<body>
    @include('partials.navbar')

    <main>
        @include('partials.alert')

        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} Sistem Perpustakaan Digital Kampus
    </footer>
</body>
</html>