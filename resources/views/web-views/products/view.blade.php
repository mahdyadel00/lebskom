@extends('layouts.front-end.app')


@section('title',ucfirst($data['data_from']).' products')
@section('content')

{{--@include('web-views.products.category-nav')--}}
<div class="navbar navbar-expand-md navbar-stuck-menu" style="display: flex;
          flex-direction: row;
          flex-wrap: nowrap;
          align-content: center;
          justify-content: flex-start;
          align-items: center;
          background-color: white;
          box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
          padding: 0px 15px;">

    @if ($menu->childes->count() > 0)
        @foreach ($menu['childes'] as $subCategory)
            <ul class="navbar-nav mobile_nav">
                <li class="nav-item dropdown active">

                    <div class="catmenu dropdown">
                        <div style="cursor:pointer; white-space: nowrap;color: black !important; font-weight: bold;"
                             class="nav-link dropdown-item flex-between" <?php if ($subCategory->childes->count() > 0) {
                            echo "data-toggle='dropdown'";
                        } ?>>
                            {{ $subCategory->name }}
                        </div>

                        @if ($subCategory->childes->count() > 0)
                            <div class="dropdown-menu" style="position:absolute;" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="javascript:"
                                   onclick="location.href='{{ route('products', ['id' => $subCategory['id'], 'data_from' => 'category', 'page' => 1]) }}'"><span
                                        class="childmenuMain">{{ $subCategory->name }} (ALL)</span></a>
                                @foreach ($subCategory['childes'] as $subSubCategory)
                                    <a class="dropdown-item"
                                       href="{{ route('products', ['id' => $subSubCategory['id'], 'data_from' => 'category', 'page' => 1]) }}"><span
                                            class="childmenu">{{ $subSubCategory['name'] }}</span></a>
                                @endforeach
                            </div>
                        @endif


                    </div>
                </li>
            </ul>
        @endforeach
    @endif

</div>


@include('layouts.front-end.partials._modals')


@if(count($featured_products) > 0)
    <section class="container rtl">
        <!-- Heading-->
        <div class="section-header">
            <div class="feature_header">
                <span class="for-feature-title">{{ \App\CPU\translate('featured_products')}}</span>
            </div>
            <div>
                <a class="btn btn-outline-accent btn-sm viw-btn-a"
                   href="{{route('products',['data_from'=>'featured','page'=>1])}}">
                    {{ \App\CPU\translate('view_all')}}
                    <i class="czi-arrow-{{Session::get('direction') === "rtl" ? 'left mr-1 ml-n1' : 'right ml-1 mr-n1'}}"></i>
                </a>
            </div>
        </div>
       {{--<hr class="view_border">--}}
         <!-- Grid-->
        <div class="row mt-2 mb-3">
            @foreach($featured_products as $product)
             @if ($category->id == json_decode($product->category_ids)[0]->id)
                 {{--<div class="col-xl-2 col-sm-3 col-6" style="margin-bottom: 10px">--}}
                     {{--@include('web-views.partials._single-product',['product'=>$product])--}}
                     {{--<hr class="d-sm-none">--}}
                 {{--</div>--}}

                    <div class="col-md-6 col-lg-4">
                        @include('web-views.partials._single-product',['product'=>$product])
                    </div>


                @endif
            @endforeach
        </div>
    </section>
@endif
@endsection
