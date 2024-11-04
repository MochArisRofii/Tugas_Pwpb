@extends('layouts.app')

@section('title', $company->name)

@section('content')

    <h2>{{ $company->name }}</h2>
    <p>{{ $company->description }}</p>
    <p>Alamat: {{ $company->address }}</p>
    <p>Telepon: {{ $company->phone }}</p>
    <p>Email: {{ $company->email }}</p>

    <!-- Tombol untuk membuat karyawan baru -->
    <a href="{{ route('companies.employees.create', ['company' => $company->id]) }}" class="btn" style="display: inline-block; background-color: #0077b6; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; text-decoration: none; margin-bottom: 10px; transition: background-color 0.3s;">Tambah Karyawan</a>

    <!-- Tombol untuk membuat layanan baru -->
    <a href="{{ route('companies.services.create', ['company' => $company->id]) }}" class="btn" style="display: inline-block; background-color: #0077b6; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; text-decoration: none; transition: background-color 0.3s;">Tambah Layanan</a>

    <h3>Layanan Kami</h3>
    <ul>
        @foreach($company->services as $service)
            <li>
                <strong>{{ $service->service_name }}</strong>: {{ $service->service_description }}
            </li>
        @endforeach
    </ul>

    @include('partials.employee_list', ['employees' => $company->employees]) <!-- Memanggil partial untuk daftar karyawan -->
@endsection
