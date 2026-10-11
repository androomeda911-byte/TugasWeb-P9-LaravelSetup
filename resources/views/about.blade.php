@extends('layouts.app')
@section('title', 'About')
@section('content')
    <h1 class="text-2xl font-bold mb-4">Tentang Saya</h1>
    <table class="w-full bg-white rounded shadow">
        @foreach ($data as $label => $isi)
            <tr class="border-b">
                <td class="p-3 font-semibold w-1/3">{{ $label }}</td>
                <td class="p-3">{{ $isi }}</td>
            </tr>
        @endforeach
    </table>
@endsection