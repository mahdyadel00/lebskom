{{--  <div class="d-table table-fixed w-100">
    <a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)">
        <span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span>
        <span class="cz-handheld-toolbar-label">{{\App\CPU\translate('Menu')}}</span></a>
    <a class="d-table-cell cz-handheld-toolbar-item" href="{{route('wishlists')}}">
        <span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span>
        <span class="cz-handheld-toolbar-label">{{\App\CPU\translate('Wishlist')}} (<span class="countWishlist">{{session()->has('wish_list')?count(session('wish_list')):0}}</span>)</span></a>

    <a class="d-table-cell cz-handheld-toolbar-item" href="{{route('shop-cart')}}">
        <span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i>
            <span class="badge badge-primary badge-pill ml-1" id="cart_count">{{session()->has('cart') && count( session()->get('cart')) > 0 ? count( session()->get('cart')):0}}</span>
        </span>
        <span class="cz-handheld-toolbar-label" id="cart_total_price">
            @if(session()->has('cart'))

                @if(count( session()->get('cart')) > 0)
                    <?php
                    $total1 = 0;
                    ?>
                    @foreach(session()->get('cart') as $key => $cartItem1)
                        <?php
                        $product_subtotal1 = \App\CPU\convert_price($cartItem1['price'] * $cartItem1['quantity']);
                        $total1 += $product_subtotal1;
                        ?>
                    @endforeach
                    {{number_format($total1,2).\App\CPU\currency_symbol()}}
                @else
                    0{{\App\CPU\currency_symbol()}}
                @endif
            @else
                0{{\App\CPU\currency_symbol()}}
            @endif
        </span>
    </a>
</div>  --}}

<div class="content-home-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="#" class="item">
                    <img class="img-fluid" src="{{ asset('assets/front-end') }}/images/content-home-page/0.png"
                        alt="0 Content Home Page">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <a href="#" class="item">
                    <img class="img-fluid" src="{{ asset('assets/front-end') }}/images/content-home-page/1.png"
                        alt="1 Content Home Page">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="#" class="item">
                    <img class="img-fluid" src="{{ asset('assets/front-end') }}/images/content-home-page/2.png"
                        alt="2 Content Home Page">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="#" class="item">
                    <img class="img-fluid" src="{{ asset('assets/front-end') }}/images/content-home-page/3.png"
                        alt="3 Content Home Page">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="item">
                    <img class="img-fluid" src="{{ asset('assets/front-end') }}/images/content-home-page/4.png"
                        alt="4 Content Home Page">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="item">
                    <img class="img-fluid" src="{{ asset('assets/front-end') }}/images/content-home-page/5.png"
                        alt="5 Content Home Page">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="item">
                    <img class="img-fluid" src="{{ asset('assets/front-end') }}/images/content-home-page/6.png"
                        alt="6 Content Home Page">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <a href="#" class="item">
                    <img class="img-fluid" src="{{ asset('assets/front-end') }}/images/content-home-page/7.png"
                        alt="7 Content Home Page">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="#" class="item">
                    <img class="img-fluid" src="{{ asset('assets/front-end') }}/images/content-home-page/8.png"
                        alt="8 Content Home Page">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="#" class="item">
                    <img class="img-fluid" src="{{ asset('assets/front-end') }}/images/content-home-page/9.png"
                        alt="9 Content Home Page">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="item">
                    <img class="img-fluid"
                        src="{{ asset('assets/front-end') }}/images/content-home-page/10.png"
                        alt="10 Content Home Page">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="item">
                    <img class="img-fluid"
                        src="{{ asset('assets/front-end') }}/images/content-home-page/11.png"
                        alt="11 Content Home Page">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <a href="#" class="item">
                    <img class="img-fluid"
                        src="{{ asset('assets/front-end') }}/images/content-home-page/12.png"
                        alt="12 Content Home Page">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="#" class="item">
                    <img class="img-fluid"
                        src="{{ asset('assets/front-end') }}/images/content-home-page/13.png"
                        alt="13 Content Home Page">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="#" class="item">
                    <img class="img-fluid"
                        src="{{ asset('assets/front-end') }}/images/content-home-page/14.png"
                        alt="14 Content Home Page">
                </a>
            </div>
        </div>
    </div>
</div>
