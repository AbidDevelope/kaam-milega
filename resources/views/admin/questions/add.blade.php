@extends('layouts.admin')
@section('title', 'Add '.$label)
@section('right-btn')
<a href="{{ url($base_url) }}" type="button" class="float-right btn btn-primary">View {{$label}}</a>
@endsection
@push('style')
@endpush
@push('scripts')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
$(document).on('click', '.addmore', function (ev) {
var $clone = $(this).parent().parent().clone(true);
var count = $(".copy").length + 1;
var $newbuttons = `
<div id="main-container" class="copy">
  <hr style="border-top-width: 5px;">
  <div class="form-group">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="image"> Option </label>
          <input type="text" name="options[${count}][name]" data-cid="1" class="form-control" id="link" aria-describedby="linkHelp">
        </div>
      </div>
      
    </div>
    <div class="col-md-4 btn-group tn-buttons">
      <button type="button" class="btn btn-info btn-sm addmore"><i class="fa fa-plus"></i>Add More File</button>
      <button type="button" class="btn btn-danger btn-sm removemore"><i class="fa fa-remove"></i>Remove</button>
    </div>
  </div>`;
  $('#packagingappendhere').append($newbuttons);
  });
  $(document).on('click', '.removemore', function () {
  $(this).parent().parent().remove();
  });
  </script>
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
      <div class="alert alert-danger">{{$errors}}Failed !</div>
      @endif
      @if (session()->has('error'))
      <div class="alert alert-danger">{{session('error')}} !</div>
      @endif
      <form role="form" method="post" action="{{ url($base_url) }}"  enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="card-body">
          <div id="main-container">
            
            <div class="form-group">
              <label for="module_id">Module Name</label>
              <select name="module_id"  class="  form-control" id="module_id" placeholder="Select Module ">
                <option value="">--- Select Module ---</option>
                @foreach ($course as $key=> $value)
                <option value="{{ $value->id }}" {{(@in_array($value->id,old('module_id'))) ? 'selected':''}}>{{++$key.' . '. $value->module_name }}</option>
                @endforeach
              </select>
              @error('module_id')
              <div class="text-danger"  role="alert">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="module_name">Question</label>
              <input type="text" class="form-control @error('questions') is-invalid @enderror" value="{{ old('questions') }}" id="questions" name="questions" placeholder="Enter questions ">
              @error('questions')
              <div class="text-danger"  role="alert">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group" id="main-container">
              <label>Question Options</label>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="image">Options</label>
                    <input type="text" name="options[0][name]" data-cid="1"
                    class="form-control" id="name" aria-describedby="linkHelp">
                  </div>
                </div>
                
              </div>
              @error('options')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="col-md-4 btn-group tn-buttons">
              <button type="button" class="btn btn-info btn-sm addmore"><i class="fa fa-plus"></i>Add More
              File</button>
              <button type="button" class="btn btn-danger btn-sm removemore"><i
              class="fa fa-remove"></i>Remove</button>
            </div>
            <div id="packagingappendhere">
            </div>
          </div>
          
         <div class="form-group">
              <label for="answer">Answer</label>
              <input type="text" class="form-control @error('answer') is-invalid @enderror" value="{{ old('answer') }}" id="answer" name="answer" placeholder="Enter answer ">
              @error('answer')
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