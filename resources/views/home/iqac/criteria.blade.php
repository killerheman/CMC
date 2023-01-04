@extends('home.includes.layout', ['title' => 'IQAC'])
@section('headerarea')
    <style>
        a:hover,
        a:focus {
            text-decoration: none;
            outline: none;
        }

        .tab {
            font-family: 'Nunito', sans-serif;
        }

        .tab .nav-tabs {
            background-color: transparent;
            border: none;
        }

        .tab .nav-tabs li a {
            color: #222;
            background: transparent;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1px;
            text-align: center;
            text-transform: uppercase;
            padding: 15px 15px 10px;
            margin: 0;
            border: none;
            border-radius: 0;
            overflow: hidden;
            position: relative;
            z-index: 1;
            transition: all 0.3s ease 0s;
        }

        .tab .nav-tabs li:last-child a {
            margin-right: 0;
        }

        .tab .nav-tabs li a:hover,
        .tab .nav-tabs li.active a {
            color: #222;
            background: #fff;
            border: none;
        }

        .tab .nav-tabs li.active a {
            color: #f27f78;
        }

        .tab .nav-tabs li a:before,
        .tab .nav-tabs li a:after {
            content: "";
            background-color: #d1d1d1;
            height: 7px;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            transition: all 0.5s ease 0s;
        }

        .tab .nav-tabs li a:after {
            background-color: #f27f78;
            height: 100%;
            opacity: 0;
        }

        .tab .nav-tabs li.active a:before,
        .tab .nav-tabs li a:hover:before {
            height: 100%;
            opacity: 0;
        }

        .tab .nav-tabs li.active a:after,
        .tab .nav-tabs li a:hover:after {
            height: 7px;
            opacity: 1;
        }

        .tab .tab-content {
            color: #555;
            background: #fff;
            font-size: 15px;
            letter-spacing: 1px;
            line-height: 23px;
            padding: 20px;
        }

        .tab .tab-content h3 {
            color: #222;
            font-size: 22px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0 0 7px 0;
        }

        @media only screen and (max-width: 479px) {
            .tab .nav-tabs li {
                width: 100%;
            }

            .tab .nav-tabs li a {
                margin: 0 0 10px;
            }

            .tab .tab-content h3 {
                font-size: 18px;
            }
        }

        #accordion .panel {
            border: none;
            background: transparent;
            box-shadow: none;
            border-radius: 0;
            padding-left: 40px;
            margin-bottom: 10px;
        }

        #accordion .panel-heading {
            padding: 0;
        }

        #accordion .panel-title a {
            display: block;
            padding: 15px;
            background: #fff;
            font-size: 15px;
            font-weight: bold;
            color: #f27f78;
            text-transform: uppercase;
            border: 2px solid #f27f78;
            border-left: none;
            border-radius: 0 8px 8px 0;
            box-shadow: none;
            position: relative;
            transition: all 0.3s ease 0s;
        }

        #accordion .panel-title a span {
            display: block;
            width: 40px;
            height: 110%;
            line-height: 70px;
            background: #f27f78;
            font-size: 16px;
            color: #fff;
            text-align: center;
            position: absolute;
            top: -2px;
            left: -40px;
        }

        #accordion .panel-title a span:before,
        #accordion .panel-title a span:after {
            content: "";
            border-top: 20px solid #fff;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            position: absolute;
            left: 0;
        }

        #accordion .panel-title a span:before {
            top: -1px;
        }

        #accordion .panel-title a span:after {
            border-top-color: #f27f78;
            bottom: -20px;
            z-index: 1;
        }

        #accordion .panel-body {
            font-size: 14px;
            color: #808080;
            line-height: 23px;
            border-top: none;
        }

        #accordion .panel-body p {
            margin-bottom: 0;
        }
    </style>
@endsection
@section('content')
    <div class="page-wrapper">

        <header class="page-heading clearfix">
            <div class="text-effect" data-content="Criteria">
                <span>Criteria</span>
            </div>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                @include('home.sidebar.iqac', ['active' => 2])

                <article class="content-wrapper col-md-10 col-sm-8">
                    <h3 class="title">
                        Criteria</h3>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab" role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    {{-- @isset($criteria)
                                    @php $listcrit=array(); @endphp
                                    @foreach($criteria as $key1=>$ctr1)
                                    @foreach($ctr1 as $key2=>$ctr2)
                                        @php $listcrit[]=$ctr2->criteria_id; @endphp
                                    @endforeach
                                    @endforeach
                                    @endisset
                                    @for($i=1;count(array_unique($listcrit))>=$i;$i++)
                                        <li role="presentation" class="{{$i==1?'active':''}}"><a href="#Section{{$listcrit[$i]}}" aria-controls="home"
                                                role="tab" data-toggle="tab">Criteria {{$i}}</a>
                                        </li>
                                   @endfor --}}
                                    <li role="presentation" class="active"><a href="#Section1" aria-controls="profile" role="tab"
                                            data-toggle="tab">Criteria 1</a></li>
                                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab"
                                        data-toggle="tab">Criteria 2</a></li>
                                    <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab"
                                            data-toggle="tab">Criteria 3</a></li>
                                    <li role="presentation"><a href="#Section4" aria-controls="home" role="tab"
                                            data-toggle="tab">Criteria 4</a></li>
                                    <li role="presentation"><a href="#Section5" aria-controls="profile" role="tab"
                                            data-toggle="tab">Criteria 5</a></li>
                                    <li role="presentation"><a href="#Section6" aria-controls="messages" role="tab"
                                            data-toggle="tab">Criteria 6</a></li>
                                    <li role="presentation"><a href="#Section7" aria-controls="messages" role="tab"
                                            data-toggle="tab">Criteria 7</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabs">
                                    @isset($criteria)
                                    {{-- @php $cindex=1; @endphp --}}
                                    @foreach($criteria as $crit_data)
                                    @foreach($crit_data as $all_data)
                                    
                                    <div role="tabpanel" class="tab-pane fade in {{$all_data->criteria_id==1?'active':''}}" id="Section{{$all_data->criteria_id}}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel-group" id="accordion" role="tablist"
                                                    aria-multiselectable="true">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingOne">
                                                            <h4 class="panel-title">
                                                                <a role="button" data-toggle="collapse"
                                                                    data-parent="#accordion" href="#collapseOne"
                                                                    aria-expanded="true" aria-controls="collapseOne">
                                                                    <span>1</span>
                                                                    {{$all_data->name}}
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseOne" class="panel-collapse collapse in"
                                                            role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">
                                                                <p> anil </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @endforeach
                                    {{-- @php $cindex++; @endphp --}}
                                    @endforeach
                                    @endisset
                                    {{-- <div role="tabpanel" class="tab-pane fade" id="Section2">
                                        <h3>Section 2</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna
                                            a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in
                                            tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                                        <h3>Section 3</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna
                                            a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in
                                            tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!--//page-content-->
            </div>
            <!--//page-row-->
        </div>
        <!--//page-content-->
    </div>
@endsection
