<footer class="footer">
    <div class="content-box">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-2">
                    <div class="footer-title">
                        <h4>{{ \App\CPU\translate('special') }}</h4>
                    </div>
                    <ul class="links mb-30">
                        <li>
                            <a
                                href="{{ route('products', ['data_from' => 'featured', 'page' => 1]) }}">{{ \App\CPU\translate('featured_products') }}</a>
                        </li>
                        <li>
                            <a
                                href="{{ route('products', ['data_from' => 'latest', 'page' => 1]) }}">{{ \App\CPU\translate('latest_products') }}</a>
                        </li>
                        <li>
                            <a
                                href="{{ route('products', ['data_from' => 'best-selling', 'page' => 1]) }}">{{ \App\CPU\translate('best_selling_product') }}</a>
                        </li>
                        <li>
                            <a
                                href="{{ route('products', ['data_from' => 'top-rated', 'page' => 1]) }}">{{ \App\CPU\translate('top_rated_product') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('brands') }}">{{ \App\CPU\translate('all_brand') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('categories') }}">{{ \App\CPU\translate('all_category') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="footer-title">
                        <h4>{{ \App\CPU\translate('account&shipping_info') }}</h4>
                    </div>
                    @if (auth('customer')->check())
                        <ul class="links mb-30">
                            <li>
                                <a class="widget-list-link"
                                    href="{{ route('user-account') }}">{{ \App\CPU\translate('profile_info') }}</a>
                            </li>
                            <li>
                                <a class="widget-list-link"
                                    href="{{ route('wishlists') }}">{{ \App\CPU\translate('wish_list') }}</a>
                            </li>
                            <li>
                                <a class="widget-list-link"
                                    href="{{ route('track-order.index') }}">{{ \App\CPU\translate('track_order') }}</a>
                            </li>
                            <li>
                                <a class="widget-list-link"
                                    href="{{ route('account-address') }}">{{ \App\CPU\translate('address') }}</a>
                            </li>
                            <li>
                                <a class="widget-list-link"
                                    href="{{ route('account-tickets') }}">{{ \App\CPU\translate('support_ticket') }}</a>
                            </li>
                        </ul>
                    @else
                        <ul class="links mb-30">
                            <li>
                                <a class="widget-list-link"
                                    href="{{ route('customer.auth.login') }}">{{ \App\CPU\translate('profile_info') }}</a>
                            </li>
                            <li>
                                <a class="widget-list-link"
                                    href="{{ route('customer.auth.login') }}">{{ \App\CPU\translate('wish_list') }}</a>
                            </li>
                            <li>
                                <a class="widget-list-link"
                                    href="{{ route('track-order.index') }}">{{ \App\CPU\translate('track_order') }}</a>
                            </li>
                            <li>
                                <a class="widget-list-link"
                                    href="{{ route('customer.auth.login') }}">{{ \App\CPU\translate('address') }}</a>
                            </li>
                            <li>
                                <a class="widget-list-link"
                                    href="{{ route('customer.auth.login') }}">{{ \App\CPU\translate('support_ticket') }}</a>
                            </li>
                        </ul>
                    @endif
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="footer-title">
                        <h4>{{ \App\CPU\translate('about_us') }}</h4>
                    </div>
                    <ul class="links mb-30">
                        <li>
                            <a class="widget-list-link"
                                href="{{ route('about-us') }}">{{ \App\CPU\translate('about_company') }}</a>
                        </li>
                        <li>
                            <a class="widget-list-link"
                                href="{{ route('helpTopic') }}">{{ \App\CPU\translate('faq') }}</a>
                        </li>
                        </li>
                        <li>
                            <a class="widget-list-link"
                                href="{{ route('terms') }}">{{ \App\CPU\translate('terms_&_conditions') }}</a>
                        </li>
                        <li>
                            <a class="widget-list-link" href="{{ route('privacy-policy') }}">
                                {{ \App\CPU\translate('privacy_policy') }}
                        </li>
                        <li>
                            <a class="widget-list-link"
                                href="{{ route('contacts') }}">{{ \App\CPU\translate('contact_us') }}</a>
                        </li>
                        <li>
                            <a class="widget-list-link" target="_blank"
                                href="https://www.lebskom.com/registerwithus/">Become a seller</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    @php($ios = \App\CPU\Helpers::get_business_settings('download_app_apple_stroe'))
                    @php($android = \App\CPU\Helpers::get_business_settings('download_app_google_stroe'))
                    <div class="footer-title">
                        @if ($ios['status'] || $android['status'])
                            <h4>{{ \App\CPU\translate('download_our_app') }}</h4>
                        @endif
                    </div>
                    <div class="down-app">


                        @if ($android['status'])
                            <a href="{{ $android['link'] }}">
                                <img src="{{ asset('assets/front-end') }}/images/app/1.png"
                                    alt="1 app">
                            </a>
                        @endif
                        @if ($ios['status'])
                            <a href="#"><img class="img-fluid"
                                    src="{{ asset('assets/front-end') }}/images/app/2.png"
                                    alt="2 app"></a>
                        @endif
                        @if ($android['status'])
                            <a href="{{ $ios['link'] }}"><img class="img-fluid mb-20"
                                    src="{{ asset('assets/front-end') }}/images/app/3.png"
                                    alt="3 app"></a>
                        @endif
                    </div>
                    <div class="footer-title">
                        <h4>Follow the latest trends</h4>
                    </div>
                    @php($social_media = \App\Model\SocialMedia::where('active_status', 1)->get())

                    <ul class="icons-social-media mb-30">
                        @if (isset($social_media))
                            @foreach ($social_media as $item)
                                <li>
                                    <a class="sb-{{$item->name}} {{Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'}} mb-2"
                                        target="_blank" href="{{$item->link}}" ><i class="{{$item->icon}}" aria-hidden="true"></i>
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="content-box-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center">
                    <div class="dropdown customer-services">
                        <button class="dropdown-toggle customer-services-btn" type="button"
                            id="dropdownServices" data-bs-toggle="dropdown" aria-expanded="false">
                            Customer Services
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownServices">
                            <li><a class="dropdown-item" href="#">services 1</a></li>
                            <li><a class="dropdown-item" href="#">services 2</a></li>
                            <li><a class="dropdown-item" href="#">services 3</a></li>
                            <li><a class="dropdown-item" href="#">services 4</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <div class="login-link">
                        <a href="{{ route('customer.auth.login') }}"><i class="fa-solid fa-user"></i>
                            Login/Register</a>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-end">
                    <div class="dropdown language-box two">
                        <button class="dropdown-toggle" type="button" id="dropdownLanguage2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img-fluid"
                                src="{{ asset('assets/front-end') }}/images/language/1.jpg"
                                alt="1 language"> English
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownLanguage2">
                            <li><a class="dropdown-item" href="#"><img class="img-fluid"
                                        src="{{ asset('assets/front-end') }}/images/language/1.jpg"
                                        alt="1 language"> English</a></li>
                            {{-- <li><a class="dropdown-item" href="#"><img class="img-fluid" src="{{asset('assets/front-end')}}/images/language/2.jpg" alt="2 language"> Arabic</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>copyright @ 2022 6TH STREET. All Rights reserved</p>
                </div>
                <div class="col-md-4">
                    <ul class="links">
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">/</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">/</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="imgs-box">
                        <img class="img-fluid"
                            src="{{ asset('assets/front-end') }}/images/payments/1.png"
                            alt="1 payments">
                        <img class="img-fluid"
                            src="{{ asset('assets/front-end') }}/images/payments/2.png"
                            alt="2 payments">
                        <img class="img-fluid"
                            src="{{ asset('assets/front-end') }}/images/payments/1.png"
                            alt="3 payments">
                        <img class="img-fluid"
                            src="{{ asset('assets/front-end') }}/images/payments/2.png"
                            alt="4 payments">
                        <img class="img-fluid"
                            src="{{ asset('assets/front-end') }}/images/payments/1.png"
                            alt="5 payments">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
