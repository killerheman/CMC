@extends('home.includes.layout', ['title' => 'Post-Graduate Courses'])

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
                @include('home.sidebar.course', ['active' => 2])

                <div class="table-responsive">
                    <h3 class="heading-title pull-left">Post-Graduate Courses</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S.No.
                                </th>
                                <th>Course Name
                                </th>
                                <th>Duration
                                </th>
                                <th>Entry Qualification
                                </th>
                                <th>Medium of instruction
                                </th>
                                <th>Fees
                                </th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            <tr>
                                <td>1
                                </td>
                                <td>M.A./M.Sc.(Anthropology)
                                </td>
                                <td>2 Years
                                </td>
                                <td>Graduation
                                </td>
                                <td>English/Hindi
                                </td>
                                <td>₹ 22800.00
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>M.A. (Economics)</td>
                                <td>2 Years</td>
                                <td>Graduation</td>
                                <td>English/Hindi
                                </td>
                                <td>&nbsp;</td>
                                </tr>
                            <tr>
                                <td>3</td>
                                <td>M.A. (English)&nbsp;</td>
                                <td>2 Years
                                </td>
                                <td>Graduation
                                </td>
                                <td>English</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>M.A.(Geography)
                                </td>
                                <td>2 Years
                                </td>
                                <td>Graduation
                                </td>
                                <td>English/Hindi
                                </td>
                                <td>₹ 22800.00
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>M.A. (Political Science)</td>
                                <td>2 Years</td>
                                <td>Graduation</td>
                                <td>English/Hindi
                                </td>
                                <td>&nbsp;</td>
                                </tr>
                            <tr>
                                <td>6</td>
                                <td>M.A.(Psychology)
                                </td>
                                <td>2 Years
                                </td>
                                <td>Graduation
                                </td>
                                <td>English/Hindi
                                </td>
                                <td>₹ 22800.00
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>M.Com
                                </td>
                                <td>2 Years
                                </td>
                                <td>Graduation
                                </td>
                                <td>English/Hindi
                                </td>
                                <td>₹ 25500.00
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>M.Voc.(Software & E-governance)
                                </td>
                                <td>2 Years
                                </td>
                                <td>Graduation
                                </td>
                                <td>English
                                </td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>M.Voc.(Banking ,Stock & Accounting)
                                </td>
                                <td>2 Years
                                </td>
                                <td>Graduation
                                </td>
                                <td>English
                                </td>
                                <td>-</td>
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
