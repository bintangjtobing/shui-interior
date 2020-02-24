@extends('dashboard.index')
@section('title','Utility Item')
@section('aktifutility','active')
@section('content')
<!-- Default box -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Kategori produk</h3>

        <div class="card-tools">
            <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahkategoriproduk">
                <i class=" fas fa-plus-circle"></i> Tambah data kategori produk
            </a>
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
        {{-- MODAL TAMBAH KATEGORI --}}
        <div class="modal fade" id="tambahkategoriproduk">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="color: #000 !important;">Tambah data kategori produk</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/tambah-data-kategori-produk" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group" style="color: #000 !important;">
                                <label for="kategori">Nama kategori produk</label>
                                <input type="text" name="nama_produk" id="nama_produk" class="form-control"
                                    placeholder="Masukkan nama kategori" autofocus>
                            </div>
                            <div class="form-group" style="color: #000 !important;">
                                <label for="kategori">Deskripsi kategori produk</label>
                                <textarea name="deskripsi" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group" style="color: #000 !important">
                                <label for="">Upload gambar utama kategori produk</label>
                                <input type="file" name="images" class="form-control" id="" required>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        {{-- END MODAL TAMBAH KATEGORI --}}
    </div>
    <?php $i=1 ?>
    <div class="card-body">
        <table id="tableJs" class="table table-bordered table-hover">
            {{-- ALERT  --}}
            @if(session('sukseskatproduk'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="far fa-check-circle"></i> Berhasil!</strong> {{session('sukses')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            {{-- END ALERT --}}
            <thead>
                <tr>
                    <th width="10px">No.</th>
                    <th>Kategori</th>
                    <th>Deskripsi kategori produk</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($kategoriProduk->count()>0)
                @foreach ($kategoriProduk as $kategori_item)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$kategori_item->nama_produk}}
                    </td>
                    <td>{!!$kategori_item->deskripsi!!}</td>
                    <td><a href="/delete-kategori-produk/{{$kategori_item->produk_id}}" class="btn btn-danger btn-sm"><i
                                class="fas fa-trash"></i></a> <a
                            href="/update-kategori-produk/{{$kategori_item->produk_id}}"
                            class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a></td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="4" class="text-center">No data founded!</td>
                </tr>
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <th width="10px">No.</th>
                    <th>Kategori</th>
                    <th>Deskripsi kategori produk</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- /.card-footer-->
</div>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Sub Kategori</h3>

        <div class="card-tools">
            <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahkategori">
                <i class=" fas fa-plus-circle"></i> Tambah data sub kategori
            </a>
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
        {{-- MODAL TAMBAH KATEGORI --}}
        <div class="modal fade" id="tambahkategori">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="color: #000 !important;">Tambah data kategori</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/tambah-data-kategori" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group" style="color: #000 !important;">
                                <label for="kategori">Nama kategori</label>
                                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control"
                                    placeholder="Masukkan nama kategori" autofocus>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        {{-- END MODAL TAMBAH KATEGORI --}}
    </div>
    <?php $i=1 ?>
    <div class="card-body">
        <table id="tableJs" class="table table-bordered table-hover">
            {{-- ALERT  --}}
            @if(session('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="far fa-check-circle"></i> Berhasil!</strong> {{session('sukses')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            {{-- END ALERT --}}
            <thead>
                <tr>
                    <th width="10px">No.</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($kategori->count()>0)
                @foreach ($kategori as $kategori_item)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$kategori_item->nama_kategori}}
                    </td>
                    <td><a href="/delete-kategori/{{$kategori_item->id}}" class="btn btn-danger btn-sm"><i
                                class="fas fa-trash"></i></a> <a href="/update-kategori/{{$kategori_item->id}}"
                            class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a></td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="3" class="text-center">No data founded!</td>
                </tr>
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- /.card-footer-->
</div>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Item</h3>

        <div class="card-tools">
            <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahitem">
                <i class=" fas fa-plus-circle"></i> Tambah data item produk
            </a>
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
        {{-- MODAL TAMBAH item --}}
        <div class="modal fade" id="tambahitem">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="color: #000 !important;">Tambah data item</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/tambah-data-item" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-6" style="color: #000 !important;">
                                    <label for="item">Nama item</label>
                                    <input type="text" name="nama_item" id="nama_item" class="form-control"
                                        placeholder="Masukkan nama produk" autofocus required>
                                </div>
                                <div class="form-group col-md-3" style="color: #000 !important;">
                                    <label for="type_product">Jenis produk</label>
                                    <select name="type_product" id="" class="custom-select" required>
                                        <option value="" selected>Pilih jenis</option>
                                        @foreach ($kategoriProduk as $itemProduk)
                                        <option value="{{$itemProduk->produk_id}}">{{$itemProduk->nama_produk}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3" style="color: #000 !important;">
                                    <label for="kategori">Kategori</label>
                                    <select name="kategori_id" id="" class="custom-select" required>
                                        <option value="" selected>Pilih kategori</option>
                                        @foreach ($kategori as $katsel)
                                        <option value="{{$katsel->id}}">{{$katsel->nama_kategori}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" style="color: #000 !important">
                                <label for="description">Deskripsi produk</label>
                                <textarea name="description" class="form-control" cols="30" rows="5"
                                    placeholder="Masukkan deskripsi produk..."></textarea>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="color: #000 !important">
                                        <label for="">Tokopedia shared link</label>
                                        <input type="url" class="form-control" name="tokopedia_link" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="color: #000 !important">
                                        <label for="">Shopee shared link</label>
                                        <input type="url" class="form-control" name="shopee_link" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="color: #000 !important">
                                <label for="">Upload gambar utama produk</label>
                                <input type="file" name="images" class="form-control" id="" required>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        {{-- END MODAL TAMBAH KATEGORI --}}
    </div>
    <?php $i=1 ?>
    <div class="card-body">
        <table id="tableItem" class="table table-bordered table-hover">
            {{-- ALERT  --}}
            @if(session('suksesitem'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="far fa-check-circle"></i> Berhasil!</strong> {{session('suksesitem')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            {{-- END ALERT --}}
            <thead>
                <tr>
                    <th width="10px">No.</th>
                    <th>Nama produk</th>
                    <th>Jenis</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($item->count()>0)
                @foreach ($itemkategori as $kategori_item)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$kategori_item->nama_item}}
                    </td>
                    <td>{{$kategori_item->nama_produk}}</td>
                    <td>@if($kategori_item->kategori_id){{$kategori_item->nama_kategori}}@endif</td>
                    <td><a href="{!!asset('storage/shop/img/'.$kategori_item->images)!!}" target="_blank">Open image
                            on a new tab</a></td>
                    <td><a href="/delete-item/{{$kategori_item->itemId}}" class="btn btn-danger btn-sm"><i
                                class="fas fa-trash"></i></a> <a href="/update-item/{{$kategori_item->itemId}}"
                            class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a></td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="5" class="text-center">No data founded!</td>
                </tr>
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Nama produk</th>
                    <th>Jenis</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- /.card-footer-->
</div>
@endsection
