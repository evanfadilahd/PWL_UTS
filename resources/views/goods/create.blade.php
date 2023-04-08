@extends('layout.layout')

@section('isi')
    
<!-- START FORM -->
<form action='' method='post'>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="kode_barang" class="col-sm-2 col-form-label">kode_barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='kode_barang' id="kode_barang">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama_barang" class="col-sm-2 col-form-label">nama_barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_barang' id="nama_barang">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kategori_barang" class="col-sm-2 col-form-label">kategori_barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='kategori_barang' id="kategori_barang">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="harga" class="col-sm-2 col-form-label">harga</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='harga' id="harga">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="qty" class="col-sm-2 col-form-label">qty</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='qty' id="qty">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="submit" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SAVE</button></div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection