@extends('dashbord.layouts.master2')
@section('task_title')
    all projects
@endsection
@section('form_content')
<div class="header fixed-top line-bt">
    <div class="left">
      <a href="javascript:void(0);" class="icon back-btn"><i class="icon-back"></i></a>
    </div>
    <h5>My Projects</h5>

    <div class="right">
        <a href="#" class="icon text-black-6"><i class="icon-search"></i></a>
        <a href="#" class="icon text-black-6"><i class="icon-more"></i></a>
    </div>
</div>

<div class="app-content">
        {{-- serche box --}}
        <form action="" method="get">
            <div class="section-box-search">
                <div class="tf-container">
                    <div class="search-box style-1">
                        <input type="text" class="search-field" name="name" value="{{ Request::get('name') }}" placeholder="Find your project" value="nft website de">
                    </div>
                    <button type="submit" class="icon-left icon-search"></button>

                </div>
            </div>
               {{-- end searchbox --}}
        </form>
 
    <div class="tf-container">
        <div class="mt-24 d-flex justify-content-between align-items-center">
            <a href="#" class="box-filter select-wrapper">
                <span class="icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M3.33325 3.33325H8.33325M11.6666 3.33325H16.6666M4.99992 6.66659H6.66659C7.58706 6.66659 8.33325 7.41278 8.33325 8.33325V14.9999C8.33325 15.9204 7.58706 16.6666 6.66659 16.6666H4.99992C4.07944 16.6666 3.33325 15.9204 3.33325 14.9999V8.33325C3.33325 7.41278 4.07944 6.66659 4.99992 6.66659ZM13.3333 6.66659H14.9999C15.9204 6.66659 16.6666 7.41278 16.6666 8.33325V9.99992C16.6666 10.9204 15.9204 11.6666 14.9999 11.6666H13.3333C12.4128 11.6666 11.6666 10.9204 11.6666 9.99992V8.33325C11.6666 7.41278 12.4128 6.66659 13.3333 6.66659Z" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>  
                </span>
            
                <select class="tf-select">
                    <option>List</option>
                    <option>Board</option>

                </select>
            </a>
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
        <div class="accordion wrap-task-accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item mt-24">
                <div class="pb-20 header-task accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    <div class="title-task">
                      
                        <h6 class="text-black-2">All projects</h6>
                        <span class="num-task type-2">3</span>
                    </div>
                    <span class="icon-more text-black-5"></span>
    
                </div>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                @if (session()->has('add'))

                <div class="alert alert-primary alert-dismissible fade show mb-10" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM12 20.25C10.3683 20.25 8.77326 19.7661 7.41655 18.8596C6.05984 17.9531 5.00242 16.6646 4.378 15.1571C3.75358 13.6496 3.5902 11.9908 3.90853 10.3905C4.22685 8.79016 5.01259 7.32015 6.16637 6.16637C7.32016 5.01259 8.79017 4.22685 10.3905 3.90852C11.9909 3.59019 13.6497 3.75357 15.1571 4.37799C16.6646 5.00242 17.9531 6.05984 18.8596 7.41655C19.7661 8.77325 20.25 10.3683 20.25 12C20.2475 14.1873 19.3775 16.2843 17.8309 17.8309C16.2843 19.3775 14.1873 20.2475 12 20.25ZM7.5 10.125C7.5 9.9025 7.56598 9.68499 7.6896 9.49998C7.81322 9.31498 7.98892 9.17078 8.19449 9.08564C8.40005 9.00049 8.62625 8.97821 8.84448 9.02162C9.06271 9.06502 9.26317 9.17217 9.4205 9.3295C9.57783 9.48684 9.68498 9.68729 9.72839 9.90552C9.7718 10.1238 9.74952 10.35 9.66437 10.5555C9.57922 10.7611 9.43503 10.9368 9.25002 11.0604C9.06502 11.184 8.84751 11.25 8.625 11.25C8.32664 11.25 8.04049 11.1315 7.82951 10.9205C7.61853 10.7095 7.5 10.4234 7.5 10.125ZM16.5 10.125C16.5 10.3475 16.434 10.565 16.3104 10.75C16.1868 10.935 16.0111 11.0792 15.8055 11.1644C15.6 11.2495 15.3738 11.2718 15.1555 11.2284C14.9373 11.185 14.7368 11.0778 14.5795 10.9205C14.4222 10.7632 14.315 10.5627 14.2716 10.3445C14.2282 10.1262 14.2505 9.90005 14.3356 9.69448C14.4208 9.48891 14.565 9.31321 14.75 9.1896C14.935 9.06598 15.1525 9 15.375 9C15.6734 9 15.9595 9.11853 16.1705 9.3295C16.3815 9.54048 16.5 9.82663 16.5 10.125ZM16.3997 14.625C15.435 16.2928 13.8309 17.25 12 17.25C10.1691 17.25 8.56594 16.2937 7.60125 14.625C7.54699 14.5396 7.51055 14.4442 7.49413 14.3444C7.47772 14.2446 7.48166 14.1425 7.50573 14.0442C7.52979 13.946 7.57348 13.8536 7.63417 13.7727C7.69485 13.6917 7.77128 13.6239 7.85886 13.5733C7.94643 13.5227 8.04334 13.4903 8.14375 13.4781C8.24417 13.4659 8.34601 13.4742 8.44316 13.5023C8.5403 13.5305 8.63074 13.5781 8.70904 13.6421C8.78734 13.7062 8.85187 13.7854 8.89875 13.875C9.59907 15.0853 10.6997 15.75 12 15.75C13.3003 15.75 14.4009 15.0844 15.1003 13.875C15.1998 13.7027 15.3636 13.577 15.5558 13.5254C15.7479 13.4739 15.9527 13.5009 16.125 13.6003C16.2973 13.6998 16.4231 13.8636 16.4746 14.0558C16.5261 14.2479 16.4991 14.4527 16.3997 14.625Z" fill="white"/>
                    </svg>
                    <span>{{ session()->get('add') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                @endif
                {{-- edit msg --}}
                @if (session()->has('edit'))
                
                
                <div class="alert alert-secondary alert-dismissible fade show mb-10" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21.9375 7.51125C21.7263 7.27193 21.4666 7.08028 21.1757 6.94903C20.8847 6.81778 20.5692 6.74994 20.25 6.75H15V5.25C15 4.25544 14.6049 3.30161 13.9017 2.59835C13.1984 1.89509 12.2446 1.5 11.25 1.5C11.1107 1.4999 10.9741 1.53862 10.8555 1.61181C10.7369 1.685 10.6411 1.78977 10.5787 1.91438L7.03687 9H3C2.60218 9 2.22064 9.15804 1.93934 9.43934C1.65804 9.72064 1.5 10.1022 1.5 10.5V18.75C1.5 19.1478 1.65804 19.5294 1.93934 19.8107C2.22064 20.092 2.60218 20.25 3 20.25H19.125C19.6732 20.2502 20.2025 20.0503 20.6137 19.6878C21.0249 19.3253 21.2896 18.8251 21.3581 18.2812L22.4831 9.28125C22.523 8.9644 22.495 8.64268 22.4009 8.3375C22.3068 8.03232 22.1488 7.75066 21.9375 7.51125ZM3 10.5H6.75V18.75H3V10.5ZM20.9944 9.09375L19.8694 18.0938C19.8465 18.275 19.7583 18.4418 19.6212 18.5626C19.4842 18.6834 19.3077 18.7501 19.125 18.75H8.25V9.92719L11.6916 3.04313C12.2016 3.14521 12.6606 3.4209 12.9903 3.82326C13.32 4.22562 13.5001 4.7298 13.5 5.25V7.5C13.5 7.69891 13.579 7.88968 13.7197 8.03033C13.8603 8.17098 14.0511 8.25 14.25 8.25H20.25C20.3564 8.24996 20.4616 8.27258 20.5587 8.31634C20.6557 8.36011 20.7423 8.42402 20.8127 8.50383C20.8831 8.58363 20.9357 8.67752 20.967 8.77923C20.9984 8.88094 21.0077 8.98816 20.9944 9.09375Z" fill="white"/>
                    </svg>
                    <span>{{ session()->get('edit') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                @endif
                {{-- delete msg --}}
                @if (session()->has('delete'))
                
                
                <div class="alert alert-warning alert-dismissible fade show mb-10" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M22.2 17.6335L14.0016 3.39569C13.7967 3.04687 13.5042 2.75764 13.1532 2.55668C12.8021 2.35572 12.4046 2.25 12 2.25C11.5955 2.25 11.198 2.35572 10.8469 2.55668C10.4958 2.75764 10.2033 3.04687 9.99847 3.39569L1.80003 17.6335C1.60291 17.9709 1.49902 18.3546 1.49902 18.7454C1.49902 19.1361 1.60291 19.5199 1.80003 19.8572C2.00228 20.2082 2.29425 20.499 2.64599 20.6998C2.99773 20.9006 3.39658 21.0043 3.80159 21.0001H20.1985C20.6032 21.0039 21.0016 20.9001 21.353 20.6993C21.7044 20.4985 21.9961 20.2079 22.1982 19.8572C22.3956 19.52 22.4998 19.1364 22.5001 18.7456C22.5004 18.3549 22.3969 17.9711 22.2 17.6335ZM20.8997 19.1063C20.8282 19.2282 20.7256 19.3289 20.6024 19.3981C20.4792 19.4673 20.3398 19.5025 20.1985 19.5001H3.80159C3.66029 19.5025 3.52088 19.4673 3.39765 19.3981C3.27442 19.3289 3.17181 19.2282 3.10034 19.1063C3.0356 18.9967 3.00145 18.8717 3.00145 18.7444C3.00145 18.6171 3.0356 18.4922 3.10034 18.3826L11.2988 4.14475C11.3717 4.02341 11.4748 3.92301 11.598 3.8533C11.7212 3.7836 11.8603 3.74696 12.0019 3.74696C12.1435 3.74696 12.2826 3.7836 12.4058 3.8533C12.529 3.92301 12.6321 4.02341 12.705 4.14475L20.9035 18.3826C20.9676 18.4925 21.0011 18.6176 21.0005 18.7449C20.9998 18.8722 20.965 18.997 20.8997 19.1063ZM11.25 13.5001V9.75006C11.25 9.55115 11.329 9.36038 11.4697 9.21973C11.6104 9.07908 11.8011 9.00006 12 9.00006C12.1989 9.00006 12.3897 9.07908 12.5304 9.21973C12.671 9.36038 12.75 9.55115 12.75 9.75006V13.5001C12.75 13.699 12.671 13.8897 12.5304 14.0304C12.3897 14.171 12.1989 14.2501 12 14.2501C11.8011 14.2501 11.6104 14.171 11.4697 14.0304C11.329 13.8897 11.25 13.699 11.25 13.5001ZM13.125 16.8751C13.125 17.0976 13.059 17.3151 12.9354 17.5001C12.8118 17.6851 12.6361 17.8293 12.4305 17.9144C12.225 17.9996 11.9988 18.0219 11.7806 17.9784C11.5623 17.935 11.3619 17.8279 11.2045 17.6706C11.0472 17.5132 10.9401 17.3128 10.8966 17.0945C10.8532 16.8763 10.8755 16.6501 10.9607 16.4445C11.0458 16.239 11.19 16.0633 11.375 15.9397C11.56 15.816 11.7775 15.7501 12 15.7501C12.2984 15.7501 12.5845 15.8686 12.7955 16.0796C13.0065 16.2905 13.125 16.5767 13.125 16.8751Z" fill="white"/>
                    </svg>
                    <span>{{ session()->get('delete') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                @endif
                {{-- end session --}}
                    <div class="sw-box-shadow mt-20">
                        <div class="table-responsive">
                            <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                   data-page-length="50"
                                   style="text-align: center">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name </th>
                                    <th>Processes</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $project )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $project->name }}</td>
                                        <td>
                                            {{-- <a href="{{ route('profile.edit',$project->id) }}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a> --}}
                                            <a type="button" class="btn btn-danger" data-bs-target="#delete_project{{ $project->id }}" data-bs-toggle="modal"><i class="fa fa-trash"></i></a>
                                            {{-- <button type="button" class=" btn-primary" data-bs-target="#edit_project{{ $project->id }}" data-bs-toggle="modal"><i class="fa fa-edit"></i></button> --}}
                                            <a href="#edit_project{{ $project->id }}" data-bs-toggle="offcanvas" class="btn-info btn " aria-controls="offcanvasBottom"><i class="icon-add"></i></a>
                                        </td>
                                    </tr>
                                     @include('dashbord.projects.edit_project')
                                      @include('dashbord.projects.delete_project')
                                     @endforeach

                            </table>

                        </div>
                    </div>
                 


              </div>
            </div>
         
@endsection
