@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('all.amenitie') }}">Amenitie</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Add Amenitie</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Add Amenities</h6>
                            <hr>
                            <form method="POST" action="{{ route('store.amenitie') }}" class="forms-sample" id="myForm" enctype="multipart/form-data">
                              @csrf
                                <div class="form-group mb-3">
                                    <label for="amenitis_name" class="form-label">Amenities Name</label>
                                    <input type="text" name="amenitis_name" class="form-control @error('amenitis_name') is-invalid @enderror" placeholder="Input Amenities Name">
                                    {{-- @error('amenitis_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror --}}
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

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                amenitis_name: {
                    required : true,
                }, 
                
            },
            messages :{
                amenitis_name: {
                    required : 'Please Enter Amenities Name',
                }, 
                 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>
@endsection