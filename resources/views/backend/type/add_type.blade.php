@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('all.type') }}">Property Type All</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Add Type</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Update Admin Profile</h6>
                            <hr>
                            <form method="POST" action="{{ route('store.type') }}" class="forms-sample" enctype="multipart/form-data">
                              @csrf
                                <div class="mb-3">
                                    <label for="type_name" class="form-label">Type Name</label>
                                    <input type="text" name="type_name" class="form-control @error('type_name') is-invalid @enderror" placeholder="Input Type Name">
                                    @error('type_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="type_icon" class="form-label">Type icon</label>
                                    <input type="text" name="type_icon" icon="type_icon" class="form-control @error('type_icon') is-invalid @enderror" placeholder="Input Type icon">
                                    @error('type_icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-inverse-primary">Simpan</button>
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