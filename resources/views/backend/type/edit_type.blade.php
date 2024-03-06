@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('all.type') }}">Property Type All</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Edit Type</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Edit Property Type</h6>
                            <hr>
                            <form method="POST" action="{{ route('update.type') }}" class="forms-sample" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="id" value="{{ $types->id }}">
                                <div class="mb-3">
                                    <label for="type_name" class="form-label">Type Name</label>
                                    <input type="text" name="type_name" class="form-control @error('type_name') is-invalid @enderror" value="{{ $types->type_name }}">
                                    @error('type_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="type_icon" class="form-label">Type icon</label>
                                    <input type="text" name="type_icon" icon="type_icon" class="form-control @error('type_icon') is-invalid @enderror" value="{{ $types->type_icon }}">
                                    @error('type_icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-inverse-primary">Edit Data</button>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>

</div>
@endsection