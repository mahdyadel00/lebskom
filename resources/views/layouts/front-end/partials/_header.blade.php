<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
<style>
  .card-body.search-result-box {
    overflow: scroll;
    height: 400px;
    overflow-x: hidden;
  }

  .active .seller {
    font-weight: 700;
  }

  .for-count-value {
    position: absolute;

    right: 0.6875rem;
    ;
    width: 1.25rem;
    height: 1.25rem;
    border-radius: 50%;

    color: {
        {
        $web_config['primary_color']
      }
    }

    ;

    font-size: .75rem;
    font-weight: 500;
    text-align: center;
    line-height: 1.25rem;
  }

  .count-value {
    width: 1.25rem;
    height: 1.25rem;
    border-radius: 50%;

    color: {
        {
        $web_config['primary_color']
      }
    }

    ;

    font-size: .75rem;
    font-weight: 500;
    text-align: center;
    line-height: 1.25rem;
  }

  @media (min-width: 992px) {
    .navbar-sticky.navbar-stuck .navbar-stuck-menu.show {
      display: block;
      height: 55px !important;
    }
  }

  @media (min-width: 768px) {
    .navbar-stuck-menu {
      background-color: {
          {
          $web_config['primary_color']
        }
      }

      ;
      line-height: 15px;
      padding-bottom: 6px;
    }

  }

  @media (max-width: 767px) {
    .search_button {
      background-color: transparent !important;
    }

    .search_button .input-group-text i {
      color: {
          {
          $web_config['primary_color']
        }
      }

       !important;
    }

    .navbar-expand-md .dropdown-menu>.dropdown>.dropdown-toggle {
      position: relative;

      padding- {
          {
          Session: :get('direction')==='rtl'? 'left': 'right'
        }
      }

      : 1.95rem;
    }

    .mega-nav1 {
      background: white;

      color: {
          {
          $web_config['primary_color']
        }
      }

       !important;
      border-radius: 3px;
    }

    .mega-nav1 .nav-link {
      color: {
          {
          $web_config['primary_color']
        }
      }

       !important;
    }
  }

  @media (max-width: 768px) {
    .tab-logo {
      width: 10rem;
    }

    .searchBox {
      min-width: 98% !important;
      height: 39px !important;
    }

    .actionsBtn {
      padding: 14px 0px;
    }

  }

  @media (max-width: 360px) {
    .mobile-head {
      padding: 3px;
    }
  }

  @media (max-width: 471px) {
    .navbar-brand img {}

    .mega-nav1 {
      background: white;

      color: {
          {
          $web_config['primary_color']
        }
      }

       !important;
      border-radius: 3px;
    }

    .mega-nav1 .nav-link {
      color: {
          {
          $web_config['primary_color']
        }
      }

       !important;
    }
  }

  #anouncement {
    width: 100%;
    padding: 2px 0;
    text-align: center;
    color: white;
  }

  .menu_hover:hover {
    border-bottom: 1px solid white !important;
  }

  .input_search:focus-visible {
    outline-width: 0;
  }

</style>
@php($announcement = \App\CPU\Helpers::get_business_settings('announcement'))
@if (isset($announcement) && $announcement['status'] == 1)
  <div class="d-flex justify-content-between align-items-center" id="anouncement"
    style="background-color: {{ $announcement['color'] }};color:{{ $announcement['text_color'] }}">
    <span></span>
    <span style="text-align:center; font-size: 15px;">{{ $announcement['announcement'] }} </span>
    <span class="ml-3 mr-3" style="font-size: 12px;cursor: pointer;color: darkred" onclick="myFunction()">X</span>
  </div>
@endif


<header class="box-shadow-sm rtl">
  <!-- Topbar-->
  <div class="topbar"
    style="background: linear-gradient(180deg, rgba(77,71,71,1) 0%, rgba(71,66,66,1) 40%, rgba(64,60,60,1) 100%); padding: 0.5rem 0 !important ;">
    <div class="container ">
      <div>
        @php($local = \App\CPU\Helpers::default_lang())
        <div
          class="topbar-text dropdown disable-autohide {{ Session::get('direction') === 'rtl' ? 'ml-3' : 'mr-3' }} text-capitalize">
          <a style="color:white !important;" class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown">
            @foreach (json_decode($language['value'], true) as $data)
              @if ($data['code'] == $local)
                <img class="{{ Session::get('direction') === 'rtl' ? 'ml-2' : 'mr-2' }}" width="20"
                  src="{{ asset('public/assets/front-end') }}/img/flags/{{ $data['code'] }}.png" alt="Eng">
                {{ $data['name'] }}
              @endif
            @endforeach
          </a>
          <ul class="dropdown-menu dropdown-menu-{{ Session::get('direction') === 'rtl' ? 'right' : 'left' }}"
            style="text-align: {{ Session::get('direction') === 'rtl' ? 'right' : 'left' }};">
            @foreach (json_decode($language['value'], true) as $key => $data)
              @if ($data['status'] == 1)
                <li>
                  <a class="dropdown-item pb-1" href="{{ route('lang', [$data['code']]) }}">
                    <img class="{{ Session::get('direction') === 'rtl' ? 'ml-2' : 'mr-2' }}" width="20"
                      src="{{ asset('public/assets/front-end') }}/img/flags/{{ $data['code'] }}.png"
                      alt="{{ $data['name'] }}" />
                    <span
                      style="text-transform: capitalize">{{ \App\CPU\Helpers::get_language_name($data['code']) }}</span>
                  </a>
                </li>
              @endif
            @endforeach
          </ul>
        </div>

        @php($currency_model = \App\CPU\Helpers::get_business_settings('currency_model'))
        @if ($currency_model == 'multi_currency')
          <div class="topbar-text dropdown disable-autohide">
            <a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown">
              <span>{{ session('currency_code') }} {{ session('currency_symbol') }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-{{ Session::get('direction') === 'rtl' ? 'right' : 'left' }}"
              style="min-width: 160px!important;text-align: {{ Session::get('direction') === 'rtl' ? 'right' : 'left' }};">
              @foreach (\App\Model\Currency::where('status', 1)->get() as $key => $currency)
                <li style="cursor: pointer" class="dropdown-item"
                  onclick="currency_change('{{ $currency['code'] }}')">
                  {{ $currency->name }}
                </li>
              @endforeach
            </ul>
          </div>
        @endif
      </div>
      <div class="topbar-text dropdown d-md-none {{ Session::get('direction') === 'rtl' ? 'mr-auto' : 'ml-auto' }}">
        <!-- <a class="topbar-link" href="tel: {{ $web_config['phone']->value }}">
     <i class="fa fa-phone"></i> {{ $web_config['phone']->value }}
    </a> -->
      </div>
      <div class="d-none d-md-block {{ Session::get('direction') === 'rtl' ? 'mr-3' : 'ml-3' }} text-nowrap">
        <!-- <a class="topbar-link d-none d-md-inline-block" href="tel:{{ $web_config['phone']->value }}">
                    <i class="fa fa-phone"></i> {{ $web_config['phone']->value }}
                </a> -->
        <i style="color: white" class="fa fa-truck" aria-hidden="true"></i><a
          class="topbar-link d-none d-md-inline-block"
          style="color: white !important; padding: 0 9px; font-weight: bold">
          Fast Delivery
        </a>
        <i style="color: white" class="fa fa-money" aria-hidden="true"></i><a
          class="topbar-link d-none d-md-inline-block"
          style="color: white !important; padding: 0 9px; font-weight: bold">
          Cash On Delivery
        </a>
        <i style="color: white" class="fa fa-star" aria-hidden="true"></i><a
          class="topbar-link d-none d-md-inline-block"
          style="color: white !important; padding: 0 9px; font-weight: bold">
          Genuine Products
        </a>
      </div>
    </div>
  </div>


  <div class="navbar-sticky bg-light mobile-head" style=" padding: 0px; margin: 0px;">
    <div class="navbar navbar-expand-md navbar-light" style="background-color: black;">
      <div class="container ">
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
     <span class="navbar-toggler-icon"></span>
    </button> -->
        <!-- <a class="navbar-brand d-none d-sm-block {{ Session::get('direction') === 'rtl' ? 'ml-3' : 'mr-3' }} flex-shrink-0"
                   href="{{ route('home') }}"
                   style="min-width: 7rem;">
                    <img width="250" height="60" style="height: 60px!important;"
                         src="{{ asset('storage/app/public/company') . '/' . $web_config['web_logo']->value }}"
                         onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
                         alt="{{ $web_config['name']->value }}"/>
                </a> -->




        <ul style="list-style-type: none; margin: 0; padding: 0; overflow: hidden;">
          @foreach ($categories = \App\Model\Category::with(['childes.childes'])->where('position', 0)->get()
    as $key => $category)
            <li style="float: left;">
              <a class="menu_hover" href="javascript:"
                onclick="location.href='{{ route('products', ['id' => $category['id'], 'data_from' => 'category', 'page' => 1]) }}'"
                style="color:white !important; font-weight: bold; display: block; text-align: center; padding: 0px; margin: 16px; text-decoration: none; font-size:18px; border-bottom: 1px solid transparent;">{{ $category->name }}</a>
            </li>
          @endforeach
        </ul>


        <a style="padding: 0; margin: 0;"
          class="navbar-brand d-none d-sm-block {{ Session::get('direction') === 'rtl' ? 'ml-3' : 'mr-3' }} flex-shrink-0"
          href="{{ route('home') }}" style="min-width: 7rem;">
          <img width="250" height="60" style="height: auto!important;"
            src="{{ asset('storage/app/public/company') . '/' . $web_config['web_logo']->value }}"
            onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
            alt="{{ $web_config['name']->value }}" />
        </a>

        <a class="navbar-brand d-sm-none {{ Session::get('direction') === 'rtl' ? 'ml-2' : 'mr-2' }}"
          href="{{ route('home') }}">
          <img width="100" height="60" style="height: auto!important;" class="mobile-logo-img"
            src="{{ asset('storage/app/public/company') . '/' . $web_config['mob_logo']->value }}"
            onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
            alt="{{ $web_config['name']->value }}" />
        </a>

        <!-- Search-->

        <div class="searchBox" style="
                    display: flex;
                    background-color: rgba(40, 45, 49, 0.08);
                    -webkit-box-align: center;
                    align-items: center;
                    color: white;
                    position: relative;
                    min-width: 270px;
                    height: 28px;
                    border-radius: 35px;
                    background-color: white;
                    ">
          <form action="{{ route('products') }}" type="submit" style="
                        min-width: 20px;
                        display: flex;
                        -webkit-box-align: center;
                        align-items: center;
                        margin-left: 12px;
                        padding-bottom: 1.1px;
                        margin-bottom: 0px;
                        ">
            <input class="input_search" style="
                            margin-top: 1px;
                            width: 100%;
                            height: 36px;
                            padding-left: 12px;
                            padding-bottom: 1.2px;
                            border: 0px;
                            font-size: 13px;
                            background-color: transparent;
                            display: flex;
                            height: auto;
                            -webkit-box-align: center;
                            align-items: center;
                            " type="text" autocomplete="off" placeholder="{{ \App\CPU\translate('search') }}"
              name="name">
            <button class="input-group-append-overlay search_button" type="submit"
              style="display: flex; background-color: #403b3b !important;
    border: solid 2px white;
    justify-content: center;
    align-items: center; border-radius: {{ Session::get('direction') === 'rtl'? '7px 0px 0px 7px; right: unset; left: 0': '0px 7px 7px 0px; left: unset; right: 0' }};">
              <span class="input-group-text" style="font-size: 20px;">
                <i class="czi-search text-white" style="font-size: 14px;"></i>
              </span>
            </button>
            <input name="data_from" value="search" hidden>
            <input name="page" value="1" hidden>
            <diV class="card search-card"
              style="position: absolute;background: white;z-index: 999;width: 100%;display: none">
              <div class="card-body search-result-box" style="overflow:scroll; height:400px;overflow-x: hidden"></div>
            </diV>
          </form>
        </div>
        <!-- Toolbar-->
        <div class="actionsBtn navbar-toolbar d-flex flex-shrink-0 align-items-center">
          <!-- <a class="navbar-tool navbar-stuck-toggler" href="#">
                        <span class="navbar-tool-tooltip">{{ \App\CPU\translate('Expand menu') }}</span>
                        <div class="navbar-tool-icon-box">
                            <i class="navbar-tool-icon czi-menu"></i>
                        </div>
                    </a> -->
          @if (auth('customer')->check())
            <div class="dropdown">
              <a class="navbar-tool ml-2 mr-2 " type="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <div class="navbar-tool-icon-box bg-secondary">
                  <div class="navbar-tool-icon-box bg-secondary">
                    <img style="width: 40px;height: 40px"
                      src="{{ asset('storage/app/public/profile/' . auth('customer')->user()->image) }}"
                      onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
                      class="img-profile rounded-circle">
                  </div>
                </div>
                <div class="navbar-tool-text" style="color: white;">
                  <small style="color: white !important;">{{ \App\CPU\translate('hello') }},
                    {{ auth('customer')->user()->f_name }}</small>
                  {{ \App\CPU\translate('dashboard') }}
                </div>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route('account-oder') }}"> {{ \App\CPU\translate('my_order') }}
                </a>
                <a class="dropdown-item" href="{{ route('user-account') }}">
                  {{ \App\CPU\translate('my_profile') }}</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"
                  href="{{ route('customer.auth.logout') }}">{{ \App\CPU\translate('logout') }}</a>
              </div>
            </div>
          @else
            <div class="dropdown">
              {{-- <div class="navbar-tool dropdown {{ Session::get('direction') === 'rtl' ? 'mr-3' : 'ml-3' }}"> --}}
              <a class="navbar-tool ml-2 mr-2 " type="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <div style="background-color: transparent !important;"
                  class="navbar-tool-icon-box bg-secondary dropdown-toggle">
                  <i style="color:white;" class="navbar-tool-icon czi-user"></i>
                </div>
              </a>
              {{-- </div> --}}
              <div class="dropdown-menu dropdown-menu-{{ Session::get('direction') === 'rtl' ? 'right' : 'left' }}"
                aria-labelledby="dropdownMenuButton"
                style="text-align: {{ Session::get('direction') === 'rtl' ? 'right' : 'left' }};">
                <a class="dropdown-item" href="{{ route('customer.auth.login') }}">
                  <i class="fa fa-sign-in {{ Session::get('direction') === 'rtl' ? 'ml-2' : 'mr-2' }}"></i>
                  {{ \App\CPU\translate('sing_in') }}
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('customer.auth.register') }}">
                  <i
                    class="fa fa-user-circle {{ Session::get('direction') === 'rtl' ? 'ml-2' : 'mr-2' }}"></i>{{ \App\CPU\translate('sing_up') }}
                </a>
              </div>
            </div>
          @endif
          <div class="navbar-tool dropdown {{ Session::get('direction') === 'rtl' ? 'mr-3' : 'ml-3' }}">
            <a style="background-color: transparent !important;"
              class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="{{ route('wishlists') }}">
              <span class="navbar-tool-label">
                @if (session()->has('wish_list') && count(session('wish_list')) > 0)
                  <span style="background-color: #403b3b !important;"
                    class="countWishlist">{{ count(session('wish_list')) }}</span>
                @endif
              </span>
              <i style="color: white;" class="navbar-tool-icon czi-heart"></i>
            </a>
          </div>
          <div id="cart_items">
            @include('layouts.front-end.partials.cart')
          </div>
        </div>
      </div>
    </div>

    <! -- HERE -->

  </div>
</header>

<script>
  function myFunction() {
    $('#anouncement').addClass('d-none').removeClass('d-flex')
  }
</script>
