<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesflat.co/html/taskose/taskose/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 20:46:23 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <!-- font -->
    <link rel="stylesheet" href="{{asset('assets/fonts/fonts.css')}}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet"type="text/css" href="{{ asset('assets/css/nouislider.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet"type="text/css" href="{{ asset('assets/css/styles.css')}}"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo/168.png')}}" />
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/logo/168.png')}}" />

    <title>sign in</title>
</head>

<body>

    <!-- preloade -->
    <div class="preload preload-container">
        <div class="logo-img">
            <img src="{{asset('assets/images/logo/logo-2.png')}}" alt="logo">
        </div>
        <div class="spinner-circle lg success">
            <span class="spinner-circle1 spinner-child"></span>
            <span class="spinner-circle2 spinner-child"></span>
            <span class="spinner-circle3 spinner-child"></span>
            <span class="spinner-circle4 spinner-child"></span>
            <span class="spinner-circle5 spinner-child"></span>
            <span class="spinner-circle6 spinner-child"></span>
            <span class="spinner-circle7 spinner-child"></span>
            <span class="spinner-circle8 spinner-child"></span>
            <span class="spinner-circle9 spinner-child"></span>
        </div>
    </div>
    <!-- /preload -->
    <div class="header fixed-top line-bt">
        <div class="left">
            <a href="javascript:void(0);" class="icon back-btn"><i class="icon-back"></i></a>
        </div>
        <h5>Sign In</h5>  
    </div> 


    <div class="app-content style-3 pb-32 signIn-area">
        <div class="tf-container">
            <form method="post" class="mt-24" action="{{ route('login') }}">
             @csrf
                <p class="body-6 text-black-5">Give creadential to sign in your account</p>
                <fieldset class="input-icon mt-20">
                    <span class="icon icon-mail"></span>
                    <input type="text" placeholder="Type your email" name="email" class="form-control">
             <x-input-error :messages="$errors->get('email')" class="mt-2  btn btn-danger" />
                    
                </fieldset>
                <fieldset class="mt-16 input-icon">
                    <div class="box-view-hide">
                        <span class="icon icon-lock"></span>
                        <input type="password" placeholder="Type your password" name="password" class="form-control password-field">
                        <x-input-error :messages="$errors->get('password')" class="mt-2 btn btn-danger" />

                        <div class="show-pass">
                            <span class="icon-pass icon-view"></span>
                            <span class="icon-pass icon-hide"></span>
                        </div>
                    </div>
                </fieldset>
                <div class="mt-16 d-flex justify-content-end">
                    <a href="forgot-pass.html" class="h8 text-primary fw-5">Forgot Password?</a>
                </div>
                <button class="mt-48 tf-btn primary" type="submit" >Sign In</button>
            </form>
           
            
            <p class="mt-70 text-center body-2 fw-5 text-black-5">Don’t have account?<a href="{{ route('register') }}" class="text-primary fw-7 body-2">sign Up</a></p>
        </div>
    </div>


    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js')}}"></script>

   
    
</body>

<!-- Mirrored from themesflat.co/html/taskose/taskose/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 20:46:25 GMT -->
</html>











































