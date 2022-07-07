{{--  <style>
    .close {
        z-index: 99;
        background: white !important;
        padding: 3px 8px !important;
        margin: -23px -12px -1rem auto !important;
        border-radius: 50%;
    }
</style>
@if(isset($banner))
    <div class="modal fade" id="popup-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="padding: 1px;border-bottom: 0px!important;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 3px!important; cursor: pointer"
                     onclick="location.href='{{$banner['url']}}'">
                    <img class="d-block w-100"
                         onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                         src="{{asset('storage/app/public/banner')}}/{{$banner['photo']}}"
                         alt="">
                </div>
            </div>
        </div>
    </div>
@endif  --}}


<div id="carouselHeaderHome" class="carousel slide header" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselHeaderHome" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselHeaderHome" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselHeaderHome" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="#"><img src="{{ asset('assets/front-end') }}/images/header/1%20header.png"
                    class="d-block w-100" alt="1 Header"></a>
        </div>
        <div class="carousel-item">
            <a href="#"><img src="{{ asset('assets/front-end') }}/images/header/2%20header.png"
                    class="d-block w-100" alt="2 Header"></a>
        </div>
        <div class="carousel-item">
            <a href="#"><img src="{{ asset('assets/front-end') }}/images/header/1%20header.png"
                    class="d-block w-100" alt="3 Header"></a>
        </div>
        <div class="carousel-item">
            <a href="#"><img src="{{ asset('assets/front-end') }}/images/header/2%20header.png"
                    class="d-block w-100" alt="4 Header"></a>
        </div>
    </div>
</div>
{{--  @php($banner=\App\Model\Banner::inRandomOrder()->where(['published'=>1,'banner_type'=>'Popup Banner'])->first())
@if(isset($banner))

<div class="category">
    <div class="container">
        <div class="row">
                <div class="col-sm-4 col-lg-2">
                    <a href="{{$banner['url']}}" class="item">
                        <img class="img-fluid" src="{{asset('storage/app/public/banner')}}/{{$banner['photo']}}"
                            alt="1 Catgory">
                        <h4>Footwear</h4>
                    </a>
                </div>

        </div>
    </div>
</div>
@endif  --}}
