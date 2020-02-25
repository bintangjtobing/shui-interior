@extends('homepage.extends')
@section('title','| Beranda')
@section('keywords','shuiinterior,shui-interior, shui interior medan, wallpaper medan, roller blinds medan')
@section('desc','Shui Interior merupakan toko yang menjual beraneka kebutuhan interior rumah kamu. Termasuk wallpaper,
kasa nyamuk, blinds dan lain sebagainya.')
@section('menu')
<li class="dropdown"><a href="#">Produk kami</a>
    <ul class="dropdown-menu">
        @foreach ($kategoriProduk as $itemBy)
        <li><a href="/kategori-produk/{{$itemBy->produk_id}}">{{$itemBy->nama_produk}}</a></li>
        @endforeach
    </ul>
</li>
@endsection
@section('content')
<section id="page-title">
    <div class="container">
        <div class="page-title">
            <h1>Hubungi kami</h1>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="#">Home</a>
                </li>
                <li class="active"><a href="/contact">Hubungi kami</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-uppercase">Hubungi kami</h3>
                @if(session('sukses'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> Pesan kamu berhasil dikirim!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <div class="m-t-30">
                    <form action="/kirimpesan" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" aria-required="true" name="nama" required
                                    class="form-control required name" placeholder="Masukkan nama lengkap kamu">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" aria-required="true" name="email" required
                                    class="form-control required email" placeholder="Masukkan email lengkap kamu">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="nohp">No Telepon/HP</label>
                                <input type="text" name="nohp" required class="form-control"
                                    placeholder="Masukkan nomor HP aktif yang bisa dihubungi">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="subject">Topik pesan</label>
                                <input type="text" name="subject" placeholder="Masukkan topik pesan kamu"
                                    class="form-control required">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Pesan</label>
                                <textarea name="notes" class="form-control" placeholder="Masukkan pesan" cols="30"
                                    rows="6"></textarea>
                            </div>
                        </div>


                        <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;KIRIM
                            PESAN</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="text-uppercase">Alamat & Peta</h3>
                <div class="row">
                    <div class="col-lg-8">
                        <address>
                            <strong>Medan</strong><br>
                            Jl. Mustafa No. 80B<br>
                            Pulo Brayan Darat I Kec.Medan Timur<br>
                            Kota Medan, Sumatera Utara, 20239<br>
                            <a href=""><i class="fas fa-phone"></i> +62 853 7373 0023</a>
                        </address>
                    </div>
                </div>

                <div class="map" data-latitude="3.62265" data-longitude="98.67828" data-style="light">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
