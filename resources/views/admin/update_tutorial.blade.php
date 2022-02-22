@extends('layouts.admin')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            @include('components.page_title')
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tutorial</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Update</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Group</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{route('update_tutorial',$tutorial->id)}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Tutorial Title</span>
                                    </div>
                                    <input name="title" type="text" class="form-control" value="{{$tutorial->title}}"
                                        required>

                                </div>
                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">YouTube Link</span>
                                    </div>
                                    <textarea name="video_link"
                                        class="form-control">{{$tutorial->video_link}}</textarea>

                                </div>
                                <a href="{{route('add_ingredient',$tutorial->id)}}">
                                    <button type="button" class="btn btn-outline-primary btn-xs">Add ingredients needed
                                        for this tutorial here</button>
                                </a>
                                <a href="{{route('add_equipment',$tutorial->id)}}">
                                    <button type="button" class="btn btn-outline-primary btn-xs">Add equipment needed
                                        for this tutorial here</button>
                                </a>
                                <div class="input-group mt-5">
                                    <button class="btn btn-rounded btn-primary">
                                        <span class="btn-icon-left text-primary">
                                            <i class="fa fa-upload color-primary"></i>
                                        </span>
                                        Update
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
//
