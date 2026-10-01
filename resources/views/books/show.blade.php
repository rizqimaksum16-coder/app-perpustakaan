@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <p><a href="{{ route('books.index') }}">&larr; Kembali ke daftar</a></p>

    <h1>Detail Buku</h1>

    <table style="max-width: 500px;">
        <tr>
            <th class="label-col">Judul</th>
            <td>{{ $book['judul'] }}</td>
        </tr>
        <tr>
            <th class="label-col">Penulis</th>
            <td>{{ $book['penulis'] }}</td>
        </tr>
        <tr>
            <th class="label-col">Penerbit</th>
            <td>{{ $book['penerbit'] }}</td>
        </tr>
        <tr>
            <th class="label-col">Tahun Terbit</th>
            <td>{{ $book['tahun_terbit'] }}</td>
        </tr>
        <tr>
            <th class="label-col">ISBN</th>
            <td>{{ $book['isbn'] ?? '-' }}</td>
        </tr>
        <tr>
            <th class="label-col">Stok</th>
            <td>{{ $book['stok'] }}</td>
        </tr>
        <tr>
            <th class="label-col">ID Kategori</th>
            <td>{{ $book['category_id'] }}</td>
        </tr>
    </table>
@endsection