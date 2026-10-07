@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
    <h1>Profil Saya</h1>

    <table>
        <tr>
            <th style="width: 160px; background: #f3f4f6;">Nama</th>
            <td>{{ $user['name'] }}</td>
        </tr>
        <tr>
            <th style="background: #f3f4f6;">Email</th>
            <td>{{ $user['email'] }}</td>
        </tr>
        <tr>
            <th style="background: #f3f4f6;">Role</th>
            <td>{{ ucfirst($user['role']) }}</td>
        </tr>
    </table>

    <h2>Ganti Password</h2>

    <form action="{{ route('profile.password') }}" method="POST" style="max-width: 400px;">
        @csrf
        @method('PUT')

        <label for="current_password" style="display: block; margin-top: 12px; font-weight: bold;">Password Lama</label>
        <input type="password" name="current_password" id="current_password" style="width: 100%; padding: 6px;">
        @error('current_password')
            <div style="color: #b91c1c; font-size: 14px; margin-top: 4px;">{{ $message }}</div>
        @enderror

        <label for="password" style="display: block; margin-top: 12px; font-weight: bold;">Password Baru</label>
        <input type="password" name="password" id="password" style="width: 100%; padding: 6px;">
        @error('password')
            <div style="color: #b91c1c; font-size: 14px; margin-top: 4px;">{{ $message }}</div>
        @enderror

        <label for="password_confirmation" style="display: block; margin-top: 12px; font-weight: bold;">Konfirmasi Password Baru</label>
        <input type="password" name="password_confirmation" id="password_confirmation" style="width: 100%; padding: 6px;">

        <button type="submit" class="btn" style="margin-top: 20px;">Ganti Password</button>
    </form>
@endsection