@extends('dashbord.master')
@section('title')
    All users
@endsection
@section('content')
{{-- session --}}
{{-- add msg --}}
@if (session()->has('add'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('add') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
{{-- edit msg --}}
@if (session()->has('edit'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('edit') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
{{-- delete msg --}}
@if (session()->has('delete'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('delete') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
{{-- end session --}}
    <div class="pt-30">
        <div class="section-title d-flex justify-content-between align-items-center">
            <h3>all users</h3>
        </div>
     <div class="sw-box-shadow mt-20">
        <div class="table-responsive">
            <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                   data-page-length="50"
                   style="text-align: center">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name </th>
                    <th>emial </th>
                    <th>photo</th>
                    <th>Processes</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>name</td>
                        <td>email</td>
                        <td>photo</td>
                        <td>
                            <a href="" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_book" title="حذف"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>

                @include('dashbord.projects.delete_project')
            </table>
        </div>
    </div>
    </div>
@endsection
