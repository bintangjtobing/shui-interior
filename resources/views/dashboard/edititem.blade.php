@extends('dashboard.index')
@section('title','Edit item produk '.$item->nama_item)
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Data {{$item->itemId}} | {{$item->nama_item}}</h3>
    </div>
    <form action="/proses-item/{{$item->itemId}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Nama Kategori</label>
                    <input type="text" name="nama_item" class="form-control" value="{{$item->nama_item}}">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Jenis produk</label>
                    <select name="type_product" class="custom-select" id="">
                        @foreach ($kategoriProduk as $itemProduk)
                        <option value="{{$itemProduk->produk_id}}">{{$itemProduk->nama_produk}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="">Kategori produk</label>
                    <select name="kategori_id" class="custom-select" id="">
                        @foreach ($itemkategori as $itemall)
                        <option value="{{$itemall->id}}" selected>{{$itemall->nama_kategori}}</option>
                        @endforeach
                        @foreach ($kategori as $kategoriitem)
                        <option value="{{$kategoriitem->id}}">{{$kategoriitem->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Link tokopedia</label>
                    <input type="url" name="tokopedia_link" class="form-control" value="{{$item->tokopedia_link}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Link Shopee</label>
                    <input type="url" name="shopee_link" class="form-control" value="{{$item->shopee_link}}" id="">
                </div>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi produk</label>
                <textarea name="description" class="form-control" cols="30" rows="5">{!!$item->description!!}</textarea>
            </div>
            <div class="form-group">
                <label for="">Update gambar utama produk</label>
                <img src="{!!asset('storage/shop/img/'.$item->images)!!}" class="editimageitem form-control mb-2">
                <input type="file" id="img" name="images" class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<!-- /.card -->
@endsection
