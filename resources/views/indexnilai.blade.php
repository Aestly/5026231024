@extends('template')

@section('content')
    <h3>Nilai Kuliah</h3>

    <a href="/eas/tambah" class="btn btn-primary"> + Tambah Nilai Baru</a>

    <br>
    <br>
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Normor induk siswa</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach($nilai as $n)
        <tr>
            <td>{{ $n->id }}</td>
            <td>{{ $n->normorinduksiswa }}</td>
            <td>{{ $n->nilaiangka }}</td>
            <td>{{ $n->sks }}</td>

        </tr>
        @endforeach
    </table>
    {{ $nilai->links() }}
@endsection
