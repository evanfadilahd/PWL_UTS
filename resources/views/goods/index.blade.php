@extends('layout.layout')

@section('isi')
<!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="{{ url('goods') }}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ 
                Request::get('katakunci') }}" placeholder="Masukkan kata kunci" 
                aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>
    
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href='{{ url('goods/create') }}' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">id_barang</th>
                <th class="col-md-2">kode_barang</th>
                <th class="col-md-2">nama_barang</th>
                <th class="col-md-2">kategori_barang</th>
                <th class="col-md-2">harga</th>
                <th class="col-md-1">qty</th>
                <th class="col-md-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- Beda : <?php $i = $data->firstItem() ?> --}}
            @foreach ($data as $item)
            <tr>
                <td> {{ $item->id_barang }} </td>
                <td> {{ $item->kode_barang }} </td>
                <td> {{ $item->nama_barang }} </td>
                <td> {{ $item->kategori_barang }} </td>
                <td> {{ $item->harga }} </td>
                <td> {{ $item->qty }} </td>
                <td>
                    <a href=' {{ url('goods/'.$item->id_barang.'/edit') }} ' class="btn btn-warning btn-sm">Edit</a>
                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class="d-inline" action=" {{ url('goods/'.$item->id_barang) }} "
                        method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            {{-- Beda : <?php $i++ ?> --}}
            @endforeach
        </tbody>
    </table>
    {{ $data->withQueryString() -> links('pagination::bootstrap-5') }}
</div>
<!-- AKHIR DATA -->
@endsection
