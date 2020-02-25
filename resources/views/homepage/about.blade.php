@extends('homepage.extends')
@section('title','| Tentang kami')
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
    data-bg-parallax="{!!asset('https://res.cloudinary.com/shui-interior-com/image/upload/v1582526522/img/features-3_f65ktv.jpg')!!}">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="page-title">
            <h1 class="text-uppercase text-medium">TENTANG KAMI</h1>
        </div>
    </div>
</section>

<section class="p-b-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="heading-text heading-section">
                    <h2>Shui Interior</h2>
                    <span class="lead">Shui Interior didirikan tahun 2020 dan seiring dengan perkembangan perusahaan,
                        saat ini telah memiliki toko sendiri yaitu berpusat di Medan.
                        Shui Interior merupakan toko yang menjual beraneka kebutuhan interior
                        rumah kamu. Termasuk wallpaper, kasa nyamuk, blinds dan lain sebagainya. </span>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="heading-text heading-section">
                    <h2>VISI MISI</h2>
                    <span class="lead text-center"><b>Visi</b><br>Menjadi supplier kebutuhan interior rumah tangga
                        terlengkap dan terpercaya
                        di Indonesia.<br>
                        <br></span> <span class="lead text-center"><b>Misi</b><br><b>1. Pasar</b> - Melakukan ekspansi
                        pasar
                        secara
                        berkesinambungan.<br>
                        <b>2. Sumber Daya Manusia</b> - Merekrut SDM yang berkualias untuk mendukung perkembangan
                        perusahaan.<br>
                        <b>3. Kualitas Produk</b> – Memberikan kualitas produk yang baik dan konsisten kepada
                        pelanggan.<br>
                        <b>4. Pengiriman</b> – Memberikan layanan pengiriman yang cepat kepada pelanggan
                        perusahaan.<br>
                        <b>5. Sistem</b> – Mengembangkan dan menerapkan sistem operasional dan administrasi untuk
                        meningkatkan
                        efektivitas dan efisiensi kerja.<br>
                    </span>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
