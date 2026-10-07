@extends('layouts.app')

@section('title', 'Hello')

@section('content')
    <h1 class="text-3xl font-bold">Halo, {{ $nama }}! 🎉</h1>
    <p class="mt-3 text-slate-600">Nama ini diambil dari URL lewat route parameter <code>/hello/{nama}</code>.</p>
    <p class="mt-6"><a class="text-indigo-600 underline" href="{{ route('home') }}">← Kembali ke Home</a></p>
@endsection
