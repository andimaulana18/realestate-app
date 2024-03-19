@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Amenities All</li>
            </ol>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <a href="{{ route('add.amenitie') }}" class="btn btn-inverse-primary">Add Amenities</a>
            </div>
          </div>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Amenities All</h6>
                    <div class="table-responsive">
                    <table id="dataTableExample" class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($amenities as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->amenitis_name }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('edit.amenitie', $item->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('delete.amenitie', $item->id) }}" class="btn btn-danger" id="delete">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection