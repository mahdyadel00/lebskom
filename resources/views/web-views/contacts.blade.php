@extends('layouts.front-end.app')

@section('title',\App\CPU\translate('Contact Us'))

@push('css_or_js')
    <meta property="og:image" content="{{asset('storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="og:title" content="Contact {{$web_config['name']->value}} "/>
    <meta property="og:url" content="{{env('APP_URL')}}">
    <meta property="og:description" content="{!! substr($web_config['about']->value,0,100) !!}">

    <meta property="twitter:card" content="{{asset('storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="twitter:title" content="Contact {{$web_config['name']->value}}"/>
    <meta property="twitter:url" content="{{env('APP_URL')}}">
    <meta property="twitter:description" content="{!! substr($web_config['about']->value,0,100) !!}">

    <style>
        .headerTitle {
            font-size: 25px;
            font-weight: 700;
            margin-top: 2rem;
        }

        .for-contac-image {
            padding: 6%;
        }

        .for-send-message {
            padding: 26px;
            margin-bottom: 2rem;
            margin-top: 2rem;
        }

        @media (max-width: 600px) {
            .sidebar_heading {
                background: {{$web_config['primary_color']}}

            }

            .headerTitle {

                font-weight: 700;
                margin-top: 1rem;
            }

            .sidebar_heading h1 {
                text-align: center;
                color: aliceblue;
                padding-bottom: 17px;
                font-size: 19px;
            }
        }
    </style>
@endpush
@section('content')
    <!-- <div class="container rtl">
        <div class="row">
            <div class="col-md-12 sidebar_heading text-center mb-2">
                <h1 class="h3  mb-0 folot-left headerTitle">{{\App\CPU\translate('contact_us')}}</h1>
            </div>
        </div>
    </div> -->

    <!-- Split section: Map + Contact form-->
    <div class="container rtl" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
        <div class="row no-gutters">
            <div class="col-lg-6 for-send-message px-4 px-xl-5  box-shadow-sm">
             <h2 class="h4 mb-4 text-center"
                     style="color: #030303; font-weight:600;">{{\App\CPU\translate('contact_us')}}</h2>
                <!-- <img style="" class="for-contac-image" src="{{asset("public/assets/front-end/png/contact.png")}}" alt=""> -->
                <p>
                  If you have any questions , or complaints, please don't hesitate to contact us on any of the following:
                  <ul>
                   <li>Phone: +971 4 5590229</li>
                   <li>WhatsApp : +971 4 5590229</li>
                   <li>Email: General Inquiries on info@Lebskom.com</li>
                   <li>Email: vendor Inquiries on sellwithus@lebskom.com</li>
                   <li>Address: Lebskom For Fashion Design Burlington Tower, Al Abraj St., Business Bay_Dubai, UAE</li>
                  </ul>
                </p>
            </div>
            <div class="col-lg-6 for-send-message px-4 px-xl-5  box-shadow-sm">
                <h2 class="h4 mb-4 text-center"
                    style="color: #030303; font-weight:600;">{{\App\CPU\translate('send_us_a_message')}}</h2>
                    <form action="{{route('contact.store')}}" method="POST">
                        @csrf
                        <div class="row">
                          <div class="col-sm-6">
                              <div class="form-group">
                                <label >{{\App\CPU\translate('your_name')}}</label>
                                <input class="form-control name" name="name" type="text" placeholder="John Doe" required>

                              </div>
                            </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                <label for="cf-email">{{\App\CPU\translate('email_address')}}</label>
                                <input class="form-control email" name="email" type="email" placeholder="johndoe@email.com" required >

                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="cf-phone">{{\App\CPU\translate('your_phone')}}</label>
                                <input class="form-control mobile_number"  type="text" name="mobile_number" placeholder="{{\App\CPU\translate('Contact Number')}}" required>

                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="cf-subject">{{\App\CPU\translate('Subject')}}:</label>
                                <input class="form-control subject" type="text" name="subject"  placeholder="{{\App\CPU\translate('Short title')}}" required>

                              </div>
                            </div>
                             <div class="col-md-12">
                            <div class="form-group">
                              <label for="cf-message">{{\App\CPU\translate('Message')}}</label>
                              <textarea class="form-control message" name="message"  rows="6" required></textarea>
                            </div>
                          </div>
                        </div>
                          @php($recaptcha = \App\CPU\Helpers::get_business_settings('recaptcha'))
                            @if(isset($recaptcha) && $recaptcha['status'] == 1)
                                <div id="recaptcha_element" style="width: 100%;" data-type="image"></div>
                                <br/>
                            @else
                                <div class="row p-2">
                                    <div class="col-6 pr-0">
                                        <input type="text" class="form-control form-control-lg" name="custome_recaptcha"
                                               value="{{env('APP_MODE')=='live'?"":session('custome_recaptcha')}}"
                                               id="custome_recaptcha" required placeholder="{{\App\CPU\translate('Enter recaptcha value')}}" style="border: none" autocomplete="off">
                                    </div>
                                    <div class="col-6" style="background-color: #FFFFFF; border-radius: 5px;">
                                        <img src="<?php echo $custome_recaptcha->inline(); ?>" style="width: 100%; border-radius: 4px;"/>
                                    </div>
                                </div>
                            @endif
                        <div class=" ">
                          <button class="btn btn-primary" type="submit"  id="submit">{{\App\CPU\translate('send')}}</button>
                      </div>
                    </form>
            </div>
        </div>
    </div>

@endsection


@push('script')
{{-- recaptcha scripts start --}}
@if(isset($recaptcha) && $recaptcha['status'] == 1)
    <script type="text/javascript">
        var onloadCallback = function () {
            grecaptcha.render('recaptcha_element', {
                'sitekey': '{{ \App\CPU\Helpers::get_business_settings('recaptcha')['site_key'] }}'
            });
        };
    </script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    <script>
        $("#form-id").on('submit',function(e) {
            var response = grecaptcha.getResponse();

            if (response.length === 0) {
                e.preventDefault();
                toastr.error("{{\App\CPU\translate('Please check the recaptcha')}}");
            }
        });
    </script>
@endif
@endpush
