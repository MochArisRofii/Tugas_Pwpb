@extends('layouts.app')

@section('title', 'Tambah Karyawan')

@section('content')
    <h2>Tambah Karyawan</h2>

    <form action="{{ route('companies.employees.store', $company->id) }}" method="POST">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" name="name" required>

        <label for="position">Jabatan:</label>
        <input type="text" name="position" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <button type="submit">Simpan Karyawan</button>
    </form>
@endsection
