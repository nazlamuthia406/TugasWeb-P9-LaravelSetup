@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Contact</h1>

    <div class="bg-white rounded-xl shadow-sm border divide-y">
        @forelse ($channels as $ch)
            <div class="p-4 flex justify-between gap-4">
                <span class="font-semibold">{{ $ch['label'] }}</span>
                <span class="text-slate-600">{{ $ch['value'] }}</span>
            </div>
        @empty
            <p class="p-4 text-slate-500">Belum ada kontak.</p>
        @endforelse
    </div>
@endsection
