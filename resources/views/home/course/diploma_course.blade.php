@extends('home.includes.layout', ['title' => 'Diploma Courses'])

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
                @include('home.sidebar.course', ['active' => 3])

                <div class="table-responsive">
                    <h3 class="heading-title pull-left">Diploma Courses</h3>
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
                                <td>Advanced Diploma in Analytical Techniques & Instrumental Analysis</td>
                                <td>1 Year</td>
                                <td>12<sup>th</sup></td>
                                <td>English/Hindi</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Advanced Diploma in Computer Application</td>
                                <td>1 Year</td>
                                <td>12<sup>th</sup></td>
                                <td>English</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Office Automation &amp; E-Governance under Community College</td>
                                <td>1 Year</td>
                                <td>12<sup>th </sup></td>
                                <td>English</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Banking &amp; Finance under Community College</td>
                                <td>1 Year</td>
                                <td>12<sup>th </sup></td>
                                <td>English</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Post Graduation Diploma in Retail Management</td>
                                <td>1 Year</td>
                                <td>Graduation</td>
                                <td>English/Hindi</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Post Graduation Diploma in Remote Sensing & GIS</td>
                                <td>1 Year</td>
                                <td>Graduation</td>
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
