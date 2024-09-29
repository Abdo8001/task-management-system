<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesflat.co/html/taskose/taskose/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 20:46:26 GMT -->
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

    <title>edit Account</title>
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
        <h5>edit Account</h5>  
    </div> 


    <div class="app-content style-3 pb-32 signUp-area">
        <div class="tf-container">
            <form method="post" class="mt-24" action="{{ route('users.update',$user->id) }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <p class="body-6 text-black-5">Give creadential to sign in your account</p>
                <fieldset class="input-icon mt-20">
                    <span class="icon icon-user"></span>
                    <input type="text"  value="{{ $user->name }}"  name="name"  class="form-control">
         <input type="hidden" name="id" value="{{ $user->id }}">
                    <x-input-error :messages="$errors->get('name')" class="mt-2 btn btn-danger" />

                </fieldset>
                <fieldset class="input-icon mt-16">
                    <span class="icon icon-mail"></span>
                    <input type="text"  value="{{ $user->email }}" name="email" class="form-control">
                    <x-input-error :messages="$errors->get('email')" class="mt-2 btn btn-danger" />

                </fieldset>
                <fieldset class="mt-16 input-icon">
                    <div class="box-view-hide">
                        <span class="icon icon-lock"></span>
                        <input type="password" placeholder="Type your password" name="password" class="form-control password-field">
                        <input type="password" placeholder="confirm your password" name="password_confirmation" class="form-control password-field">
                        <x-input-error :messages="$errors->get('password')" class="mt-2 btn btn-danger" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 btn btn-danger" />

                        <div class="show-pass">
                            <span class="icon-pass icon-view"></span>
                            <span class="icon-pass icon-hide"></span>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="mt-16 input-icon">
                    <div class="mt-4">
                        <x-input-label for="profile_img" :value="__('profile image')" />
                                
                            <input type="file" name="profile_img" >
                        <x-input-error :messages="$errors->get('profile_img')" class="mt-2 btn btn-danger" />
                    </div>
                </fieldset>
               
                <button class="mt-24 tf-btn primary">update user</button>
            </form>
        
            
        </div>
    </div>


  
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js')}}"></script>

   
    
</body>

<!-- Mirrored from themesflat.co/html/taskose/taskose/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 20:46:26 GMT -->
</html>

































































