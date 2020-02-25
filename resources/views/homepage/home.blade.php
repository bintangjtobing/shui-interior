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
@if(session('sukses'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> Pesan berhasil dikirim dan telah kami terima. Kami akan membalas dalam waktu 1x24 jam.
    Jika tidak ada balasan selama 2x24 jam. Silahkan email kami ke info@shui-interior.com. Terima kasih!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div id="slider" class="inspiro-slider" data-height-xs="360">

    <div class="slide"
        style="background-image:url('{!!url('https://res.cloudinary.com/shui-interior-com/image/upload/v1582513385/img/features-1_xvbvgl.jpg')!!}');">
        <div class="container">
            <div class="slide-captions text-right text-light">

                <div class="col-lg-7 right text-light">
                    <div class="hero-heading-2 background-colored text-light">
                        <h3 class="m-b-0">Penyedia wallpaper dan kebutuhan interior terpercaya dan terhandal di</h3>
                        <h2 class="text-medium m-t-0">Indonesia</h2>
                        <p class="lead">Jika anda membutuhkan informasi lengkap.<br>Silahkan hubungi kami</p>
                        <a class="btn btn-light" href="#appointment">Minta penawaran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide"
        style="background-image:url('{!!url('https://res.cloudinary.com/shui-interior-com/image/upload/v1582513385/img/features-2_giainj.jpg')!!}');">
        <div class="container">
            <div class="slide-captions text-left text-light">
                <div class="col-lg-7 left text-left text-light">
                    <div class="hero-heading-2 background-colored text-light">
                        <h3 class="m-b-0">Tersedia banyak pilihan variasi wallpaper dengan</h3>
                        <h2 class="text-medium m-t-0">Design Terbaik</h2>
                        <p class="lead">Jika anda membutuhkan informasi lengkap.<br>Silahkan hubungi kami</p>
                        <a class="btn btn-light" href="#appointment">Minta penawaran</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<section>
    <div class="container">
        <div data-animate="fadeInUp" class="heading-text heading-section text-center m-b-40 animated fadeInUp visible">
            <h2>Selamat datang di Shui Interior</h2>
            <span class="lead"><strong>Shui Interior</strong> merupakan toko yang menjual beraneka kebutuhan interior
                rumah kamu.<br>Termasuk wallpaper, kasa nyamuk, blinds dan lain sebagainya.</span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($kategoriProduk as $item)
            <div class="col-md-3">
                <div class="card">
                    <img src="{!!asset('storage/kategoriProduk/img/'.$item->image)!!}" class="card-img-top"
                        alt="{{$item->nama_produk}} Shui Interior">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->nama_produk}}</h5>
                        <p class="card-text">{!!str_limit($item->deskripsi, $limit=100)!!}</p>
                        <a href="/kategori-produk/{{$item->produk_id}}" class="btn btn-primary">Lihat produk</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="text-medium">Informasi produk</div>
                <div class="accordion toggle fancy clean accordion-transparent">
                    @foreach ($kategoriProduk as $item)
                    <div class="ac-item">
                        <h5 class="ac-title">{{$item->nama_produk}}</h5>
                        <div class="ac-content">
                            {!!$item->deskripsi!!}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-5 background-colored text-light p-40">
                <div class="text-medium">Contact Us</div>
                @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    Pesan berhasil dikirim dan telah kami terima. Kami akan membalas dalam waktu 1x24 jam. Jika tidak
                    ada balasan selama 2x24 jam. Silahkan email kami ke info@sumberparts.com. Terima kasih!

                </div>
                @endif
                <form action="/kirimpesan" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" aria-required="true" name="nama" class="form-control required name"
                            placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" aria-required="true" required name="email"
                            class="form-control required email" placeholder="Enter your Email">
                    </div>
                    <div class="form-group">
                        <label for="email">Phone Number</label>
                        <input type="text" aria-required="true" name="nohp" class="form-control required"
                            placeholder="Enter your Phone number">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="text" name="notes" rows="7" class="form-control required"
                            placeholder="Enter your Message"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn button-light" type="submit" id="form-submit">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="p-t-150 p-b-150 text-light" style="background-image:url({!!asset('storage/img/truck-1sect.jpg')!!});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-lg">Kualitas produk</h2>
                <p class="lead"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 text-center" data-animate="fadeInUp" data-animate-delay="100">
                <div class="pie-chart" data-percent="90" data-color="#FCC43F" data-width="14"> <span
                        class="percent"></span> </div>
                <h4>Design</h4>
                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum cursumus.</p>
            </div>
            <div class="col-lg-3 text-center" data-animate="fadeInUp" data-animate-delay="200">
                <div class="pie-chart" data-percent="65" data-color="#FCC43F" data-width="14"> <span
                        class="percent"></span> </div>
                <h4>Tahan lama</h4>
                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum cursumus.</p>
            </div>
            <div class="col-lg-3 text-center" data-animate="fadeInUp" data-animate-delay="300">
                <div class="pie-chart" data-percent="35" data-color="#FCC43F" data-width="14"> <span
                        class="percent"></span> </div>
                <h4>Responsif</h4>
                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor.</p>
            </div>
            <div class="col-lg-3 text-center" data-animate="fadeInUp" data-animate-delay="400">
                <div class="pie-chart" data-percent="99" data-color="#FCC43F" data-width="14"> <span
                        class="percent"></span> </div>
                <h4>Bahan teruji</h4>
                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                    cursumus.</p>
            </div>
        </div>
    </div>
</section>

<section id="section6" class="no-padding">

    <div class="map" data-latitude="3.62265" data-longitude="98.67828" data-style="light"></div>

</section>
@endsection
