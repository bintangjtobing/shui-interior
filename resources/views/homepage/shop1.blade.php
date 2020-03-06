@extends('homepage.extends')
@foreach ($kategoriProduk as $item)
@section('title','Produk '.$item->nama_produk)
@endforeach
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
            @foreach ($itemkategori as $item)

            <h1>{{$item->nama_produk}}</h1>
            @endforeach
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="/">Home</a>
                </li>
                <li><a href="#">Toko</a>
                </li>
                @foreach ($itemkategori as $item)
                <li class="active"><a href="">{{$item->nama_produk}}</a>
                    @endforeach
                </li>
            </ul>
        </div>
    </div>
</section>


<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">

            <div class="content col-lg-9">
                <div class="row m-b-20">
                    <div class="col-lg-8 p-t-10 m-b-20">
                        @foreach ($itemkategori as $item)
                        <h3 class="m-b-20">{{$item->nama_produk}}</h3>
                        @endforeach
                        {{-- <input type="search" name="search" id="" placeholder="Cari produk disini..."
                            class="form-control"> --}}
                    </div>
                </div>

                <div class="shop">
                    <div class="grid-layout grid-3-columns" data-item="grid-item">
                        @if($itemkategori->count()<1) <p>No data founded</p>
                            @else
                            @foreach ($itemkategori as $itemdata)
                            <div class="grid-item">
                                <div class="product">
                                    <div class="product-image">
                                        <a href="/ajax-product/{{$itemdata->itemId}}" data-lightbox="ajax"><img
                                                alt="Shop product image!"
                                                src="{!!asset('storage/shop/img/'.$itemdata->images)!!}">
                                        </a>
                                        <a href="/ajax-product/{{$itemdata->itemId}}" data-lightbox="ajax"><img
                                                alt="Shop product image!"
                                                src="{!!asset('storage/shop/img/'.$itemdata->images)!!}">
                                        </a>
                                        <span class="product-new">NEW</span>
                                        <span class="product-wishlist">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                        </span>
                                        <div class="product-overlay">
                                            <a href="/ajax-product/{{$itemdata->itemId}}" data-lightbox="ajax">Quick
                                                View</a>
                                        </div>
                                    </div>
                                    <div class="product-description">
                                        <div class="product-category">{{$itemdata->nama_produk}}</div>
                                        <div class="product-title">
                                            <h3><a href="#">{{$itemdata->nama_item}}</a></h3>
                                        </div>
                                        <div class="product-price"><ins></ins>
                                        </div>
                                        <div class="product-rate">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="product-reviews"><a
                                                href="#">@if($itemdata->kategori_id){{$itemdata->nama_kategori}}@endif</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                    </div>
                    <hr>

                    <ul class="pagination">
                        {{$itemkategori->links()}}
                    </ul>

                </div>

            </div>

            <div class="sidebar sticky-sidebar col-lg-3">

                <div class="widget widget-archive">
                    <h4 class="widget-title">Product categories</h4>

                    @foreach ($kategori as $item)
                    <div class="tags">
                        <a href="/kategori-item/{{$item->id}}">{{$item->nama_kategori}}</a>
                    </div>
                    @endforeach
                </div>

                {{-- <div class="widget widget-tags">
                    <h4 class="widget-title">Tags</h4>
                    <div class="tags">
                        <a href="#">Design</a>
                        <a href="#">Portfolio</a>
                        <a href="#">Digital</a>
                        <a href="#">Branding</a>
                        <a href="#">HTML</a>
                        <a href="#">Clean</a>
                        <a href="#">Peace</a>
                        <a href="#">Love</a>
                        <a href="#">CSS3</a>
                        <a href="#">jQuery</a>
                    </div>
                </div> --}}


            </div>
        </div>
</section>
@endsection
