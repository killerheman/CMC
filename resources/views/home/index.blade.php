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
            <marquee style="font-size: 12pt">
                @if ($topnotices)
                    @foreach ($topnotices as $notice)
                        @if ($notice->type == 'link')
                        <span style="color: black;">
                            <a href='{{ $notice->filename }}'><i class="fa fa-hand-o-right"
                                    aria-hidden="true"></i>&nbsp;&nbsp;{{ $notice->title }}</a>
                            <img src="{{ asset('frontend/assets/images/misc/new_red.gif') }}"
                                id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl00_imgBadge" />
                        </span>
                        &nbsp;&nbsp;&nbsp;
                        @elseif($notice->type == 'file')
                            <span style="color: black;">
                                <a href='{{ asset($notice->filename) }}'><i class="fa fa-hand-o-right"
                                        aria-hidden="true"></i> &nbsp;&nbsp;{{ $notice->title }}</a>
                                <img src="{{ asset('frontend/assets/images/misc/new_red.gif') }}"
                                    id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl00_imgBadge" />
                            </span>
                        @endif
                        &nbsp;&nbsp;&nbsp;
                    @endforeach
                @else
                <span>Welcome to official website of C.M.College, Darbhanga </span>
                @endif
            </marquee>
        </div>
    </div>
    <div class="row cols-wrapper">
        <div class="col-md-3">
            <section class="events">
                <h1 class="section-heading text-highlight"><span class="line"
                        style="color: #fa8303;font-weight: 700;">Latest Events</span></h1>
                <div class="section-content">


                    @if ($events)
                        @foreach ($events as $event)
                            <div class="event-item">
                                <p class="date-label">
                                    <span class="month">{{ \Carbon\Carbon::parse($event->created_at)->format('M')}}</span>
                                    <span class="date-number">{{ \Carbon\Carbon::parse($event->created_at)->format('d')}}</span>
                                </p>
                                <div class="details">
                                    <h2 class="title">{{ $event->name }}</h2>
                                    <p class="time"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($event->created_at)->format('h:i A')}}</p>
                                    <p class="location"><a href='{{ route('photoGalleryImage', Crypt::encrypt($event->id)) }}'>Click for Photo
                                            Gallery</a></p>
                                </div>
                                <!--//details-->
                            </div>
                        @endforeach
                    @else
                        <p>No events uploaded</p>
                    @endif

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
                <h1 class="section-heading text-highlight"><span class="line"
                        style="color: #fa8303;font-weight: 700;">Important Notices</span></h1>
                <div class="section-content">

                    @if ($notices)
                        @foreach ($notices as $notice)
                            @if ($notice->type == 'link')
                                <p style="color: black;">
                                    <a href='{{ $notice->filename }}'><i class="fa fa-hand-o-right"
                                            aria-hidden="true"></i>{{ $notice->title }}</a>
                                    <img src="{{ asset('frontend/assets/images/misc/new_red.gif') }}"
                                        id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl00_imgBadge" />
                                </p>
                            @elseif($notice->type == 'file')
                                <p style="color: black;">
                                    <a href='{{ asset($notice->filename) }}'><i class="fa fa-hand-o-right"
                                            aria-hidden="true"></i> {{ $notice->title }}</a>
                                    <img src="{{ asset('frontend/assets/images/misc/new_red.gif') }}"
                                        id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl00_imgBadge" />
                                </p>
                            @endif
                        @endforeach
                    @else
                        <p>No notice uploaded</p>
                    @endif

                    <h5 class="no-margin-top has-divider text-highlight"></h5>
                    <a class="read-more" href="Announcement.html">All Important Notices<i
                            class="fa fa-chevron-right"></i></a>
                </div>
                <!--//section-content-->
            </section>

            <section class="course-finder">
                <h1 class="section-heading text-highlight"><span class="line"
                        style="color: #fa8303;font-weight: 700;">e-Tender Notices</span></h1>
                <div class="section-content">

                    @if ($notices)
                        @foreach ($notices as $notice)
                            @if ($notice->type == 'link')
                                <p style="color: black;">
                                    <a href='{{ $notice->filename }}'><i class="fa fa-hand-o-right"
                                            aria-hidden="true"></i>{{ $notice->title }}</a>
                                    <img src="{{ asset('frontend/assets/images/misc/new_red.gif') }}"
                                        id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl00_imgBadge" />
                                </p>
                            @elseif($notice->type == 'file')
                                <p style="color: black;">
                                    <a href='{{ asset($notice->filename) }}'><i class="fa fa-hand-o-right"
                                            aria-hidden="true"></i> {{ $notice->title }}</a>
                                    <img src="{{ asset('frontend/assets/images/misc/new_red.gif') }}"
                                        id="ctl00_ContentPlaceHolder1_RptrAnnouncement_ctl00_imgBadge" />
                                </p>
                            @endif
                        @endforeach
                    @else
                        <p>No notice uploaded</p>
                    @endif

                    <h5 class="no-margin-top has-divider text-highlight"></h5>
                    <a class="read-more" href="#">All e-Tender Notices<i class="fa fa-chevron-right"></i></a>
                </div>
                <!--//section-content-->
            </section>
            <!--//course-finder-->
        </div>
        <div class="col-md-3">
            <!--//links-->
            <section class="video">
                <h1 class="section-heading text-highlight"><span class="line"
                        style="color: #fa8303;font-weight: 700;">From Vice-Chancellor's Desk</span></h1>
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
                <h1 class="section-heading text-highlight"><span class="line"
                        style="color: #fa8303;font-weight: 700;">From Principal's Desk</span></h1>
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
                <h1 class="section-heading text-highlight"><span class="line"
                        style="color: #fa8303;font-weight: 700;">Important Links</span></h1>
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
