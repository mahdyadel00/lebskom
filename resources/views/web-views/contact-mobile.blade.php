<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="apple-touch-icon" sizes="180x180"
          href="{{asset('storage/app/public/company')}}/{{$web_config['fav_icon']->value}}">
    <link rel="icon" type="image/png" sizes="32x32"
          href="{{asset('storage/app/public/company')}}/{{$web_config['fav_icon']->value}}">

    <link rel="stylesheet" media="screen"
          href="{{asset('public/assets/front-end')}}/vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen"
          href="{{asset('public/assets/front-end')}}/vendor/tiny-slider/dist/tiny-slider.css"/>
    <link rel="stylesheet" media="screen"
          href="{{asset('public/assets/front-end')}}/vendor/drift-zoom/dist/drift-basic.min.css"/>
    <link rel="stylesheet" media="screen"
          href="{{asset('public/assets/front-end')}}/vendor/lightgallery.js/dist/css/lightgallery.min.css"/>
    <link rel="stylesheet" href="{{asset('public/assets/back-end')}}/css/toastr.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{asset('public/assets/front-end')}}/css/theme.min.css">
    <link rel="stylesheet" media="screen" href="{{asset('public/assets/front-end')}}/css/slick.css">
    <link rel="stylesheet" media="screen" href="{{asset('public/assets/front-end')}}/css/font-awesome.min.css">
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="{{asset('public/assets/back-end')}}/css/toastr.css"/>
    <link rel="stylesheet" href="{{asset('public/assets/front-end')}}/css/master.css"/>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Titillium+Web:wght@400;600;700&display=swap"
        rel="stylesheet">

    @stack('css_or_js')

    <link rel="stylesheet" href="{{asset('public/assets/front-end')}}/css/home.css"/>
    <link rel="stylesheet" href="{{asset('public/assets/front-end')}}/css/responsive1.css"/>
    
    
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
</head>
<body>
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
                        <div class=" ">
                          <button class="btn btn-primary" type="submit"  id="submit">{{\App\CPU\translate('send')}}</button>
                      </div>
                    </form>
            </div>
        </div>
    </div>
                </body>
                </html>