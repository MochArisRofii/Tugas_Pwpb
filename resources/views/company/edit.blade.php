@extends('layouts.app')

@section('title', 'Edit Perusahaan')

@section('content')
    <h2>Edit Perusahaan</h2>

    <form action="{{ route('company.update', $company->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="name">Nama Perusahaan:</label>
        <input type="text" name="name" value="{{ $company->name }}" required>

        <label for="description">Deskripsi:</label>
        <textarea name="description">{{ $company->description }}</textarea>

        <label for="address">Alamat:</label>
        <input type="text" name="address" value="{{ $company->address }}">

        <label for="phone">Telepon:</label>
        <input type="text" name="phone" value="{{ $company->phone }}">

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $company->email }}">

        <button type="submit">Update</button>
    </form>
@endsection
