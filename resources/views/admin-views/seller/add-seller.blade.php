@extends('layouts.back-end.app')

@section('title', \App\CPU\translate('Seller List'))

@push('css_or_js')

@endpush

@section('content')
    <div class="content container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard.index')}}">{{\App\CPU\translate('Dashboard')}}</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Add new seller</li>
            </ol>
        </nav>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row row justify-content-between align-items-center flex-grow-1 mx-1">
                            <div class="flex-between">
                                <div><h5>Add new seller</h5></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="p-5">
                            <form class="user" action="{{route('shop.apply')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <h5 class="black">{{\App\CPU\translate('Seller')}} {{\App\CPU\translate('Info')}} </h5>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="f_name" value="{{old('f_name')}}" placeholder="{{\App\CPU\translate('first_name')}}" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" name="l_name" value="{{old('l_name')}}" placeholder="{{\App\CPU\translate('last_name')}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0 mt-4">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" value="{{old('email')}}" placeholder="{{\App\CPU\translate('email_address')}}" required>
                                    </div>
                                    <div class="col-sm-6"><small class="text-danger">( * {{\App\CPU\translate('country_code_is_must')}} {{\App\CPU\translate('like_for_BD_880')}} )</small>
                                        <input type="number" class="form-control form-control-user" id="exampleInputPhone" name="phone" value="{{old('phone')}}" placeholder="{{\App\CPU\translate('phone_number')}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" minlength="6" id="exampleInputPassword" name="password" placeholder="{{\App\CPU\translate('password')}}" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" minlength="6" id="exampleRepeatPassword" placeholder="{{\App\CPU\translate('repeat_password')}}" required>
                                        <div class="pass invalid-feedback">{{\App\CPU\translate('Repeat')}}  {{\App\CPU\translate('password')}} {{\App\CPU\translate('not match')}} .</div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="pb-1">
                                        <center>
                                            <img style="width: auto;border: 1px solid; border-radius: 10px; max-height:200px;" id="viewer"
                                                src="{{asset('public\assets\back-end\img\400x400\img2.jpg')}}" alt="banner image"/>
                                        </center>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-file" style="text-align: left">
                                            <input type="file" name="image" id="customFileUpload" class="custom-file-input"
                                                accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                            <label class="custom-file-label" for="customFileUpload">{{\App\CPU\translate('Upload')}} {{\App\CPU\translate('image')}}</label>
                                        </div>
                                    </div>
                                </div>


                                <h5 class="black">{{\App\CPU\translate('Shop')}} {{\App\CPU\translate('Info')}}</h5>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0 ">
                                        <input type="text" class="form-control form-control-user" id="shop_name" name="shop_name" placeholder="{{\App\CPU\translate('shop_name')}}" value="{{old('shop_name')}}"required>
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea name="shop_address" class="form-control" id="shop_address"rows="1" placeholder="{{\App\CPU\translate('shop_address')}}">{{old('shop_address')}}</textarea>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="pb-1">
                                        <center>
                                            <img style="width: auto;border: 1px solid; border-radius: 10px; max-height:200px;" id="viewerLogo"
                                                src="{{asset('public\assets\back-end\img\400x400\img2.jpg')}}" alt="banner image"/>
                                        </center>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-file" style="text-align: left">
                                            <input type="file" name="logo" id="LogoUpload" class="custom-file-input"
                                                accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                            <label class="custom-file-label" for="LogoUpload">{{\App\CPU\translate('Upload')}} {{\App\CPU\translate('logo')}}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="pb-1">
                                        <center>
                                            <img style="width: auto;border: 1px solid; border-radius: 10px; max-height:200px;" id="viewerBanner"
                                                src="{{asset('public\assets\back-end\img\400x400\img2.jpg')}}" alt="banner image"/>
                                        </center>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-file" style="text-align: left">
                                            <input type="file" name="banner" id="BannerUpload" class="custom-file-input"
                                                accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" style="overflow: hidden; padding: 2%">
                                            <label class="custom-file-label" for="BannerUpload">{{\App\CPU\translate('Upload')}} {{\App\CPU\translate('Banner')}}</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" id="apply">{{\App\CPU\translate('Apply')}} {{\App\CPU\translate('Shop')}} </button>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush
