@extends('template')

@section('content')
    <h3>Tambah Data Nilai</h3>

    <a href="/eas" class="btn btn-info">Kembali</a>

    <br/>
    <br/>

    <form action="/eas/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" for="normorinduksiswa">
                Normor Induk Siswa
            </label>
            <div class="col-6">
                <input class="form-control"
                       type="text"
                       id="normorinduksiswa"
                       placeholder="Masukkan nomor induk siswa"
                       name="normorinduksiswa"
                       required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nilaiangka">
                Nilai Angka
            </label>
            <div class="col-6">
                <input class="form-control"
                       type="text"
                       id="nilaiangka"
                       placeholder="Masukkan nilai angka"
                       name="nilaiangka"
                       required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="sks">
                SKS
            </label>
            <div class="col-6">
                <input class="form-control"
                       type="text"
                       id="sks"
                       placeholder="Masukkan sks"
                       name="sks"
                       required="required">
            </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>

@endsection
