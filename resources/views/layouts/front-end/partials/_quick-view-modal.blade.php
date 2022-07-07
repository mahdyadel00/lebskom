{{-- <div class="modal-quick-view modal fade" id="quick-view" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content" id="quick-view-modal">

        </div>
    </div>
</div> --}}

<div class="category">
    <div class="container">
        <div class="row">
            @foreach ($sub_category as $s_category)
                <div class="col-sm-4 col-lg-2">
                    <a href="#" class="item">
                        <img class="img-fluid" src="{{ asset('assets/front-end') }}/images/category/1category.png"
                            alt="1 Catgory">
                        <h4>Footwear</h4>
                    </a>
                </div>
            @endforeach

            <div class="col-sm-4 col-lg-2">
                <a href="#" class="item">
                    <img class="img-fluid" src="{{ asset('assets/front-end') }}/images/category/6category.png"
                        alt="6 Catgory">
                    <h4>beauty</h4>
                </a>
            </div>
        </div>
    </div>
</div>
