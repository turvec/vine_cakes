@extends('layouts.home')
@section('content')
<!-- Page Banner -->
<div class="page-banner container-fluid no-padding">
    <div class="page-banner-content">
        <h3>Gallery</h3>
    </div>
</div><!-- Page Banner /- -->

<!-- Gallery column 4 -->
<div class="gallery-section gallery-column-3 gallery-column-4 container-fluid no-padding">
    <div class="section-padding"></div>
    <!-- Container -->
    <div class="container">
        <ul class="portfolio-list no-left-padding">
            @foreach ($galleries as $gallery)
            <li class="col-md-3 col-sm-3 col-xs-6">
                <div class="content-image-block">
                    <a href=".html#"><img src="/galleryimage/{{$gallery->image}}" alt="gallery" width="380" height="390"></a>
                    <div class="content-block-hover">
                        <h3>{{$gallery->title}}</h3>
                        <p>{{$gallery->description}}</p>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        <nav class="ow-pagination">
            <ul class="pagination">
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
            </ul>
        </nav>
    </div><!-- Container / -->
    <div class="section-padding"></div>
</div><!-- Gallery column 4 / -->
@endsection
