@php($overallRating = \App\CPU\ProductManager::get_overall_rating($product->reviews))
<!-- <div class="col-md-3 col-sm-6"> -->
        <div class="product-grid" style="margin-bottom: 12px; box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);">
            <div class="product-image" style="max-height: 230px;">
                <a href="{{route('product',$product->slug)}}" class="image">
                    <img class="img-1" src="https://ik.imagekit.io/lebskom/thumbnail/{{$product['thumbnail']}}">
                    <img class="img-2" src="https://ik.imagekit.io/lebskom/thumbnail//{{$product['thumbnail']}}">
                </a>


                <!-- @if($product->images!=null && json_decode($product->images)>0)
                <a href="{{route('product',$product->slug)}}" class="image">
                    <img class="img-1" src="">
                    <img class="img-2" src="">
                </a>

                @else
                 <a href="{{route('product',$product->slug)}}" class="image">
                     <img class="img-1" src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                      onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'">
                 </a>
                @endif -->


                <!-- <ul class="product-links">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul> -->


                @if(Request::is('product/*'))
                <a href="{{route('product',$product->slug)}}" class="product-view"><i class="fa fa-search"></i></a>
                @else
                <a href="javascript:"onclick="quickView('{{$product->id}}')" class="product-view"><i class="fa fa-eye"></i></a>
                @endif
            </div>
            <div class="product-content" style="padding: 6px;">
                <ul class="rating">
                @for($inc=0;$inc<5;$inc++)
                    @if($inc<$overallRating[0])
                        <i class="sr-star czi-star-filled active"></i>
                    @else
                        <i class="sr-star czi-star"></i>
                    @endif
                @endfor
                    <li class="disable">( {{$product->reviews_count}} )</li>
                </ul>
                <h3 class="title"><a style="font-weight: bold" href="{{route('product',$product->slug)}}">{{ Str::limit($product['name'], 25) }}</a></h3>


                <div style="display: flex; align-items: center;">
                <div class="price" style="color: black; font-weight: bold">{{\App\CPU\Helpers::currency_converter(
                        $product->unit_price-(\App\CPU\Helpers::get_product_discount($product,$product->unit_price))
                    )}}</div>
                @if($product->discount > 0)
                <strike style="margin-left: 6px;font-size: 12px!important;color: grey!important;">
                        {{\App\CPU\Helpers::currency_converter($product->unit_price)}}
                    </strike>
                @endif
                </div>

            </div>
        </div>
    <!-- </div> -->