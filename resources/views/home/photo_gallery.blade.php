@extends('home.includes.layout', ['title' => 'College Gallery'])
@section('headerarea')
@endsection
@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="College Gallery">
                <span>College Gallery</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="page-row">
                <p></p>
            </div>
            <div class="row page-row">
                <span id="ctl00_ContentPlaceHolder1_rptrAlbum">
                    <span>
                        <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                            <div class="album-cover">
                                <a href='{{ route('photoGalleryImage') }}'>
                                    <img class="img-responsive"
                                        src='{{ asset('frontend/assets/images/home/classroom.jpg') }}'
                                        alt="" /></a>
                                <div class="desc">
                                    <h4>
                                        <small><a href='{{ route('photoGalleryImage') }}'>
                                                College Gallery</a></small>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </span>
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@section('scriptarea')
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/plugins/jflickrfeed/jflickrfeed.min.js"></script>
@endsection
@endsection
