@extends('layouts.admin')



@section('title', 'Edit '.$label)



@section('right-btn')

<a href="{{ url($base_url) }}" type="button" class="float-right btn btn-primary">View {{$label}}</a>

@endsection



@push('style')

<style>

    .imgThumb{

    width: 100%;

    height:auto;

    max-width: 100px;

    max-height: 100px;

    margin: 20px 0px;

    }

</style>

@endpush



@push('scripts')

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<script>

    CKEDITOR.replace( 'editor' ,{

      filebrowserBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',

                    filebrowserUploadUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',

                    filebrowserImageBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='

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

      <form role="form" method="post" action="{{ url($base_url.'/'.$id) }}"  enctype="multipart/form-data">

        {{ csrf_field() }}

        <input type="hidden" name="_method" value="PUT">

        <div class="card-body">

            <div class="form-group">

                <label for="name">Name</label>

                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $name }}" id="name" name="name" placeholder="Enter Name">

                @error('name')

                    <div class="text-danger"  role="alert">{{ $message }}</div>

                @enderror

            </div>

            <div class="form-group">

                <label for="desgination">Desgination</label>

                <input type="text" class="form-control @error('desgination') is-invalid @enderror" value="{{ $desgination }}" id="desgination" name="desgination" placeholder="Enter desgination">

                @error('desgination')

                    <div class="text-danger"  role="alert">{{ $message }}</div>

                @enderror

            </div>
            <div class="form-group">

                <label for="company">Company</label>

                <input type="text" class="form-control @error('company') is-invalid @enderror" value="{{ $company }}" id="company" name="company" placeholder="Enter company">

                @error('company')

                    <div class="text-danger"  role="alert">{{ $message }}</div>

                @enderror

            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea  class="form-control @error('description') is-invalid @enderror" value="" id="editor" name="description" placeholder="Enter description">{{ $description }}</textarea>
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

