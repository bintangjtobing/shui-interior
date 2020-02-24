@extends('dashboard.index')
@section('title','Edit kategori item '.$kategori->nama_kategori)
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Data {{$kategori->id}} | {{$kategori->nama_kategori}}</h3>
    </div>
    <form action="/proses-kategori/{{$kategori->id}}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">ID Kategori</label>
                    <input type="text" name="" class="form-control" placeholder="{{$kategori->id}}" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control"
                        placeholder="{{$kategori->nama_kategori}}" value="{{$kategori->nama_kategori}}">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<!-- /.card -->
@endsection
