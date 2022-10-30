@extends('home.includes.layout', ['title' => 'Examination & Assesments'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Examination & Assesments">
                <span>Examination & Assesments</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.exam_assesment', ['active' => 1])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h2 class="no-margin-top has-divider text-highlight">Examination</h2>
                    <p>Kepping up with the changing times and trend of education National P.G. College has done away with
                        the traditional sytem of examination.</p>
                    <p>A semester-based examination system has been initiated throughout all the courses in the college. The
                        semester system is a very proactive system as it engages both the faculty and the students
                        throughout the year in academic activity and also reduces examination burden.</p>
                    <p>A semester system divides the academic year into two terms, roughly 22–24 weeks each.</p>
                    <p>The semester end examinations shall ordinarily be conducted on November-December
                        and April-May. The maximum marks for each theory and practical course (including the project work
                        and Viva Voce examination) shall be 100 with the following breakup:</p>
                    <div class="col-md-6">
                        <h3 class="has-divider text-highlight">For Theory Subjects</h3>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Semester End Examination</td>
                                        <td>70 Marks</td>
                                    </tr>
                                    <tr>
                                        <td>Internal Assessment (Written Test, Attendance, Behavioural Conduct)</td>
                                        <td>30 Marks (20 Marks + 5 Marks + 5 Marks)</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--//table-->
                        </div>
                        <!--//table-responsive-->
                    </div>
                    <div class="col-md-6">
                        <h3 class="has-divider text-highlight">For Practical Subjects</h3>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Semester End Examination</td>
                                        <td>70 Marks</td>
                                    </tr>
                                    <tr>
                                        <td>Internal Assessment (Internal Practical, Viva-Voce, Practical File)</td>
                                        <td>30 Marks (20 Marks + 5 Marks + 5 Marks)</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--//table-->
                        </div>
                        <!--//table-responsive-->
                    </div>
                    <h2 class="no-margin-top has-divider text-highlight">Examination Under CBCS</h2>
                    <p>Evaluation of student performance of each paper has two components (a) Internal Continuous
                        Assessment, and (b) Semester End Examination, which are held at the end of Semester / Academic Year.
                    </p>
                    <p>The level of student academic performance as the aggregate of continuous evaluation and semester end
                        examination is reflected by letter grades on a ten point scale according to the connotation given
                        below which is fully in consonance with the UGC norms.</p>
                    <table>
                        <tr>
                            <td>
                                <div class="col-md-6">
                                    <h4 class="has-divider text-highlight" align="center">Conversion Table for Grade Point
                                        Average and Grades</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Marks</th>
                                                    <th>Grade Point Average</th>
                                                    <th>Letter Grade</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>96 - 100</td>
                                                    <td>10</td>
                                                    <td>O</td>
                                                </tr>
                                                <tr>
                                                    <td>86 – 95</td>
                                                    <td>9</td>
                                                    <td>A+</td>
                                                </tr>
                                                <tr>
                                                    <td>76 – 85</td>
                                                    <td>8</td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>
                                                    <td>66 – 75</td>
                                                    <td>7</td>
                                                    <td>B+</td>
                                                </tr>
                                                <tr>
                                                    <td>56 – 65</td>
                                                    <td>6</td>
                                                    <td>B</td>
                                                </tr>
                                                <tr>
                                                    <td>46 – 55</td>
                                                    <td>5</td>
                                                    <td>C</td>
                                                </tr>
                                                <tr>
                                                    <td>36 – 45</td>
                                                    <td>4</td>
                                                    <td>D</td>
                                                </tr>
                                                <tr>
                                                    <td>26 – 35</td>
                                                    <td>3</td>
                                                    <td>F</td>
                                                </tr>
                                                <tr>
                                                    <td>16 – 25</td>
                                                    <td>2</td>
                                                    <td>F</td>
                                                </tr>
                                                <tr>
                                                    <td>6 – 15</td>
                                                    <td>1</td>
                                                    <td>F</td>
                                                </tr>
                                                <tr>
                                                    <td>0 – 5</td>
                                                    <td>0</td>
                                                    <td>F</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--//table-->
                                    </div>
                                    <!--//table-responsive-->
                                </div>
                                <div class="col-md-6">
                                    <h4 class="has-divider text-highlight" align="center">Conversion Table for SGPA / CGPA /
                                        FGPA <br />into Grade</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>SGPA / CGPA / FGPA</th>
                                                    <th>Letter Grade</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>9.6 - 10</td>
                                                    <td>O</td>
                                                </tr>
                                                <tr>
                                                    <td>8.6 – 9.5</td>
                                                    <td>A+</td>
                                                </tr>
                                                <tr>
                                                    <td>7.6 – 8.5</td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>
                                                    <td>6.6 – 7.5</td>
                                                    <td>B+</td>
                                                </tr>
                                                <tr>
                                                    <td>5.6 – 6.5</td>
                                                    <td>B</td>
                                                </tr>
                                                <tr>
                                                    <td>4.6 – 5.5</td>
                                                    <td>C</td>
                                                </tr>
                                                <tr>
                                                    <td>3.6 – 4.5</td>
                                                    <td>D</td>
                                                </tr>
                                                <tr>
                                                    <td>0 – 3.5</td>
                                                    <td>F</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--//table-->
                                    </div>
                                    <!--//table-responsive-->
                                </div>
                            </td>
                        </tr>
                    </table>
                    <h4>SEMESTER GRADE POINT AVERAGE (SGPA)</h4>
                    <p>The performance of the student in the semester is indicated as "Semester Grade Point Average (SGPA)"
                        with letter grade at the end of every semester. SGPA is the weighted average of grade points of all
                        letter grades secured by a student for all the papers in the semester. The Formula for computing
                        SGPA is as under</p>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="assets/images/misc/SGPAFormula.png" alt="SGPA Formula" />
                            </td>
                            <td>&nbsp;</td>
                            <td><span>Where C1,C2,C3,… denote credits associated with the papers taken by the students and
                                    G1,G2,G3,… are Grade Points of the letter grades awarded in the respective papers.
                                </span>
                            </td>
                        </tr>
                    </table>
                    <p>&nbsp;</p>
                    <h4>CUMULATIVE GRADE POINT AVERAGE (SGPA)</h4>
                    <p>The CGPA is used to describe overall performance in all papers in letter grades which a student has
                        obtained. It is weighted average of grade points obtained by him/her in all the previous semesters
                        including the current one.</p>
                    <table width="100%">
                        <tr>
                            <td>
                                <img class="img-responsive" src="assets/images/misc/CGPAFormula.png" alt="SGPA Formula" />
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
