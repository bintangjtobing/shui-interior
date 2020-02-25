<div class="ajax-quick-view">
    <div class="quick-view-content">
        <div class="product">
            <div class="row">
                <div class="col-lg-5">
                    <div class="carousel" data-items="1">
                        <img src="{!!asset('storage/shop/img/'.$item->images)!!}" alt="{{$item->nama_item}}"
                            style="max-width: 400px;height: auto;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="product-description">
                        <div class="product-title">
                            <h3><a href="#">{{$item->nama_item}}</a></h3>
                        </div>
                        <div class="product-price"><ins></ins>
                        </div>
                        <div class="product-rate">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div><br>
                        <p>Tersedia di: <a href="{{$item->tokopedia_link}}" target="_blank"><img
                                    src="https://res.cloudinary.com/shui-interior-com/image/upload/v1582532985/img/tokopedia_vfkosi.png"
                                    alt="" class="img-viewdes"></a> <a href="{{$item->shopee_link}}"
                                target="_blank"><img
                                    src="https://res.cloudinary.com/shui-interior-com/image/upload/v1582532984/img/shopee_ikumyj.png"
                                    alt="" class="img-viewdes"></a></p>
                        <div class="seperator m-b-10"></div>
                        <p>{!!$item->description!!}</p>
                        <div class="seperator m-t-20 m-b-10"></div>
                    </div>
                    {{-- <div class="m-t-10">
                        <h6>Select quantity</h6>
                        <div class="cart-product-quantity">
                            <div class="quantity m-l-5">
                                <input type="button" value="-" class="minus">
                                <input type="text" value="1" class="qty">
                                <input type="button" value="+" class="plus">
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="/dapatkan-penawaran/{{$item->itemId}}" class="btn bg-primary">Minta
                                penawaran</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
