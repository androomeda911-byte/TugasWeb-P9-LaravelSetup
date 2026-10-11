@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <h1 class="text-2xl font-bold mb-4">Kontak</h1>
    <ul class="space-y-2">
        @foreach ($kontak as $jenis => $nilai)
            <li><strong>{{ $jenis }}:</strong> {{ $nilai }}</li>
        @endforeach
    </ul>
@endsection