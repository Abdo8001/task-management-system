<div class="offcanvas offcanvas-bottom" tabindex="-1" id="edit_project{{ $project->id }}" aria-labelledby="offcanvasBottomLabel">
    <div class="offcanvas-header style-1">
      <h5 class="offcanvas-title" id="offcanvasBottomLabel">Create Project</h5>
      <span class="icon-close2 icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
    </div>

    <form action="{{route('projects.update',$project->id)}}" method="post">
        @csrf
        @method('put')
        <div class="offcanvas-body pb-32">
            <input type="text" name="name" value="{{ $project->name }}" placeholder="Project Name">
            <input type="hidden" value="{{ $project->id }}" name="id">
          {{-- namee --}}
                @if($errors->first('name'))
                <div class="alert alert-warning alert-dismissible fade show mb-10" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M22.2 17.6335L14.0016 3.39569C13.7967 3.04687 13.5042 2.75764 13.1532 2.55668C12.8021 2.35572 12.4046 2.25 12 2.25C11.5955 2.25 11.198 2.35572 10.8469 2.55668C10.4958 2.75764 10.2033 3.04687 9.99847 3.39569L1.80003 17.6335C1.60291 17.9709 1.49902 18.3546 1.49902 18.7454C1.49902 19.1361 1.60291 19.5199 1.80003 19.8572C2.00228 20.2082 2.29425 20.499 2.64599 20.6998C2.99773 20.9006 3.39658 21.0043 3.80159 21.0001H20.1985C20.6032 21.0039 21.0016 20.9001 21.353 20.6993C21.7044 20.4985 21.9961 20.2079 22.1982 19.8572C22.3956 19.52 22.4998 19.1364 22.5001 18.7456C22.5004 18.3549 22.3969 17.9711 22.2 17.6335ZM20.8997 19.1063C20.8282 19.2282 20.7256 19.3289 20.6024 19.3981C20.4792 19.4673 20.3398 19.5025 20.1985 19.5001H3.80159C3.66029 19.5025 3.52088 19.4673 3.39765 19.3981C3.27442 19.3289 3.17181 19.2282 3.10034 19.1063C3.0356 18.9967 3.00145 18.8717 3.00145 18.7444C3.00145 18.6171 3.0356 18.4922 3.10034 18.3826L11.2988 4.14475C11.3717 4.02341 11.4748 3.92301 11.598 3.8533C11.7212 3.7836 11.8603 3.74696 12.0019 3.74696C12.1435 3.74696 12.2826 3.7836 12.4058 3.8533C12.529 3.92301 12.6321 4.02341 12.705 4.14475L20.9035 18.3826C20.9676 18.4925 21.0011 18.6176 21.0005 18.7449C20.9998 18.8722 20.965 18.997 20.8997 19.1063ZM11.25 13.5001V9.75006C11.25 9.55115 11.329 9.36038 11.4697 9.21973C11.6104 9.07908 11.8011 9.00006 12 9.00006C12.1989 9.00006 12.3897 9.07908 12.5304 9.21973C12.671 9.36038 12.75 9.55115 12.75 9.75006V13.5001C12.75 13.699 12.671 13.8897 12.5304 14.0304C12.3897 14.171 12.1989 14.2501 12 14.2501C11.8011 14.2501 11.6104 14.171 11.4697 14.0304C11.329 13.8897 11.25 13.699 11.25 13.5001ZM13.125 16.8751C13.125 17.0976 13.059 17.3151 12.9354 17.5001C12.8118 17.6851 12.6361 17.8293 12.4305 17.9144C12.225 17.9996 11.9988 18.0219 11.7806 17.9784C11.5623 17.935 11.3619 17.8279 11.2045 17.6706C11.0472 17.5132 10.9401 17.3128 10.8966 17.0945C10.8532 16.8763 10.8755 16.6501 10.9607 16.4445C11.0458 16.239 11.19 16.0633 11.375 15.9397C11.56 15.816 11.7775 15.7501 12 15.7501C12.2984 15.7501 12.5845 15.8686 12.7955 16.0796C13.0065 16.2905 13.125 16.5767 13.125 16.8751Z" fill="white"/>
                    </svg>
                    <span>{{ $errors->first('name') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
           @endif
        
          {{-- end namee --}}
            <div class="mt-24">
                <h5 class="text-black-2">Description</h5>
                
                <input type="text" name="description" value="{{ $project->description }}"  class="form-control" placeholder="Write your description">
                </div>
    
                    {{-- namee --}}
                    @if($errors->first('description'))
                    <div class="alert alert-warning alert-dismissible fade show mb-10" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M22.2 17.6335L14.0016 3.39569C13.7967 3.04687 13.5042 2.75764 13.1532 2.55668C12.8021 2.35572 12.4046 2.25 12 2.25C11.5955 2.25 11.198 2.35572 10.8469 2.55668C10.4958 2.75764 10.2033 3.04687 9.99847 3.39569L1.80003 17.6335C1.60291 17.9709 1.49902 18.3546 1.49902 18.7454C1.49902 19.1361 1.60291 19.5199 1.80003 19.8572C2.00228 20.2082 2.29425 20.499 2.64599 20.6998C2.99773 20.9006 3.39658 21.0043 3.80159 21.0001H20.1985C20.6032 21.0039 21.0016 20.9001 21.353 20.6993C21.7044 20.4985 21.9961 20.2079 22.1982 19.8572C22.3956 19.52 22.4998 19.1364 22.5001 18.7456C22.5004 18.3549 22.3969 17.9711 22.2 17.6335ZM20.8997 19.1063C20.8282 19.2282 20.7256 19.3289 20.6024 19.3981C20.4792 19.4673 20.3398 19.5025 20.1985 19.5001H3.80159C3.66029 19.5025 3.52088 19.4673 3.39765 19.3981C3.27442 19.3289 3.17181 19.2282 3.10034 19.1063C3.0356 18.9967 3.00145 18.8717 3.00145 18.7444C3.00145 18.6171 3.0356 18.4922 3.10034 18.3826L11.2988 4.14475C11.3717 4.02341 11.4748 3.92301 11.598 3.8533C11.7212 3.7836 11.8603 3.74696 12.0019 3.74696C12.1435 3.74696 12.2826 3.7836 12.4058 3.8533C12.529 3.92301 12.6321 4.02341 12.705 4.14475L20.9035 18.3826C20.9676 18.4925 21.0011 18.6176 21.0005 18.7449C20.9998 18.8722 20.965 18.997 20.8997 19.1063ZM11.25 13.5001V9.75006C11.25 9.55115 11.329 9.36038 11.4697 9.21973C11.6104 9.07908 11.8011 9.00006 12 9.00006C12.1989 9.00006 12.3897 9.07908 12.5304 9.21973C12.671 9.36038 12.75 9.55115 12.75 9.75006V13.5001C12.75 13.699 12.671 13.8897 12.5304 14.0304C12.3897 14.171 12.1989 14.2501 12 14.2501C11.8011 14.2501 11.6104 14.171 11.4697 14.0304C11.329 13.8897 11.25 13.699 11.25 13.5001ZM13.125 16.8751C13.125 17.0976 13.059 17.3151 12.9354 17.5001C12.8118 17.6851 12.6361 17.8293 12.4305 17.9144C12.225 17.9996 11.9988 18.0219 11.7806 17.9784C11.5623 17.935 11.3619 17.8279 11.2045 17.6706C11.0472 17.5132 10.9401 17.3128 10.8966 17.0945C10.8532 16.8763 10.8755 16.6501 10.9607 16.4445C11.0458 16.239 11.19 16.0633 11.375 15.9397C11.56 15.816 11.7775 15.7501 12 15.7501C12.2984 15.7501 12.5845 15.8686 12.7955 16.0796C13.0065 16.2905 13.125 16.5767 13.125 16.8751Z" fill="white"/>
                        </svg>
                        <span>{{ $errors->first('description') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <i class="icon-close"></i>
                        </button>
                    </div>>
            @endif
            
              {{-- end namee --}}
            </div>
            <div class="mt-24">
               
                <button  type="submit" class="mt-35 tf-btn primary">Create Project</button>
            </div>
        </div>
    </form>
</div>
