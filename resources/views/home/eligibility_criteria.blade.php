@extends('home.includes.layout', ['title' => 'Admission'])

@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Admission">
                <span>Admission</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.admission', ['active' => 3])

                <div class="content-wrapper col-md-10 col-sm-8">
                    <div class="page-row">
                        <h1 class="no-margin-top has-divider text-highlight">
                            Eligibility Criteria</h1>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Course</th>
                                    <th>
                                        Eligibility</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                <tr>
                                    <td>
                                        B.A.</td>
                                    <td>
                                        Passed in any discipline with minimum 45% marks in aggregate at +2
                                        level.</td>
                                </tr>
                                <tr>
                                    <td>
                                        B.Com.</td>
                                    <td>
                                        Passed in Commerce or with Maths/Economics with minimum 55% marks in
                                        aggregate
                                        at +2 level.</td>
                                </tr>
                                <tr>
                                    <td>
                                        B.Sc.</td>
                                    <td>
                                        Passed in Science with minimum 50% marks in aggregate at +2 level.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        B.B.A., B.B.A.-MS, BBA (T), BJMC</td>
                                    <td>
                                        10+2 Passed in any discipline with minimum 50% marks in aggregate at
                                        +2 level.</td>
                                </tr>
                                <tr>
                                    <td>
                                        B.C.A.</td>
                                    <td>
                                        10+2 Passed in any discipline with minimum 50% marks in aggregate at
                                        +2 level
                                        with mathematics/computer as one of the subjects</td>
                                </tr>
                                <tr>
                                    <td>
                                        B.Com.(Hons.)</td>
                                    <td>
                                        10+2 Passed in any discipline with minimum 60% marks in aggregate at
                                        +2 level
                                        with either Commerce, Economics or Mathematics as one of the
                                        subjects.</td>
                                </tr>
                                <tr>
                                    <td>
                                        B.Voc. (Software Development &amp; E-Governance)</td>
                                    <td>
                                        10+2 Passed in any discipline with minimum 50%</td>
                                </tr>
                                <tr>
                                    <td>
                                        B.Voc. (Banking &amp; Finance)</td>
                                    <td>
                                        10+2 Passed in any discipline with minimum 55%</td>
                                </tr>
                                <tr>
                                    <td>
                                        M.Com.</td>
                                    <td>
                                        Passed in Commerce with minimum 50% required at UG Level.</td>
                                </tr>
                                <tr>
                                    <td>
                                        M.A.</td>
                                    <td>
                                        Minimum 50% required at UG Level.</td>
                                </tr>
                                <tr>
                                    <td>
                                        M.Voc. (Banking, Stock &amp; Insurance)</td>
                                    <td>
                                        Minimum 50% required at UG Level with B.Voc.-B&amp;F OR
                                        B.Sc.(Mathematics) OR B.Com.</td>
                                </tr>
                                <tr>
                                    <td>
                                        M.Voc. (Software &amp; e-Governance)</td>
                                    <td>
                                        Minimum 50% required at UG Level with B.Voc.-SD&amp;eG OR
                                        B.sc.(Mathematics) OR
                                        B.Tech (CS/IT)</td>
                                </tr>
                            </tbody> --}}
                        </table>
                    </div>
                    <!--//page-row-->
                    <!--//page-row-->
                </div>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
