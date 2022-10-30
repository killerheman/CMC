@extends('admin.includes.layout', ['breadcrumb_title' => 'Events'])
@section('title', 'Events')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Add Events</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{ route('admin.event.store') }}" method="POST">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-xxl-3 col-md-6">
                                    <label for="event" class="form-label">Event Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="event" name="name" placeholder="Event Name">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
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
                    <h4 class="card-title mb-0 flex-grow-1">Manage Events</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <table class="table table-nowrap container">
                        <thead>
                            <tr>
                                <th scope="col">Sr.No.</th>
                                <th scope="col">Event Name</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $data)
                                <tr>
                                    <th>{{ $loop->index + 1 }}</th>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->created_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.gallery.show', $data->id) }}" class="btn btn-warning">Add Image</i></a>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Grids in modals -->

@section('script-area')
@endsection

@endsection
