@extends('admin.includes.layout', ['breadcrumb_title' => 'AQAR Session'])
@section('title', 'AQAR')
@section('main-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">{{ isset($editevent) ? 'Update' : 'Add' }} Sessions</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{ isset($editevent) ? route('admin.event.update', $editevent->id) : route('admin.event.store') }}" method="POST" enctype="multipart/form-data">
                            @if (isset($editevent))
                                @method('patch')
                            @endif
                            @csrf
                            <div class="row gy-4">
                                <div class="col-xxl-3 col-md-4">
                                    <label for="event" class="form-label">Session Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="event" name="name" value="{{ isset($editevent) ? $editevent->name : '' }}" placeholder="Event Name">

                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-4">
                                    <label for="event" class="form-label">Session Select</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected value="">Select Session</option>
                                        <option value="2015-2016">2015-2016</option>
                                        <option value="2016-2017">2016-2017</option>
                                        <option value="2017-2018">2017-2018</option>
                                        <option value="2018-2019">2018-2019</option>
                                        <option value="2019-2020">2019-2020</option>
                                        <option value="2020-2021">2020-2021</option>
                                        <option value="2021-2022">2021-2022</option>
                                        
                                    </select>
                                </div>
                                <div class="col-xxl-3 col-md-4">
                                    <label for="gallery" class="form-label">Session Thumbnail</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="gallery" name="file" >
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-6">
                                    <button class="btn btn-primary" type="submit">{{ isset($editevent) ? 'Update' : 'Submit' }}</button>
                                </div>
                                <!--end col-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Manage Sessions</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <table class="table table-nowrap container">
                        <thead>
                            <tr>
                                <th scope="col">Sr.No.</th>
                                <th scope="col">Session Name</th>
                                <th scope="col">Thumbnail</th>
                                <th scope="col">Created at</th>
                                @canany(['event_edit', 'event_delete'])
                                <th scope="col">Action</th>
                                @endcanany
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('script-area')
@endsection
