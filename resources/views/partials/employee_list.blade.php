<h3>Daftar Karyawan</h3>
<ul>
    @foreach($employees as $employee)
        <li>
            <strong>{{ $employee->name }}</strong> - {{ $employee->position }} - {{ $employee->email }}
        </li>
    @endforeach
</ul>
