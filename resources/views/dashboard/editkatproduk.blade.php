@extends('dashboard.index')
@section('title','Edit kategori produk '.$katproduk->nama_kategori)
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Data {{$katproduk->produk_id}} | {{$katproduk->nama_produk}}</h3>
    </div>
    <form action="/proses-kategori-produk/{{$katproduk->produk_id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group col-md-12">
                <label for="">Update gambar utama kategori produk</label>
                <img src="{!!asset('storage/kategoriProduk/img/'.$katproduk->image)!!}"
                    class="editimageitem form-control mb-2">
                <input type="file" id="img" name="images" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">ID Kategori</label>
                    <input type="text" name="produk_id" class="form-control" placeholder="{{$katproduk->produk_id}}"
                        disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Nama Kategori</label>
                    <input type="text" name="nama_produk" class="form-control"
                        placeholder="{{$katproduk->namaa_produk}}" value="{{$katproduk->nama_produk}}">
                </div>
            </div>
            <div class="form-group col-md-12">
                <label for="">Deskripsi Kategori</label>
                <textarea name="deskripsi" class="form-control" cols="30"
                    rows="10">{!!$katproduk->deskripsi!!}</textarea>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<!-- /.card -->
@endsection
