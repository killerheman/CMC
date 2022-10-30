@extends('home.includes.layout', ['title' => 'Certification Courses'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Courses">
                <span>Courses</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.course', ['active' => 4])

                <div class="table-responsive">
                    <h3 class="heading-title pull-left">Certificate Courses</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Course Name</th>
                                <th>Duration</th>
                                <th>Entry Qualification </th>
                                <th>Medium of instruction</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            <tr>
                                <td>1</td>
                                <td>Certificate Course in Forensic Science</td>
                                <td>6 Months</td>
                                <td>12<sup>th</sup></td>
                                <td>English/Hindi</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Certificate Course in Psychological Counseling</td>
                                <td>6 Months</td>
                                <td>12<sup>th</sup></td>
                                <td>English/Hindi</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Effective Communication in English</td>
                                <td>6 Months</td>
                                <td>12<sup>th</sup></td>
                                <td>English/Hindi</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Certificate Course in Computer Science</td>
                                <td>6 Months</td>
                                <td>12<sup>th</sup></td>
                                <td>English/Hindi</td>
                            </tr>


                        </tbody> --}}
                    </table>
                    <!--//table-->
                </div>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
