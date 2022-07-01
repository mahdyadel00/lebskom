<style>
 .product-grid{ font-family: 'Poppins', sans-serif; }
.product-grid .product-image{
    overflow: hidden;
    position: relative;
    z-index: 1;
}
.product-grid .product-image a.image{display: block; }
.product-grid .product-image img{
    width: 100%;
    height: auto;
}
.product-grid .product-image .img-1{ transition: all 0.3s ease 0s; }
.product-grid:hover .product-image .img-1{ opacity: 0; }
.product-grid .product-image .img-2{
    width: 100%;
    height: 100%;
    opacity: 0;
    backface-visibility: hidden;
    position: absolute;
    left: 0;
    top: 0;
    z-index: -1;
    transition: all 0.3s ease 0s;
}
.product-grid:hover .product-image .img-2{ opacity: 1; }
.product-grid .product-hot-label,
.product-grid .product-discount-label{
    color: #fff;
    background: #ff6f00;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    padding: 3px 10px;
    position: absolute;
    top: 10px;
    left: 10px;
}
.product-grid .product-discount-label{
    background: #ff3939;
    left: auto;
    right: 10px;
}
.product-grid .product-view{
    color: #fff;
    background:#fff;
    font-size: 16px;
    text-align: right;
    line-height: 50px;
    width: 60px;
    height: 60px;
    padding: 0 16px 0 0;
    border-radius: 50px;
    opacity: 0;
    transform: scale(0);
    position: absolute;
    bottom: -40px;
    left: -40px;
    transition: all .3s ease;
}
.product-grid:hover .product-view{
    opacity: 1;
    transform: scale(1);
    bottom: -20px;
    left: -20px;
}
.product-grid .product-view:hover{ background: #ff6f00; }
.product-grid .product-links{
    padding: 0;
    margin: 0;
    list-style: none;
    transform: translateY(50%);
    position: absolute;
    bottom: 50%;
    right: 10px;
    z-index: 1;
}
.product-grid .product-links li{
    margin: 5px 0;
    opacity: 0;
    transform: translateX(100%);
    transition: all .3s ease;
}
.product-grid .product-links li:nth-child(2){ transition-delay: .1s; }
.product-grid .product-links li:nth-child(3){ transition-delay: .2s; }
.product-grid:hover .product-links li{
    opacity: 1;
    transform: translateX(0);
}
.product-grid .product-links li a{
    color: #000;
    background: #fff;
    font-size: 18px;
    text-align: center;
    line-height: 33px;
    width: 35px;
    height: 35px;
    border: 1px solid #000;
    display: block;
    transition: all .3s ease;
}
.product-grid .product-links li a:hover{
    color: #fff;
    background:#ff6f00;
    border-color: #ff6f00;
}
.product-grid .product-content{
    background: #fff;
    padding: 15px 0 0;
}
.product-grid .rating{
    color: #f7bc3d;
    font-size: 11px;
    padding: 0;
    margin: 0 0 8px;
    list-style: none;
}
.product-grid .rating li{ display: inline-block; }
.product-grid .rating .disable{ color: #a3a3a3; }
.product-grid .title{
    font-size: 15px;
    font-weight: 500;
    text-transform: capitalize;
    margin: 0 0 8px;
}
.product-grid .title a{
    color: #333;
    transition: all 0.3s ease 0s;
}
.product-grid .title a:hover{ color: #ff6f00; }
.product-grid .price{
    color: #a3a3a3;
    font-size: 15px;
    font-weight: 500;
}
.product-grid .price span{
    color: #999;
    font-size: 14px;
    font-weight: 400;
    text-decoration: line-through;
    margin-right: 5px;
}
@media screen and (max-width: 990px){
    .product-grid{ margin-bottom: 30px; }
}
</style>

@foreach($products as $product)
    @if(!empty($product['product_id']))
        @php($product=$product->product)
    @endif
    <!-- <div class=" {{Request::is('products*')?'col-lg-3 col-md-4 col-sm-4 col-6':'col-lg-2 col-md-3 col-sm-4 col-6'}} {{Request::is('shopView*')?'col-lg-3 col-md-4 col-sm-4 col-6':''}} mb-2"> -->
    <div class="col-md-3 col-sm-6">
        @if(!empty($product))
            @include('web-views.partials._single-product',['p'=>$product])
        @endif
    </div>
@endforeach

<div class="col-12">
    <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation" id="paginator-ajax">
        {!! $products->links() !!}
    </nav>
</div>
