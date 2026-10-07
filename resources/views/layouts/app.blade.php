<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Home') — {{ config('app.name') }}</title>
    {{-- Bonus: Tailwind via CDN (hanya untuk development/belajar) --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col">

    <nav class="bg-indigo-600 text-white">
        <div class="max-w-4xl mx-auto px-4 py-3 flex flex-wrap items-center gap-x-6 gap-y-2">
            <a href="{{ route('home') }}" class="font-bold text-lg">🚀 {{ config('app.name') }}</a>
            @php
                $links = [
                    'home'          => 'Home',
                    'about'         => 'About',
                    'contact'       => 'Contact',
                    'courses.index' => 'Courses',
                ];
            @endphp
            @foreach ($links as $routeName => $label)
                <a href="{{ route($routeName) }}"
                   class="text-sm hover:underline {{ request()->routeIs($routeName) ? 'font-bold underline' : 'opacity-80' }}">
                    {{ $label }}
                </a>
            @endforeach
        </div>
    </nav>

    <main class="flex-1 max-w-4xl mx-auto w-full px-4 py-10">
        @yield('content')
    </main>

    <footer class="text-center text-sm text-slate-500 py-4 border-t bg-white">
        Tugas Rutin 9 — Pemrograman Web · Laravel {{ app()->version() }} · PHP {{ PHP_VERSION }}
    </footer>
</body>
</html>
