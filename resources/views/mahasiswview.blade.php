@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    <a href="/karyawan/tambah" class="btn btn-primary"> + Tambah Karyawan Baru</a>
    <br/>

    <table class="table table-striped">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach($karyawan as $k)
        <tr>
            <td>{{ $k->kodepegawai }}</td>
            <td>{{ strtoupper($k->namalengkap) }}</td>
            <td>{{ $k->divisi }}</td>
            <td>{{ strtolower($k->departemen) }}</td>
        </tr>
        @endforeach
    </table>

    {{ $karyawan->links() }}

@endsection
