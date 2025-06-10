@extends('template')

@section('content')
    <h3>Edit Bukutulis</h3>

    <a href="/bukutulis" class="btn btn-info">Kembali</a>

    <br/>
    <br/>

    @foreach($bukutulis as $b)
    <form action="/bukutulis/update" method="post" class="form-horizontal">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $b->ID }}">

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="merkbukutulis">
            Merek Bukutulis
        </label>
        <div class="col-sm-6">
            <input class="form-control"
                   type="text"
                   id="merkbukutulis"
                   placeholder="Masukkan Merek Bukutulis"
                   name="merkbukutulis"
                   value="{{ $b->merkbukutulis }}"
                   required>
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="hargabukutulis">
            Harga
        </label>
        <div class="col-sm-6">
            <input class="form-control"
                   type="number"
                   id="hargabukutulis"
                   placeholder="Masukkan Harga Bukutulis"
                   name="hargabukutulis"
                   value="{{ $b->hargabukutulis }}"
                   required>
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2">
            Tersedia
        </label>
        <div class="col-sm-6">
            <div class="radio">
                <label>
                    <input type="radio" name="tersedia" value="1" {{ $b->tersedia == 1 ? 'checked' : '' }} required> Ya
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="tersedia" value="0" {{ $b->tersedia == 0 ? 'checked' : '' }}> Tidak
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
                   placeholder="Masukkan Berat Bukutulis"
                   name="berat"
                   value="{{ $b->berat }}"
                   required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </div>
    </div>
</form>
@endforeach
@endsection
