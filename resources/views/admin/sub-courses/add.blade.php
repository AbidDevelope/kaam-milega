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
      <div class="col-md-6">
        <div class="form-group">
          <label for="image"> Name</label>
          <input type="text" name="professor_info[${count}][name]" data-cid="1" class="form-control" id="link" aria-describedby="linkHelp">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="image"> Company</label>
          <input type="text" name="professor_info[${count}][company]" data-cid="1" class="form-control" id="image" aria-describedby="fileHelp">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label for="image"> Desgination</label>
          <input type="text" name="professor_info[${count}][desgination]" data-cid="1" class="form-control" id="image" aria-describedby="fileHelp">
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
  <script type="text/javascript">
  $(document).on('click', '.addmore1', function (ev) {
  var $clone = $(this).parent().parent().clone(true);
  var count = $(".copy").length + 1;
  var $newbuttons = `
  <div id="main-container" class="copy">
    <hr style="border-top-width: 5px;">
    <div class="form-group">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="image"> Link</label>
            <input type="text" name="multiple_video_link[${count}][link]" data-cid="1" class="form-control" id="link" aria-describedby="linkHelp">
          </div>
        </div>
        
      </div>
      <div class="col-md-4 btn-group tn-buttons">
        <button type="button" class="btn btn-info btn-sm addmore1"><i class="fa fa-plus"></i>Add More File</button>
        <button type="button" class="btn btn-danger btn-sm removemore1"><i class="fa fa-remove"></i>Remove</button>
      </div>
    </div>`;
    $('#packagingappendhere1').append($newbuttons);
    });
    $(document).on('click', '.removemore1', function () {
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
                <label for="module_name">Module Name</label>
                <input type="text" class="form-control @error('module_name') is-invalid @enderror" value="{{ old('module_name') }}" id="module_name" name="module_name" placeholder="Enter module_name ">
                @error('module_name')
                <div class="text-danger"  role="alert">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group" id="main-container">
                <label>Developing Expert/Institution</label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="image"> Name</label>
                      <input type="text" name="professor_info[0][name]" data-cid="1"
                      class="form-control" id="title" aria-describedby="linkHelp">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="image"> Company</label>
                      <input type="text" name="professor_info[0][company]" data-cid="1"
                      class="form-control" id="title" aria-describedby="linkHelp">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="image"> Desgination</label>
                      <input type="text" name="professor_info[0][desgination]" data-cid="1"
                      class="form-control" id="title" aria-describedby="linkHelp">
                    </div>
                  </div>
                </div>
                @error('professor_info')
                <p class="text-danger">{{ $message }}</p>
                @enderror
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
                <label for="presentaion_pdf">Presentation Pdf</label>
                <input type="file" accept="application/pdf" class="form-control @error('presentaion_pdf') is-invalid @enderror" value="{{ old('presentaion_pdf') }}" id="pdf" name="presentaion_pdf" placeholder="Enter pdf">
                @error('presentaion_pdf')
                <div class="text-danger"  role="alert">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="video_link">Video Link</label>
                <input type="url" class="form-control @error('video_link') is-invalid @enderror" value="{{ old('video_link') }}" id="video_link" name="video_link" placeholder="Enter video_link ">
                @error('video_link')
                <div class="text-danger"  role="alert">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="qa_video_link">QA Video Link</label>
                <input type="url" class="form-control @error('qa_video_link') is-invalid @enderror" value="{{ old('qa_video_link') }}" id="qa_video_link" name="qa_video_link" placeholder="Enter qa_video_link ">
                
              </div>
              <!-- <div class="form-group" id="main-container">
                <label>Multiple Video Link</label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="image"> Link</label>
                      <input type="text" name="multiple_video_link[0][link]" data-cid="1"
                      class="form-control" id="title" aria-describedby="linkHelp">
                    </div>
                  </div>
                </div>
                @error('multiple_video_link')
                <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="col-md-4 btn-group tn-buttons">
                <button type="button" class="btn btn-info btn-sm addmore1"><i class="fa fa-plus"></i>Add More
                File</button>
                <button type="button" class="btn btn-danger btn-sm removemore1"><i
                class="fa fa-remove"></i>Remove</button>
              </div>
              <div id="packagingappendhere1">
              </div> -->
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