@extends('homepage.extends')
@section('title','| Penawaran produk')
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
<section id="page-title"
    data-bg-parallax="{!!url('https://res.cloudinary.com/shui-interior-com/image/upload/v1582526522/img/features-3_f65ktv.jpg')!!}">
    <div class="container">
        <div class="page-title">
            <h1>Penawaran produk <b>{{$item->nama_item}}</b></h1>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-uppercase">Dapatkan penawaran!</h3>
                <p>Produk: <strong>{{$item->nama_item}}</strong><br>
                </p>
                <div class="m-t-30">
                    <form action="/kirim-penawaran" method="post">
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
                                    placeholder="Masukkan nomor aktif yang bisa dihubungi">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="subject">Saya tertarik produk</label>
                                <input type="text" name="subject" readonly class="form-control required"
                                    value="{{$item->nama_item}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Catatan</label>
                                <textarea name="notes" class="form-control" placeholder="Masukkan catatan penting kamu"
                                    cols="30" rows="6"></textarea>
                            </div>
                        </div>


                        <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;KIRIM
                            PENAWARAN</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="text-uppercase">Review Produk</h3>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{!!asset('storage/shop/img/'.$item->images)!!}" alt="{{$item->nama_item}}"
                            class="gambardipenawaran">
                    </div>
                    <div class="col-lg-8 text-left">
                        <address>
                            <strong>{{$item->nama_item}}</strong><br>
                            {!!$item->description!!}<br>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
