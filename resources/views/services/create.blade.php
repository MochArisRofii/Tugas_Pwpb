@extends('layouts.app')

@section('title', 'Tambah Layanan')

@section('content')
    <h2>Tambah Layanan</h2>

    <form action="{{ route('companies.services.store', $company->id) }}" method="POST">
        @csrf
        <label for="service_name">Nama Layanan:</label>
        <input type="text" name="service_name" required>

        <label for="service_description">Deskripsi Layanan:</label>
        <textarea name="service_description" required></textarea>

        <button type="submit">Simpan Layanan</button>
    </form>
@endsection
