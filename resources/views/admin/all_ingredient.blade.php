@extends('layouts.admin')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            @include('components.page_title')
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Ingredient</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All ingredients</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm mb-0 table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class=" pl-5" style="min-width: 200px;">measurement
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="customers">
                                    @foreach ($ingredients as $ingredient)
                                    <tr class="btn-reveal-trigger">
                                        <td>
                                            <a href="#">
                                                <div class="media d-flex align-items-center">
                                                    <div class="media-body">
                                                        <h5 class="mb-0 fs--1">{{$ingredient->name}}</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="py-2 pl-5">{{$ingredient->measurement}}</td>
                                        <td class="py-2 text-right">
                                            <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp"
                                                    type="button" data-toggle="dropdown"><span class="fs--1"><svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                            height="18px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                            </g>
                                                        </svg></span></button>
                                                <div class="dropdown-menu dropdown-menu-right border py-0">
                                                    <div class="py-2">
                                                        <a class="dropdown-item" href="{{route('edit_ingredient',$ingredient->id)}}">Edit</a>
                                                        <a class="dropdown-item text-danger"
                                                            href="{{route('delete_ingredient',$ingredient->id)}}">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
    //
