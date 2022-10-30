@extends('home.includes.layout', ['title' => 'Facilities'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Facilities">
                <span>Facilities</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.facilities', ['active' => 7])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h2 class="no-margin-top has-divider text-highlight">Infrastructure</h2>
                    <p>The college has been keeping pace with the growing activities and academic demands.
                        Faculty of Science, faculty of Management Studies and the faculty of Computer
                        Science were introduced and required numbers of labs were set up.</p>
                    <p>There has been immense addition to the infrastructure as an auditorium with a seating
                        capacity of 800, Evaluation cell, Secrecy cell, Administrative block, Central
                        library, underground parking, hostel for girls, sports ground were added.</p>
                    <p>The college provides all departments with facilities like office rooms and common
                        rooms. There are separate common rooms for female students in every academic block
                        with washrooms for female students, male students and staff separately.</p>
                    <p>The college is made accessible by the installation of elevator and ramps are being
                        constructed for the use of physically challenged students. Audio books,
                        screen-reading software, Braille display and scanning facilities are available for
                        the visually challenged students. Special attention is paid to the students
                        suffering from dyslexia and hearing-impairment.</p>

                    <table align="center">
                        <tr>
                            <td>
                                <h3>College Building</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Administrative Block"
                                    href="assets/images/CollegeInfrastructure/Building/Infra-1.jpg"><img
                                        class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/Building/Thumb/Infra-1.jpg"
                                        alt="Administrative Block"></a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Academic Block"
                                    href="assets/images/CollegeInfrastructure/Building/Infra-2.jpg"><img
                                        class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/Building/Thumb/Infra-2.jpg"
                                        alt="Academic Block"></a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Science Block"
                                    href="assets/images/CollegeInfrastructure/Building/Infra-3.jpg"><img
                                        class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/Building/Thumb/Infra-3.jpg"
                                        alt="Science Block"></a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Central Library"
                                    href="assets/images/CollegeInfrastructure/Building/Infra-4.jpg"><img
                                        class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/Building/Thumb/Infra-4.jpg"
                                        alt="Central Library"></a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Evaluation Centre"
                                    href="assets/images/CollegeInfrastructure/Building/Infra-5.jpg"><img
                                        class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/Building/Thumb/Infra-5.jpg"
                                        alt="Evaluation Centre"></a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Canteen"
                                    href="assets/images/CollegeInfrastructure/Building/Infra-7.jpg"><img
                                        class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/Building/Thumb/Infra-7.jpg"
                                        alt="Canteen"></a>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>IT Infrastructure</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Computer Lab with Digital Board"
                                    href="assets/images/CollegeInfrastructure/ITInfra/ComputerLab1.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/ITInfra/Thumb/ComputerLab1.jpg"
                                        alt="Computer Lab with Digital Board" />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Computer Lab with Digital Board"
                                    href="assets/images/CollegeInfrastructure/ITInfra/ComputerLab2.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/ITInfra/Thumb/ComputerLab2.jpg"
                                        alt="Computer Lab with Digital Board" />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Research Lab / Digital Librrary"
                                    href="assets/images/CollegeInfrastructure/ITInfra/ResearchLab3.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/ITInfra/Thumb/ResearchLab3.jpg"
                                        alt="Research Lab / Digital Librrary" />
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>Laboratories</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Botany Lab"
                                    href="assets/images/CollegeInfrastructure/Labs/Botany1.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/Labs/Thumb/Botany1.jpg"
                                        alt="Botany Lab" />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Chemistry Lab"
                                    href="assets/images/CollegeInfrastructure/Labs/Chemistry1.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/Labs/Thumb/Chemistry1.jpg"
                                        alt="Chemistry Lab" />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Electronics Lab"
                                    href="assets/images/CollegeInfrastructure/Labs/Electronics2.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/Labs/Thumb/Electronics2.jpg"
                                        alt="Electronics Lab" />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Geography Lab"
                                    href="assets/images/CollegeInfrastructure/Labs/Geography2.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/Labs/Thumb/Geography2.jpg"
                                        alt="Geography Lab" />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Physics Lab"
                                    href="assets/images/CollegeInfrastructure/Labs/Physics1.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/Labs/Thumb/Physics1.jpg"
                                        alt="Physics Lab" />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Physics Lab"
                                    href="assets/images/CollegeInfrastructure/Labs/Physics2.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/Labs/Thumb/Physics2.jpg"
                                        alt="Physics Lab" />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Zoology Lab"
                                    href="assets/images/CollegeInfrastructure/Labs/Zoology2.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/Labs/Thumb/Zoology2.jpg"
                                        alt="Zoology Lab" />
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>Auditoriums & Seminar Hall</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Auditorium I "
                                    href="assets/images/CollegeInfrastructure/AudiSemi/Audi1-1.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/AudiSemi/Thumb/Audi1-1.jpg"
                                        alt="Auditorium I " />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Auditorium I "
                                    href="assets/images/CollegeInfrastructure/AudiSemi/Audi1-2.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/AudiSemi/Thumb/Audi1-2.jpg"
                                        alt="Auditorium I " />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Auditorium II "
                                    href="assets/images/CollegeInfrastructure/AudiSemi/Audi2-1.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/AudiSemi/Thumb/Audi2-1.jpg"
                                        alt="Auditorium II " />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Auditorium II "
                                    href="assets/images/CollegeInfrastructure/AudiSemi/Audi2-2.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/AudiSemi/Thumb/Audi2-2.jpg"
                                        alt="Auditorium II " />
                                </a>

                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Auditorium III "
                                    href="assets/images/CollegeInfrastructure/AudiSemi/Audi3-1.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/AudiSemi/Thumb/Audi3-1.jpg"
                                        alt="Auditorium III " />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Auditorium III"
                                    href="assets/images/CollegeInfrastructure/AudiSemi/Audi3-2.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/AudiSemi/Thumb/Audi3-2.jpg"
                                        alt="Auditorium III " />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Seminar Hall "
                                    href="assets/images/CollegeInfrastructure/AudiSemi/Semi1.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/AudiSemi/Thumb/Semi1.jpg"
                                        alt="Seminar Hall " />
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>Play Ground</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Play Ground "
                                    href="assets/images/CollegeInfrastructure/PlayGround/PlayGround1.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/PlayGround/PlayGround1.jpg"
                                        alt="Play Ground" />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Play Ground "
                                    href="assets/images/CollegeInfrastructure/PlayGround/PlayGround2.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/PlayGround/PlayGround2.jpg"
                                        alt="Play Ground " />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Play Ground "
                                    href="assets/images/CollegeInfrastructure/PlayGround/PlayGround3.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/PlayGround/PlayGround3.jpg"
                                        alt="Play Ground " />
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3>Covered Parking</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Boys Parking"
                                    href="assets/images/CollegeInfrastructure/Parking/BoysParking.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/Parking/BoysParking.jpg"
                                        alt="Boys Parking" />
                                </a>
                                <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"
                                    title="Girls & Staff Parking"
                                    href="assets/images/CollegeInfrastructure/Parking/GirlsParking.jpg">
                                    <img class="img-responsive img-thumbnail"
                                        src="assets/images/CollegeInfrastructure/Parking/GirlsParking.jpg"
                                        alt="Girls Parking " />
                                </a>
                            </td>
                        </tr>
                    </table>
                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
