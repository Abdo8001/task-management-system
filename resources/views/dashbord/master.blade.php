@extends('test')
@section('title')
    home
@endsection

@section('content')
    
<div class="pt-30">
    <div class="section-title d-flex justify-content-between align-items-center">
        <h3>Recent Projects</h3>
        <a href="my-project.html" class="font-title-btn text-black-5">View All</a>
    </div>
    <div class="sw-box-shadow mt-20">
        <div class="swiper tf-swiper" data-space-between="20" data-preview="1.3" data-tablet="1.5" data-desktop="2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="project-details.html" class="box-recent-project">
                        <div class="top">
                            <div class="d-flex justify-content-between align-items-center gap-10">
                                <div class="box-icon w-34">
                                    <i class="icon-game fs-18"></i>
                                </div>
                                <div class="h8 fw-bold flex-grow-1">Gaming Platform Web & Mobile App</div>
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.6">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2C19.723 2 22 4.378 22 7.916V16.084C22 19.622 19.723 22 16.333 22H7.665C4.276 22 2 19.622 2 16.084V7.916C2 4.378 4.276 2 7.665 2H16.334ZM16.334 3.5H7.665C5.135 3.5 3.5 5.233 3.5 7.916V16.084C3.5 18.767 5.135 20.5 7.665 20.5H16.333C18.864 20.5 20.5 18.767 20.5 16.084V7.916C20.5 5.233 18.864 3.5 16.334 3.5ZM15.9482 11.0137C16.5012 11.0137 16.9482 11.4607 16.9482 12.0137C16.9482 12.5667 16.5012 13.0137 15.9482 13.0137C15.3952 13.0137 14.9432 12.5667 14.9432 12.0137C14.9432 11.4607 15.3862 11.0137 15.9382 11.0137H15.9482ZM11.9385 11.0137C12.4915 11.0137 12.9385 11.4607 12.9385 12.0137C12.9385 12.5667 12.4915 13.0137 11.9385 13.0137C11.3855 13.0137 10.9345 12.5667 10.9345 12.0137C10.9345 11.4607 11.3765 11.0137 11.9295 11.0137H11.9385ZM7.9297 11.0137C8.4827 11.0137 8.9297 11.4607 8.9297 12.0137C8.9297 12.5667 8.4827 13.0137 7.9297 13.0137C7.3767 13.0137 6.9247 12.5667 6.9247 12.0137C6.9247 11.4607 7.3677 11.0137 7.9207 11.0137H7.9297Z" fill="#31394F"/>
                                        </g>
                                    </svg>                                        
                                </span>
                            </div>
                            <ul class="mt-14 d-flex gap-8 meta-list">
                                <li class="meta-item"><i class="icon-calendar fs-12"></i> June 18, 2022</li>
                                <li class="meta-item"><i class="icon-chat2 fs-12"></i> 16</li>
                                <li class="meta-item"><i class="icon-link fs-12"></i> 09</li>
                            </ul>
                        </div>
                        <div class="mt-14 box-image">
                            <img src="images/project/img1.jpg" alt="img">
                        </div>
                        <div class="mt-14 bottom d-flex align-items-center">
                            <ul class="list-stacked">
                                <li class="avt-list">
                                    <div class="avatar avt-27 round">
                                        <img src="images/avt/avt3.jpg" alt="img">
                                    </div>
                                </li>
                                <li class="avt-list">
                                    <div class="avatar avt-27 round">
                                        <img src="images/avt/avt4.jpg" alt="img">
                                    </div>
                                </li>
                                <li class="avt-list">
                                    <div class="avatar avt-27 round">
                                        <img src="images/avt/avt5.jpg" alt="img">
                                    </div>
                                </li>
                            </ul>
                            <div class="box-progress">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-caption-2 text-black-5">Progress</span>
                                    <span class="fw-6 text-caption-2">78%</span>
                                </div>
                                <div class="progress h-5">
                                    <div class="progress-bar" role="progressbar" style="width: 78%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="project-details.html" class="box-recent-project">
                        <div class="top">
                            <div class="d-flex justify-content-between align-items-center gap-10">
                                <div class="box-icon type-1 w-34">
                                    <i class="icon-game2 fs-18"></i>
                                </div>
                                <div class="h8 fw-bold flex-grow-1">Furniture  Web & Mobile App</div>
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.6">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2C19.723 2 22 4.378 22 7.916V16.084C22 19.622 19.723 22 16.333 22H7.665C4.276 22 2 19.622 2 16.084V7.916C2 4.378 4.276 2 7.665 2H16.334ZM16.334 3.5H7.665C5.135 3.5 3.5 5.233 3.5 7.916V16.084C3.5 18.767 5.135 20.5 7.665 20.5H16.333C18.864 20.5 20.5 18.767 20.5 16.084V7.916C20.5 5.233 18.864 3.5 16.334 3.5ZM15.9482 11.0137C16.5012 11.0137 16.9482 11.4607 16.9482 12.0137C16.9482 12.5667 16.5012 13.0137 15.9482 13.0137C15.3952 13.0137 14.9432 12.5667 14.9432 12.0137C14.9432 11.4607 15.3862 11.0137 15.9382 11.0137H15.9482ZM11.9385 11.0137C12.4915 11.0137 12.9385 11.4607 12.9385 12.0137C12.9385 12.5667 12.4915 13.0137 11.9385 13.0137C11.3855 13.0137 10.9345 12.5667 10.9345 12.0137C10.9345 11.4607 11.3765 11.0137 11.9295 11.0137H11.9385ZM7.9297 11.0137C8.4827 11.0137 8.9297 11.4607 8.9297 12.0137C8.9297 12.5667 8.4827 13.0137 7.9297 13.0137C7.3767 13.0137 6.9247 12.5667 6.9247 12.0137C6.9247 11.4607 7.3677 11.0137 7.9207 11.0137H7.9297Z" fill="#31394F"/>
                                        </g>
                                    </svg>                                        
                                </span>
                            </div>
                            <ul class="mt-14 d-flex gap-8 meta-list">
                                <li class="meta-item"><i class="icon-calendar fs-12"></i> June 18, 2022</li>
                                <li class="meta-item"><i class="icon-chat2 fs-12"></i> 16</li>
                                <li class="meta-item"><i class="icon-link fs-12"></i> 09</li>
                            </ul>
                        </div>
                        <div class="mt-14 box-image">
                            <img src="images/project/img2.jpg" alt="img">
                        </div>
                        <div class="mt-14 bottom d-flex align-items-center">
                            <ul class="list-stacked">
                                <li class="avt-list">
                                    <div class="avatar avt-27 round">
                                        <img src="images/avt/avt6.jpg" alt="img">
                                    </div>
                                </li>
                                <li class="avt-list">
                                    <div class="avatar avt-27 round">
                                        <img src="images/avt/avt7.jpg" alt="img">
                                    </div>
                                </li>
                                <li class="avt-list">
                                    <div class="avatar avt-27 round">
                                        <img src="images/avt/avt5.jpg" alt="img">
                                    </div>
                                </li>
                            </ul>
                            <div class="box-progress">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-caption-2 text-black-5">Progress</span>
                                    <span class="fw-6 text-caption-2">78%</span>
                                </div>
                                <div class="progress h-5">
                                    <div class="progress-bar" role="progressbar" style="width: 78%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                
                            </div>
                        </div>
                   </a>
                </div>
            </div>
        </div>
    </div>
    
  
</div>
{{-- tasks --}}
<div class="mt-32">
    <div class="section-title d-flex justify-content-between align-items-center">
        <h3>Today Tasks</h3>
        <a href="my-task.html" class="font-title-btn text-black-5">View All</a>
    </div>
    <a href="task-detail-calendar.html" class="mt-20 box-task style-2">
        <div class="box-icon w-52 radius-8">
            <i class="icon-wallet"></i>
        </div>
        <div class="content">
            <div class="font-title-btn text-black-2">Fintech Project</div>
            <div class="mt-10 d-flex align-items-center gap-16">
                <ul class="list-stacked">
                    <li class="avt-list">
                        <div class="avatar avt-24 round">
                            <img src="images/avt/avt3.jpg" alt="img">
                        </div>
                    </li>
                    <li class="avt-list">
                        <div class="avatar avt-24 round">
                            <img src="images/avt/avt4.jpg" alt="img">
                        </div>
                    </li>
                    <li class="avt-list">
                        <div class="avatar avt-24 round member">
                            3+
                        </div> 
                    </li>
                </ul>
                <span class="meta-item"><i class="icon-chat2 fs-12"></i> 16</span>
            </div>
        </div>
        <div class="circle_percent" data-percent="85">
            <div class="circle_inner">
                <div class="round_per"></div>
            </div>
        </div>
    </a>
    
</div>
@endsection