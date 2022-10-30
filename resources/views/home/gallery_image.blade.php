@extends('home.includes.layout', ['title' => 'College Gallery'])
@section('headerarea')
@endsection
@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="College Gallery">
                <span>College Gallery</span>
            </div>
            <div class="breadcrumbs pull-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="Default.html">Home</a><i class="fa fa-angle-right"></i></li>
                    <li><a href="GalleryAlbum.html">Gallery</a><i class="fa fa-angle-right"></i></li>
                    <li class="current"><span id="ctl00_ContentPlaceHolder1_lblSideHeading">College Gallery</span></li>
                </ul>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">

                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" alt=''
                    href='{{ asset('frontend/assets/images/home/classroom.jpg') }}'>
                    <img class="img-responsive img-thumbnail" src='{{ asset('frontend/assets/images/home/classroom.jpg') }}'
                        alt='' height="500" width="500" /></a>

                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" alt=''
                    href='{{ asset('frontend/assets/images/home/IMG-20221001-WA0012 (1).jpg') }}'>
                    <img class="img-responsive img-thumbnail" src='{{ asset('frontend/assets/images/home/IMG_20211217_115535.jpg') }}'
                        alt='' height="500" width="500" /></a>

                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" alt=''
                    href='{{ asset('frontend/assets/images/home/IMG_20211217_115208.jpg') }}'>
                    <img class="img-responsive img-thumbnail" src='{{ asset('frontend/assets/images/home/IMG_20211217_115208.jpg') }}'
                        alt='' height="500" width="500" /></a>

                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" alt=''
                    href='{{ asset('frontend/assets/images/home/IMG_20211217_115353.jpg') }}'>
                    <img class="img-responsive img-thumbnail" src='{{ asset('frontend/assets/images/home/IMG_20211217_115353.jpg') }}'
                        alt='' style="height: 200px; width:300px;" /></a>

                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" alt=''
                href='{{ asset('frontend/assets/images/home/IMG_20211217_115353.jpg') }}'>
                <img class="img-responsive img-thumbnail" src='{{ asset('frontend/assets/images/home/IMG_20220509_094517.jpg') }}'
                    alt='' style="height: 200px; width:300px;" /></a>

                    <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" alt=''
                    href='{{ asset('frontend/assets/images/home/IMG_20211217_115353.jpg') }}'>
                    <img class="img-responsive img-thumbnail" src='{{ asset('frontend/assets/images/home/IMG_20220524_125231.jpg') }}'
                        alt='' style="height: 200px; width:300px;" /></a>

                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" alt=''
                href='{{ asset('frontend/assets/images/home/IMG_20211217_115353.jpg') }}'>
                <img class="img-responsive img-thumbnail" src='{{ asset('frontend/assets/images/home/IMG_20220815_091809_1.jpg') }}'
                    alt='' style="height: 200px; width:300px;" /></a>

                    <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" alt=''
                    href='{{ asset('frontend/assets/images/home/IMG_20211217_115353.jpg') }}'>
                    <img class="img-responsive img-thumbnail" src='{{ asset('frontend/assets/images/home/IMG_20220416_121515.jpg') }}'
                        alt='' style="height: 200px; width:300px;" /></a>

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
