@extends('layouts.app')

@section('title', 'Detail Anggota')

@section('content')
    <p><a href="{{ route('members.index') }}">&larr; Kembali ke daftar</a></p>

    <h1>Detail Anggota</h1>

    <table style="max-width: 500px;">
        <tr>
            <th class="label-col">Nama</th>
            <td>{{ $member['nama'] }}</td>
        </tr>
        <tr>
            <th class="label-col">NIM</th>
            <td>{{ $member['nim'] }}</td>
        </tr>
        <tr>
            <th class="label-col">Email</th>
            <td>{{ $member['email'] }}</td>
        </tr>
        <tr>
            <th class="label-col">Nomor Telepon</th>
            <td>{{ $member['nomor_telepon'] }}</td>
        </tr>
        <tr>
            <th class="label-col">Alamat</th>
            <td>{{ $member['alamat'] }}</td>
        </tr>
        <tr>
            <th class="label-col">Status</th>
            <td>{{ ucfirst($member['status']) }}</td>
        </tr>
    </table>
@endsection