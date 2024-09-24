<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesflat.co/html/taskose/taskose/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 20:43:43 GMT -->
<head>
@include('dashbord.layouts.header')
@section('title')
    hoome 
@endsection
</head>

<body>
    <!-- preloade -->
    <div class="preload preload-container">
        <div class="logo-img">
            <img src="images/logo/logo-2.png" alt="logo">
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
    <div class="header-profile bg-primary style-1 fixed-top">
        
            <div class="left">
                <div class="avt">
                    <img src="{{asset(' images/avt/avt2.jpg')}}" alt="avatar">
                    <span class="dot-status"></span>
                </div>
                <div class="content">
                    <h5 class="text-white">Jennifer Lyine</h5>
                    <p class="body-2 text-white">Hi Jennifer, Good Morning!</p>
                </div>
            </div>
            <div class="right">
                <a href="#sidebar" data-bs-toggle="modal">
                    <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="1">
                        <path d="M2.5 10H17.5" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2.5 5H17.5" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2.5 15H17.5" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </a>
               
                <a href="#notification" class="box-noti" data-bs-toggle="offcanvas" aria-controls="offcanvasRight">
                    <i class="icon-bell text-white"></i>
                    <span class="dot-danger"></span>
                </a>
            </div>
           
    </div>
    
    <div class="app-content style-5">
        {{-- serche box --}}
        <div class="section-box-search">
            <div class="tf-container">
                <div class="search-box style-1">
                    <a href="javascript:void(0);" class="icon-left icon-search"></a>
                    <input type="text" class="search-field" placeholder="Find your task" value="nft website de">
                </div>
            </div>
        </div>
           {{-- end searchbox --}}
           {{-- body --}}
        <div class="main-section">
            <div class="tf-container">
            @yield('content')
            {{-- end tasks --}}
            </div>
        </div>
        

    </div>



  @include('dashbord.layouts.footer')
    <!-- create project -->
 @include('dashbord.create_project')
    <!-- notification -->
    <div class="offcanvas offcanvas-end full" id="notification">
        <div class="header fixed-top line-bt">
            <div class="left" data-bs-dismiss="offcanvas">
                <a href="javascript:void(0);" class="icon"><i class="icon-back"></i></a>
            </div>
            <h5>Notification</h5>
            <div class="right">
                <a href="javascript:void(0);" class="icon text-black-6"><i class="icon-search"></i></a>
            </div>  
        </div> 
        <div class="overflow-auto app-content">
            <div class="tf-container">
                <div class="mt-24 d-flex justify-content-between align-items-center">
                    <div class="box-filter select-wrapper style-2">
                        <select class="tf-select">
                            <option>All</option>
                        </select>
                    </div>
                    <a href="#" class="box-filter type-1">
                        <span class="icon">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.6">
                                <path d="M12 8H4" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 4H2" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.26921 12H6.60254" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                            </svg>                            
                        </span>
                        Filter
                    </a>
                </div>
                <div class="mt-24 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center gap-8">
                        <h6 class="text-black-2">Unread</h6>
                        <span class="num-task type-4">2</span>
                    </div>
                    <a href="javascript:void(0);" class="icon-more fs-20 text-black-5"></a>
                </div>
                <ul class="mt-20">
                    <li>
                        <a href="#" class="box-noti-task">
                            <div class="avatar avt-36">
                                <img src="images/avt/avt1.jpg" alt="avt">
                            </div>
                            <div class="content">
                                <div class="title">Rafi Islam Apon <span>mentoined you on</span> NFT Website and Mobile App Design</div>
                                <p class="mt-6">Today at 10:04 AM <span class="dot"></span>Redesign Dashboar...</p>
                            </div>
                        </a>
                    </li>
                    <li class="mt-16">
                        <a href="#" class="box-noti-task">
                            <div class="avatar avt-36">
                                <img src="images/avt/avt4.jpg" alt="avt">
                            </div>
                            <div class="content">
                                <div class="title">Zara Yasmin Tasnim <span>mentoined you on</span> Redesign Dashboard Finance</div>
                                <p class="mt-6">Today at 10:04 AM <span class="dot"></span>Redesign Dashboar...</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="mt-24">
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="text-black-2">Yesterday</h6>
                        <a href="javascript:void(0);" class="icon-more fs-20 text-black-5"></a>
                    </div>
                    <ul class="mt-20">
                        <li>
                            <a href="#" class="box-noti-task">
                                <div class="avatar avt-36">
                                    <img src="images/avt/avt8.jpg" alt="avt">
                                </div>
                                <div class="content">
                                    <div class="title">David Malan<span>mentoined you on</span> Real Estate Website Design Project </div>
                                    <p class="mt-6">Yesterday at 2:40 PM <span class="dot"></span>Real Estate We...</p>
                                </div>
                            </a>
                        </li>
                        <li class="mt-16">
                            <a href="#" class="box-noti-task">
                                <div class="avatar avt-36">
                                    <img src="images/avt/avt5.jpg" alt="avt">
                                </div>
                                <div class="content">
                                    <div class="title">Ikram Islam Tamim <span>mentoined you on</span> Architecture Web Design Project</div>
                                    <p class="mt-6">Yeasterday at 1:10 PM <span class="dot"></span>Architecture We...</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>       
    </div>
{{-- end notifacion --}}
    <!-- sidebar -->
   @include('dashbord.layouts.sidebar')
  
    

        
 @include('dashbord.layouts.script')



</body>

<!-- Mirrored from themesflat.co/html/taskose/taskose/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 20:46:11 GMT -->
</html>