@extends('home.includes.layout', ['title' => 'Home'])
@section('content')
    @include('home.includes.slider')
    <!--//flexslider-->

    <!--//promo-->
    @include('home.includes.heading')
    <!--//news-->

    <div class="row page-row" style="margin-bottom: 5px;">
        <div class="col-sm-1" style="background-color: #f27f78;color:whitesmoke;">
            <span style="font-size: 1.6rem;font-weight: bold;">Notice - </span>
        </div>
        <div class="col-sm-11" style="background-color: #f5f5f5;color:black;">
            <marquee style="font-size: 12pt">Welcome to official website of C.M.College, Darbhanga</marquee>
        </div>
    </div>
    <div class="row cols-wrapper">
        <div class="col-md-3">
            <section class="events">
                <h1 class="section-heading text-highlight"><span class="line" style="color: #fa8303;font-weight: 700;">Latest Events</span></h1>
                <div class="section-content">

                    <div class="event-item" >
                        <p class="date-label">
                            <span class="month">Sep</span>
                            <span class="date-number">9</span>
                        </p>
                        <div class="details">
                            <h2 class="title">Demo Events</h2>
                            <p class="time"><i class="fa fa-clock-o"></i>11:00 AM</p>
                            <p class="location"><a href='#'>Click for Photo
                                    Gallery</a></p>
                        </div>
                        <!--//details-->
                    </div>

                    <div class="event-item">
                        <p class="date-label">
                            <span class="month">Sep</span>
                            <span class="date-number">9</span>
                        </p>
                        <div class="details">
                            <h2 class="title">Demo Events</h2>
                            <p class="time"><i class="fa fa-clock-o"></i>11:00 AM</p>
                            <p class="location"><a href='#'>Click for Photo
                                    Gallery</a></p>
                        </div>
                        <!--//details-->
                    </div>
                    <!--event-item-->

                    <div class="event-item">
                        <p class="date-label">
                            <span class="month">Feb</span>
                            <span class="date-number">12</span>
                        </p>
                        <div class="details">
                            <h2 class="title">Demo Events</h2>
                            <p class="time"><i class="fa fa-clock-o"></i>08:00 a.m.</p>
                            <p class="location"><a href='#'>Click for Photo
                                    Gallery</a></p>
                        </div>
                        <!--//details-->
                    </div>
                    <!--event-item-->

                    <div class="event-item">
                        <p class="date-label">
                            <span class="month">Dec</span>
                            <span class="date-number">23</span>
                        </p>
                        <div class="details">
                            <h2 class="title">Demo Events</h2>
                            <p class="time"><i class="fa fa-clock-o"></i>11:00 am</p>
                            <p class="location"><a href='#'>Click for Photo
                                    Gallery</a></p>
                        </div>
                        <!--//details-->
                    </div>
                    <!--event-item-->

                    <div class="event-item">
                        <p class="date-label">
                            <span class="month">Dec</span>
                            <span class="date-number">16</span>
                        </p>
                        <div class="details">
                            <h2 class="title">Demo Events</h2>
                            <p class="time"><i class="fa fa-clock-o"></i>01:00 p.m.</p>
                            <p class="location"><a href='#'>Click for Photo
                                    Gallery</a></p>
                        </div>
                        <!--//details-->
                    </div>
                    <!--event-item-->

                    <div class="event-item">
                        <p class="date-label">
                            <span class="month">Dec</span>
                            <span class="date-number">16</span>
                        </p>
                        <div class="details">
                            <h2 class="title">Demo Events</h2>
                            <p class="time"><i class="fa fa-clock-o"></i>11:00 am</p>
                            <p class="location"><a href='#'>Click for Photo
                                    Gallery</a></p>
                        </div>
                        <!--//details-->
                    </div>
                    <!--event-item-->

                    <!--event-item-->
                    <!--event-item-->
                    <!--event-item-->
                    <a class="read-more" href="#">All events<i class="fa fa-chevron-right"></i></a>
                </div>
                <!--//section-content-->
            </section>
            <!--//events-->
        </div>
        <!--//col-md-3-->
        <div class="col-md-6">
            <!--//video-->
            <section class="course-finder">
                <h1 class="section-heading text-highlight"><span class="line" style="color: #fa8303;font-weight: 700;">Important Notices</span></h1>
                <div class="section-content">

                    <p style="color: black;">
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i> Demo Notice</a>
                        <img src="{{ asset('frontend/assets/images/misc/new_red.gif') }}"
                            id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl00_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i> Demo Notice</a>
                        <img src="{{ asset('frontend/assets/images/misc/new_red.gif') }}"
                            id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl01_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i> Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl02_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i> Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl03_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i> Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl04_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i> Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl05_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i> Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl06_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl07_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl08_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl09_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl10_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl11_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl12_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl13_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl14_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl15_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl16_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl17_imgBadge" />
                    </p>

                    <h5 class="no-margin-top has-divider text-highlight"></h5>
                    <a class="read-more" href="Announcement.html">All Important Notices<i
                            class="fa fa-chevron-right"></i></a>
                </div>
                <!--//section-content-->
            </section>

            <section class="course-finder">
                <h1 class="section-heading text-highlight"><span class="line" style="color: #fa8303;font-weight: 700;">e-Tender Notices</span></h1>
                <div class="section-content">

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Demo Notice</a>
                        <img src="{{ asset('frontend/assets/images/misc/new_red.gif')}}"
                            id="ctl00_ContentPlaceHolder1_RptrTenderNotice_ctl00_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrTenderNotice_ctl01_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrTenderNotice_ctl02_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrTenderNotice_ctl03_imgBadge" />
                    </p>

                    <p>
                        <a href='#'><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                            Demo Notice</a>
                        <img id="ctl00_ContentPlaceHolder1_RptrTenderNotice_ctl04_imgBadge" />
                    </p>

                    <h5 class="no-margin-top has-divider text-highlight"></h5>
                    <a class="read-more" href="#">All e-Tender Notices<i
                            class="fa fa-chevron-right"></i></a>
                </div>
                <!--//section-content-->
            </section>
            <!--//course-finder-->
        </div>
        <div class="col-md-3">
            <!--//links-->
            <section class="video">
                <h1 class="section-heading text-highlight"><span class="line" style="color: #fa8303;font-weight: 700;">From Vice-Chancellor's Desk</span></h1>
                <!--//carousel-controls-->
                <div class="section-content">
                    <div id="videos-carousel" class="videos-carousel carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ asset('frontend/assets/images/officer/vc.jpeg') }}"
                                    alt="Prof. Devendra Kumar Singh, Principal, National P.G. College" />
                            </div>
                            <!--//item-->
                        </div>
                        <!--//carousel-inner-->
                    </div>
                    <!--//videos-carousel-->
                    <p class="description text-center">
                        <span style="font-weight: bold;font-size:12pt;">Prof. Surendra Pratap Singh</span><br />
                        Hon'ble Vice-Chancellor<br /><br />
                        <a href="#">Read More</a>
                    </p>

                </div>
                <!--//section-content-->
            </section>

            <section class="video">
                <h1 class="section-heading text-highlight"><span class="line" style="color: #fa8303;font-weight: 700;">From Principal's Desk</span></h1>
                <!--//carousel-controls-->
                <div class="section-content">
                    <div id="videos-carousel" class="videos-carousel carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ asset('frontend/assets/images/officer/principal.jpg') }}"
                                    alt="Prof. Devendra Kumar Singh, Principal, National P.G. College" />
                            </div>
                            <!--//item-->
                        </div>
                        <!--//carousel-inner-->
                    </div>
                    <!--//videos-carousel-->
                    <p class="description text-center">
                        <span style="font-weight: bold;font-size:12pt;">Dr. Anil Kumar Mandal</span><br />
                        Principal<br /><br />
                        <a href="#">Read More</a>
                    </p>

                </div>
                <!--//section-content-->
            </section>

            <section class="links">
                <h1 class="section-heading text-highlight"><span class="line" style="color: #fa8303;font-weight: 700;">Important Links</span></h1>
                <div class="section-content">
                    <p><a href="https://ugceresources.in/"><i class="fa fa-caret-right"></i>UGC e-Resources</a>
                    </p>
                    {{-- <p><a href="ddukk.html"><i class="fa fa-caret-right"></i>Deen Dayal Upadhyay Kaushal Kendra
                            (DDUKK)</a></p> --}}
                    <p><a href="#"><i class="fa fa-caret-right"></i>Commercepedia</a></p>
                    <p><a href="#"><i class="fa fa-caret-right"></i>Commercepedia
                            (Student Edition)</a></p>
                    <p><a href="#"><i class="fa fa-caret-right"></i>Online
                            Study Material</a></p>
                </div>
                <!--//section-content-->
            </section>

            <!--//links-->
        </div>
        <!--//col-md-3-->
    </div>
    <!--//cols-wrapper-->
@endsection
