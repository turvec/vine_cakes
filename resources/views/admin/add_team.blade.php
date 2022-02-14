@extends('layouts.admin')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            @include('components.page_title')
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Team</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Upload</a></li>
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
                        <form action="{{route('upload_team')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Team Name</span>
                                    </div>
                                    <input name="name" type="text" class="form-control" placeholder="Input name" required>

                                </div>
                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Team Email</span>
                                    </div>
                                    <input name="email" type="email" class="form-control" placeholder="Input an email" >

                                </div>
                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Team Phone</span>
                                    </div>
                                    <input name="phone" type="num" class="form-control" placeholder="Input phone no." >

                                </div>
                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Team Image</span>
                                    </div>
                                    <input name="image" type="file" class="form-control" placeholder="Upload Image" >

                                </div>

                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Position</span>
                                    </div>
                                    <input name="position" type="text" class="form-control">

                                </div>
                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Comment</span>
                                    </div>
                                    <textarea name="comment" class="form-control"></textarea>

                                </div>
                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Facebook</span>
                                    </div>
                                    <input name="facebook" type="text" class="form-control"  >

                                </div>
                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Instagram</span>
                                    </div>
                                    <input name="insta" type="text" class="form-control"  >

                                </div>
                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Twitter</span>
                                    </div>
                                    <input name="twitter" type="text" class="form-control"  >

                                </div>
                                <div class="input-group mb-4 input-primary">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Linkedin</span>
                                    </div>
                                    <input name="linkedin" type="text" class="form-control"  >

                                </div>

                                <div class="input-group mt-5">
                                    <button class="btn btn-rounded btn-primary">
                                        <span class="btn-icon-left text-primary">
                                            <i class="fa fa-upload color-primary"></i>
                                        </span>
                                        Upload
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
