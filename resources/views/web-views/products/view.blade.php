@extends('layouts.front-end.app')

@section('title',ucfirst($data['data_from']).' products')
@section('content')

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
                 <div class="col-xl-2 col-sm-3 col-6" style="margin-bottom: 10px">
                     @include('web-views.partials._single-product',['product'=>$product])
                     {{--<hr class="d-sm-none">--}}
                 </div>
             @endif
            @endforeach
        </div>
    </section>
@endif
@endsection

{
