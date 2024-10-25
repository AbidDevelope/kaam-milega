@extends('layouts.admin')



@section('title', 'Add '.$label)



@section('right-btn')

<a href="{{ url($base_url) }}" type="button" class="float-right btn btn-primary">View {{$label}}</a>

@endsection



@push('style')



@endpush



@push('scripts')

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<script>

    CKEDITOR.replace( 'editor' ,{

      filebrowserBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',

                    filebrowserUploadUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',

                    filebrowserImageBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='

                });



$(document).ready(function() {

$('select[name="brand_id"]').on('change', function(){

    var brandId = $(this).val();

    if(brandId) {

        $.ajax({

            url: "{{url('/upcoming_car_models/get/')}}/"+brandId,

            type:"GET",

            dataType:"json",

            beforeSend: function(){

                $('#loader').css("visibility", "visible");

            },



            success:function(data) {

                console.log(data);



                $('select[name="upcoming_car_id"]').empty();

                $('select[name="upcoming_car_id"]').append('<option>-- select model --</option>');



                $.each(data, function(key, value){

                    $('select[name="upcoming_car_id"]').append('<option value="'+ value['id'] +'">' + value['title'] + '</option>');



                });

            },

            complete: function(){

                $('#loader').css("visibility", "hidden");

            }

        });

    } else {

        $('select[name="upcoming_car_id"]').empty();

    }



});

});

</script>



@endpush



@section('content')

<div class="col-md-12">

    @if(Session::has('success'))

        <p class="alert alert-success">{{ Session::get('success') }}</p>

    @endif 

    <!-- general form elements -->

    <div class="card card-primary">

      <div class="card-header">

        <h3 class="card-title">{{$label}} Details</h3>

      </div>

      <!-- /.card-header -->

      <!-- form start -->

      @if ($errors->any())

        <div class="alert alert-danger">Failed !</div>

      @endif

       @if (session()->has('error'))

        <div class="alert alert-danger">{{session('error')}} !</div>

      @endif

      <form role="form" method="post" action="{{ url($base_url) }}"  enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="card-body">

            <div class="form-group">

                <label for="name">Name</label>

                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="name" placeholder="Enter Name">

                @error('name')

                    <div class="text-danger"  role="alert">{{ $message }}</div>

                @enderror

            </div>

            <div class="form-group">

                <label for="desgination">Desgination</label>

                <input type="text" class="form-control @error('desgination') is-invalid @enderror" value="{{ old('desgination') }}" id="desgination" name="desgination" placeholder="Enter Desgination">

                @error('desgination')

                    <div class="text-danger"  role="alert">{{ $message }}</div>

                @enderror

            </div>
            <div class="form-group">

                <label for="company">Company</label>

                <input type="text" class="form-control @error('company') is-invalid @enderror" value="{{ old('company') }}" id="company" name="company" placeholder="Enter company">

                @error('company')

                    <div class="text-danger"  role="alert">{{ $message }}</div>

                @enderror

            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror"  id="editor" name="description" placeholder="Enter description">
                {{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger"  role="alert">{{ $message }}</div>
                @enderror
            </div>
           
        </div>

        <!-- /.card-body -->

        <div class="card-footer">

          <button type="submit" class="btn btn-primary">Submit</button>

        </div>

      </form>

    </div>

    <!-- /.card -->

  </div>

@endsection

