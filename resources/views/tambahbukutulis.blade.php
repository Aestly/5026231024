@extends('template')

@section('content')
    <h3>Tambah Data Bukutulis</h3>

    <a href="/bukutulis" class="btn btn-info">Kembali</a>

    <br/>
    <br/>

    <form action="/bukutulis/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="merkbukutulis">
                Merek Buku Tulis
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="text"
                       id="merkbukutulis"
                       name="merkbukutulis"
                       placeholder="Masukkan Merek Buku Tulis"
                       required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="hargabukutulis">
                Harga
            </label>
            <div class="col-sm-2">
                <select class="form-control" id="currency" name="currency" required>
                    <option value="IDR">IDR (Rp)</option>
                    <option value="USD">USD ($)</option>
                    <option value="EUR">EUR (€)</option>
                </select>
            </div>
            <div class="col-sm-4">
                <input class="form-control"
                       type="number"
                       id="hargabukutulis"
                       name="hargabukutulis"
                       placeholder="Masukkan Harga Buku Tulis"
                       required="required">
            </div>
        </div>

<div class="form-group has-success">
    <label class="control-label col-sm-2" for="tersedia">
        Tersedia
    </label>
    <div class="col-sm-6">
        <div class="form-check form-check-inline">
            <input class="form-check-input"
                   type="radio"
                   id="tersedia_ya"
                   name="tersedia"
                   value="1"
                   required>
            <label class="form-check-label" for="tersedia_ya">
                Ya
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input"
                   type="radio"
                   id="tersedia_tidak"
                   name="tersedia"
                   value="0">
            <label class="form-check-label" for="tersedia_tidak">
                Tidak
            </label>
        </div>
    </div>
</div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="berat">
                Berat
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="number"
                       id="berat"
                       name="berat"
                       placeholder="Masukkan Berat Buku Tulis"
                       required="required">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
