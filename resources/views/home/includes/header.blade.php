<header class="header" style="background-image: url('{{ asset('frontend/assets/images/whitebg1.jpg')}}');background-size: fill;">
    <div class="top-bar">
        <div class="container">
            <div class="contact pull-left">
                <p class="phone" style="font-size: 13px"><i class="fa fa-phone" style="color: white;"></i><a
                        href="tel:+915222618312" style="color: white;">Call us 9191683430</a></p>
                <p class="email" style="font-size: 13px"><i class="fa fa-envelope" style="color: white;"></i><a
                        href="mailto:principalcmcollege@yahoo.com" style="color: white;">principalcmcollege@yahoo.com</a></p>
            </div>
            <!--//social-icons-->
            <div class="form-group">
                <p class="navbar-right"
                    style="color: #BFD3E3; vertical-align: middle; font-size: 10pt; margin-top: 15px; font-weight: 600; margin-right: 10px">
                    {{ \Carbon\Carbon::now()->format('l, F j, Y') }}
                </p>
            </div>
        </div>
    </div>
    <!--//to-bar-->
    <div class="header-main container">
        <div class="info col-md-2 col-sm-2">
            <div class="pull-left">
                <a href="#">
                    <img src="{{ asset('frontend/assets/images/icon/newlogo.png') }}" alt="College Logo"
                        class="img-responsive" />
                </a>
            </div>
        </div>
        <div class="info col-md-8 col-sm-8 text-center">
            <h1 class="" style="font-weight: bold;color:#fa8303;letter-spacing: 3px;">CHANDRADHARI MITHILA
                COLLEGE</h1>
            <h5 class="" style="font-weight: bold; text-align: center;"> ( A Post Graduate Constituent Unit of
                <a href="http://lnmu.ac.in/" style="color: #7C0000;">L.N.Mithila University,Darbhanga</a> )
            </h5>
            <h5 class="" style="font-weight: bold; text-align: center;"> ( Accredited with 'B' Grade (C.G.P.A.
                2.84) by NAAC )</h5>
        </div>
        <!--//logo-->
        <div class="info col-md-2 col-sm-2">
            <div class="pull-right"><br />
                <a href="#">
                    <img src="{{ asset('frontend/assets/images/icon/lnmulogo.png') }}" alt="College Logo"
                        class="img-responsive" width="100" />
                </a>
            </div>
        </div>
        <!--//info-->
    </div>
    <!--//header-main-->
</header>
