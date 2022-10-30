@extends('home.includes.layout', ['title' => 'Under-Graduate Courses'])

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
                @include('home.sidebar.course', ['active' => 1])

                <div class="table-responsive">
                    <h3 class="heading-title pull-left">Under-Graduate Courses</h3>
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
                        <tbody>
                            {{-- <tr>
                                <td>1</td>
                                <td>B.A.</td>
                                <td>3 Years</td>
                                <td>12th</td>
                                <td>Hindi/English</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>B.Com.</td>
                                <td>3 Years</td>
                                <td>12th</td>
                                <td>Hindi/English</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>B.Sc.</td>
                                <td>3 Years</td>
                                <td>12th</td>
                                <td>Hindi/English</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>B.B.A.</td>
                                <td>3 Years</td>
                                <td>12th</td>
                                <td>English</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>B.B.A.(MS)</td>
                                <td>3 Years</td>
                                <td>12th</td>
                                <td>English</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>B.C.A.</td>
                                <td>3 Years</td>
                                <td>12th</td>
                                <td>English</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>B.Com.(H)</td>
                                <td>3 Years</td>
                                <td>12th</td>
                                <td>English</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>B.Voc.(Software Development & E-Governance)</td>
                                <td>3 Years</td>
                                <td>12th</td>
                                <td>English</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>B.Voc.(Banking & Finance)</td>
                                <td>3 Years</td>
                                <td>12th</td>
                                <td>English</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>B.A.J.M.C.</td>
                                <td>3 Years</td>
                                <td>12th</td>
                                <td>English / Hindi</td>
                            </tr> --}}
                        </tbody>
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
