@extends('layouts.front-end.app')

@section('title', ucfirst($data['data_from']) . ' products')
@section('content')

    @include('layouts.front-end.partials._modals')

    @if (count($featured_products) > 0)
        <section class="container rtl">
            <!-- Heading-->
            <div class="section-header">
                <div class="feature_header">
                    <span class="for-feature-title">{{ \App\CPU\translate('featured_products') }}</span>
                </div>
                <div>
                    <a class="btn btn-outline-accent btn-sm viw-btn-a"
                        href="{{ route('products', ['data_from' => 'featured', 'page' => 1]) }}">
                        {{ \App\CPU\translate('view_all') }}
                        <i
                            class="czi-arrow-{{ Session::get('direction') === 'rtl' ? 'left mr-1 ml-n1' : 'right ml-1 mr-n1' }}"></i>
                    </a>
                </div>
            </div>
            <!-- Grid-->
            <div class="col-lg-9">
                <div class="row">
                    @foreach ($featured_products as $product)
                        @if ($category->id == json_decode($product->category_ids)[0]->id)


                            @include('web-views.partials._single-product', ['product' => $product])
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
