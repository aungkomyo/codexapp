<!DOCTYPE html>
<html lang="my">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rice Shop POS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            color-scheme: light;
            font-family: 'Inter', system-ui, sans-serif;
            --bg: #f6f7fb;
            --card: #ffffff;
            --accent: #0f766e;
            --accent-soft: #ccfbf1;
            --text: #0f172a;
            --muted: #64748b;
            --border: #e2e8f0;
        }
        body {
            margin: 0;
            background: var(--bg);
            color: var(--text);
        }
        header {
            background: var(--card);
            border-bottom: 1px solid var(--border);
            padding: 20px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        nav a {
            margin-right: 16px;
            color: var(--muted);
            text-decoration: none;
            font-weight: 500;
        }
        nav a.active {
            color: var(--accent);
        }
        main {
            padding: 32px;
            display: grid;
            gap: 24px;
        }
        .card {
            background: var(--card);
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
        }
        .grid {
            display: grid;
            gap: 16px;
        }
        .grid-2 {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }
        .badge {
            background: var(--accent-soft);
            color: var(--accent);
            padding: 4px 10px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 600;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            text-align: left;
            padding: 12px 10px;
            border-bottom: 1px solid var(--border);
            font-size: 14px;
        }
        th {
            color: var(--muted);
            font-weight: 600;
        }
        .muted {
            color: var(--muted);
        }
        .btn {
            background: var(--accent);
            color: white;
            padding: 10px 16px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            font-weight: 600;
        }
        .btn-secondary {
            background: #e2e8f0;
            color: var(--text);
        }
        .section-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 16px;
        }
        .stack {
            display: grid;
            gap: 12px;
        }
        label {
            font-weight: 600;
            font-size: 13px;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid var(--border);
            font-size: 14px;
        }
    </style>
</head>
<body>
<header>
    <div>
        <h1 style="margin:0; font-size:20px;">Rice Shop POS</h1>
        <p style="margin:4px 0 0;" class="muted">Unit, Price, Stock, and Sales Management</p>
    </div>
    <nav>
        <a href="{{ route('pos.index') }}" class="{{ request()->routeIs('pos.index') ? 'active' : '' }}">POS</a>
        <a href="{{ route('rice-types.index') }}" class="{{ request()->routeIs('rice-types.*') ? 'active' : '' }}">Type of Rice</a>
        <a href="{{ route('units.index') }}" class="{{ request()->routeIs('units.*') ? 'active' : '' }}">Units</a>
        <a href="{{ route('prices.index') }}" class="{{ request()->routeIs('prices.*') ? 'active' : '' }}">Prices</a>
        <a href="{{ route('stocks.index') }}" class="{{ request()->routeIs('stocks.*') ? 'active' : '' }}">Stock</a>
    </nav>
</header>
<main>
    @yield('content')
</main>
</body>
</html>
