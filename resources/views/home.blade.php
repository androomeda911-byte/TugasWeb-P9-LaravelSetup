@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <h1 class="text-3xl font-bold mb-2">Halo, {{ $nama }}!</h1>
    <p class="mb-3">Fitur Laravel yang dipelajari:</p>
    <ul class="list-disc pl-6">
        @foreach ($fitur as $f)
            <li>{{ $f }}</li>
        @endforeach
    </ul>
@endsection