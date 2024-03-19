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
                            <form method="POST" id="myForm" action="{{ route('update.amenitie') }}" class="forms-sample" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="id" value="{{ $amenities->id }}">
                                <div class="mb-3">
                                    <label for="amenitis_name" class="form-label">Type Name</label>
                                    <input type="text" name="amenitis_name" class="form-control @error('amenitis_name') is-invalid @enderror" value="{{ $amenities->amenitis_name }}">
                                    {{-- @error('type_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror --}}
                                </div>
                                <button type="submit" class="btn btn-inverse-primary">Update Data</button>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                amenitis_name: {
                    require : true,
                },
            },
            messages: {
                amenitis_name: {
                    require: 'Please Enter Amenities Name'
                },
            },
            errorElement: 'span',
            errorPlacement: function(error,element){
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>

@endsection