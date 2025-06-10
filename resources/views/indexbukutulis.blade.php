@extends('template')

@section('content')
    <h3>Data Bukutulis</h3>

    <a href="/bukutulis/tambah" class="btn btn-primary"> + Tambah Bukutulis Baru</a>

    <br>
    <br>
    <p>Cari Data Bukutulis :</p>
    <form action="/bukutulis/cari" method="GET">
        <input type="text" class="form-control" name="cari" placeholder="Cari Bukutulis.....">
        <input type="submit" value="CARI" class="btn btn-info">
    </form>
    <br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Merk</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat</th>
            <th>Opsi</th>
        </tr>
        @foreach($bukutulis as $b)
        <tr>
            <td>{{ $b->merkbukutulis }}</td>
            <td>{{ $b->hargabukutulis }}</td>
            <td>{{ $b->tersedia }}</td>
            <td>{{ $b->berat }}</td>

            <td>
                <a href="/bukutulis/edit/{{ $b->ID }}" class="btn btn-success">Edit</a>
                <a href="/bukutulis/hapus/{{ $b->ID }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $bukutulis->links() }}
@endsection
