@extends('layouts.app')

@section('title', 'Daftar Perusahaan')

@section('content')
    <h2>Daftar Perusahaan</h2>
    
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <!-- Tambahkan kelas 'btn' untuk tombol "Tambah Perusahaan Baru" -->
    <a href="{{ route('company.create') }}" class="btn" style="display: inline-block; background-color: #0077b6; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; text-decoration: none; margin-bottom: 10px; transition: background-color 0.3s;">Tambah Perusahaan Baru</a>

    <ul>
        @foreach($companies as $company)
            <li>
                <a href="{{ route('company.show', $company->id) }}">{{ $company->name }}</a>
                - 
                <!-- Tambahkan gaya tombol untuk "Edit" -->
                <a href="{{ route('company.edit', $company->id) }}" class="btn" style="background-color: #0077b6; color: #fff; padding: 5px 10px; border-radius: 5px; text-decoration: none; transition: background-color 0.3s;">Edit</a>
            </li>
        @endforeach
    </ul>
@endsection
