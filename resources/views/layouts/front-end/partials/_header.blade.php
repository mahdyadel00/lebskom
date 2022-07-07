<header>
    <!-- :: Top Navbar -->
    <div class="top-navbar">
        <div class="container-fluid">
            <div class="box-content">
                <div class="dropdown language-box">
                    <button class="dropdown-toggle" type="button" id="dropdownLanguage1" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img class="img-fluid" src="{{ asset('assets/front-end') }}/images/language/1.jpg"
                            alt="1 language"> English
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownLanguage1">
                        <li><a class="dropdown-item" href="#"><img class="img-fluid"
                                    src="{{ asset('assets/front-end') }}/images/language/1.jpg"
                                    alt="1 language">
                                English</a></li>
                    </ul>
                </div>
                <ul class="info-box">
                    <li><i class="fa-solid fa-truck-fast"></i> Fast Delivery</li>
                    <li><i class="fa-solid fa-money-bill-1"></i> cash on Delivery</li>
                    <li><i class="fa-solid fa-star"></i> genuine products</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- :: Navbar -->
    <div class="navbar">
        <div class="container-fluid">
            <div class="box-content">
                <ul class="links-box">
                    @foreach ($categories = \App\Model\Category::with(['childes.childes'])->where('position', 0)->get() as $key => $category)
                        <li>
                            <a
                                href="{{ route('products', ['id' => $category['id'], 'data_from' => 'category', 'page' => 1]) }}'">
                                {{ $category->name }}

                        </li>
                    @endforeach
                </ul>
                <div class="logo-box">
                    <a href="{{ route('home') }}">
                        <img class="img-fluid logo" src="{{ asset('assets/front-end') }}/images/logo/logo.png"
                            alt="1 Logo">
                    </a>
                </div>
                <form action="{{ route('products') }}" type="submit">
                    <input class="form-control input_search"  type="text" autocomplete="off" placeholder="{{ \App\CPU\translate('search') }}" name="name" >
                    <button class="input-group-append-overlay search_button" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <input name="data_from" value="search" hidden>
                    <input name="page" value="1" hidden>
                    <diV class="card search-card"
                    style="position: absolute;background: white;z-index: 999;width: 100%;display: none">
                    <div class="card-body search-result-box"
                        style="overflow:scroll; height:400px;overflow-x: hidden"></div>
                </diV>
                </form>
                <ul class="icons">

                    <li><a href="{{ route('customer.auth.login') }}" ><i class="fa-solid fa-user"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                    <li><a href="{{ route('customer.auth.login') }}"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                    <li class="open-nav-bar"><a href="#"><i class="fa-solid fa-bars"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

</header>
