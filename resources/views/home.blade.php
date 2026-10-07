@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="text-3xl font-bold mb-2">Halo, Nazla! 👋</h1>
    <p class="text-slate-600 mb-8">Selamat datang di project Laravel pertamaku.</p>

    <section class="bg-white rounded-xl shadow-sm border p-6">
        <h2 class="font-semibold text-lg mb-3">Perjalanan belajar Pemrograman Web</h2>
        <ul class="list-disc pl-6 space-y-1">
            @foreach ($courses as $c)
                <li>{{ $c }}</li>
            @endforeach
        </ul>
    </section>

    <p class="mt-6 text-sm text-slate-500">
        Coba route parameter:
        <a class="text-indigo-600 underline" href="{{ route('hello', ['nama' => 'Nazla']) }}">/hello/Nazla</a>
    </p>
@endsection