@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1 class="text-3xl font-bold mb-6">{{ $title }}</h1>

    <div class="bg-white rounded-xl shadow-sm border divide-y">
        @foreach ($concepts as $term => $desc)
            <div class="p-4">
                <dt class="font-semibold text-indigo-700">{{ $term }}</dt>
                <dd class="text-slate-600">{{ $desc }}</dd>
            </div>
        @endforeach
    </div>
@endsection
