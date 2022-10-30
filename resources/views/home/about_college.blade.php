@extends('home.includes.layout', ['title' => 'About College'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="About College">
                <span>About College</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.about', ['active' => 1])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h3 class="title">
                        Welcome to C.M. College, Darbhanga</h3>
                    {{-- <p>
                        <img class="img-responsive" src="assets/images/CollegeInfrastructure/Building/Building-1.jpg"
                            alt="" />
                    </p> --}}

                    <p>
                        Chandradhari Mithila Mahavidyalaya, Darbhanga (Bihar), considered the Pride of Mithila is one of the ancient seats of learning not only in Bihar but in the entire country. As a premier institution, the College was established in 1938 and it subsequently became a constituent unit of Lalit Narayan Mithila University. It was founded under the auspices of a Citizen's Committee consisting of distinguished dignitaries of Darbhanga who felt the need of imparting higher education along the Western model while retaining Oriental flavour in the far flung and remote areas of North Bihar. Originally named Mithila College, it started functioning in a private building at Laheriasarai and was later shifted to Oval market, Darbhanga near the Tower which houses the C.M. Science College, Darbhanga at present. The mission of turning a dream into reality could be fulfilled due to the tireless and unforgettable efforts of Pandit Gangadhar Mishra, a senior advocate and resident of Saurath (Madhubani) and it is in deference to his pioneering endeavour and dedication that the college campus is known as Gangadhar Niketan.
                    </p>
                    <p>
                        The college got its present name C.M. College because of the munificence of Late Chandradhari Babu of Ranti Deorhi (Madhubani). Surviving the constraints of space and financial handicap, the college got a real lease of life because of the concerted efforts of late Dr. S. K. Sinha, the first C. M. of Bihar and two distinguished citizens of Darbhanga, Late Kunwar Kalyan Lal and the then Vice-Chairman of Darbhanga Municipality, Late Surendra Prasad Sinha. As a result of a long-term deal between the Municipality and the Government, the College could function and expand without legal encumbrance. Very soon, in the early fifties the college began to impart Degree Education in four faculties - Arts, Science, Commerce and Law.
                    </p>
                    <p>
                        In 1952, the college was separated from the Old Patna University and got affiliated to the newly formed Bihar University. The first permanent Principal of the college Dr. B.M.K. Sinha, a professor of English, became the first Registrar of Bihar University, Muzaffarpur.
                    </p>
                    <p>
                        The College reached new heights under the new Principal Dr. L. K. Mishra who had already worked in the college in early forties as a lecturer in chemistry. During his stewardship, the college turned into a major centre of academic excellence and in 1962 Post Graduate teaching was started in selected subjects of Arts and Commerce faculties. Incidentally, the college was converted to a constituent unit of Bihar University, Muzaffarpur with retrospective effect which was ratified on 30th March 1962 under the Bihar University Act 1952 Art 4 (13). Pt. Radha Nandan Jha, the then Secretary of the college signed the document.
                    </p>
                    <p>
                        In April 1965, the then Chief Minister of Bihar Pt. Binodanand Jha, laid the foundation stone of a huge building on the piece of land known as Paliram Garden where the present campus of the college is located. On 5th August 1972, the college became the nucleus of post-Graduate teaching in Arts, Science and Commerce subjects as the long-cherished demand of the people of Mithila turned into a reality with the creation of Mithila University at Darbhanga. Finally in 1974, the composite C.M. College was split up into two colleges, C.M. College (Arts + Commerce) and C.M. Science College.
                    </p>
                    <p>
                        The entire campus of C. M. College is divided by river Bagmati into two parts. The eastern part houses the main building of the college along with the various departments, separate Common rooms for boys and girls, N.C.C. and N.S.S. office/cells, Library, B.C.A. Centre, The IGNOU office, the Principal's Chamber, the Administrative Block, the PNB branch, the post-office and the swimming pool. The College Hostel, Principal's Residence, Teachers' Quarters, a Women's Hostel (under construction with the U.G.C. Grant.) and sports ground are situated on the Western Part. Both parts are linked by a bridge in the north side.
                    </p>
                    <p>
                        The College imparts education from intermediate to post-graduation in most of the subjects of Arts and Commerce. Every department has its own staff room. A prized possession of the college is the Auditorium cum Examination Hall with the capacity to accommodate 2500 persons which is named in the memory of the two alumni of this college, Late Karpoori Thakur and Lalit Narayan Mishra as Karpoori Lalit Bhawan (K.L. Bhawan). The library of the college has a collection of over one lakh books with a spacious and well-furnished reading room.
                    </p>
                    <p>
                        The College is now entering its eighty fourth year since its inception. It has been accredited with B++ by NAAC in 2017. It is running a U.G.C. Sponsored Remedial Coaching Programme for SC/ST and economically poor students. The IGNOU centre of the college with a current strength of 1500 students has been functioning full-fledged since 1997. Bachelor of Computer Applications (BCA) course has been introduced with new regulations from the academic session 2015-16. The college also imparts Vocational Education (sponsored by the University) in six vocational courses such as Creative Writing and Translation, Library and Information Science, Journalism, E-Commerce, Foreign Trade and Hospitality and Catering Management. Of late, the College has become a member of INFLIBNET.
                    </p>
                    <p>
                        The college is actively involved in and committed to the all-round and holistic development of the students. Student’s performance in academic fields and administrative services have brought laurels for the college. Sustained measures have been taken to motivate students to actively join and participate in N.C.C. and N.S.S. activities besides sports and other extracurricular activities. Our sports men and sports women have participated in Inter and Intra University Meets. Adequate sports facilities are also provided to all aspiring students who have not sought admission through the sports quota. The college has excellent infrastructure for various games like Lawn Tennis, Basketball, Football, Volleyball, Cricket, Judo, Kabaddi, Athletics and Table-Tennis. Preference in admission is given to the candidates belonging to the above listed games. The College Sports Committee looks after all activities concerning sports. The college is progressing under the dynamic leadership of the present principal Dr Anil Kr Mandal.
                    </p>
                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
