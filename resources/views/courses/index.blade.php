@extends('layouts.app')

@section('title', 'Courses')

@section('content')
    <h1 class="text-3xl font-bold mb-2">Daftar Mata Kuliah</h1>
    <p class="text-slate-600 mb-6">Data diambil dari MySQL lewat Model <code>Course</code> (Route → Controller → Model → View).</p>

    <div class="bg-white rounded-xl shadow-sm border divide-y">
        @forelse ($courses as $course)
            <div class="p-4">
                <div class="font-semibold">{{ $course->name }}</div>
                <div class="text-slate-600 text-sm">{{ $course->description }}</div>
            </div>
        @empty
            <p class="p-4 text-slate-500">
                Belum ada data. Jalankan <code>php artisan migrate</code> lalu <code>php artisan db:seed</code>.
            </p>
        @endforelse
    </div>
@endsection
