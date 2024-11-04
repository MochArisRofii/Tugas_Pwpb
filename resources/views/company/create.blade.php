@extends('layouts.app')

@section('title', 'Tambah Perusahaan')

@section('content')
    <h2>Tambah Perusahaan</h2>

    <form action="{{ route('company.store') }}" method="POST">
        @csrf
        <label for="name">Nama Perusahaan:</label>
        <input type="text" name="name" required>

        <label for="description">Deskripsi:</label>
        <textarea name="description"></textarea>

        <label for="address">Alamat:</label>
        <input type="text" name="address">

        <label for="phone">Telepon:</label>
        <input type="text" name="phone">

        <label for="email">Email:</label>
        <input type="email" name="email">

        <button type="submit">Simpan</button>
    </form>
@endsection
