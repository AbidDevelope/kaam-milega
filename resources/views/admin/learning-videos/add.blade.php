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
          <label for="title">  Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror"
          value="{{ old('title') }}" id="title" name="title"
          placeholder="Enter title  ">
          @error('title')
          <div class="text-danger" role="alert">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="durations">Durations</label>
          <input type="text" class="form-control @error('durations') is-invalid @enderror"
          value="{{ old('durations') }}" id="durations" name="durations"
          placeholder="Enter durations  ">
          @error('durations')
          <div class="text-danger" role="alert">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="video_link">Video Link</label>
          <input type="url" class="form-control @error('video_link') is-invalid @enderror"
          value="{{ old('video_link') }}" id="video_link" name="video_link"
          placeholder="Enter video_link  ">
          @error('video_link')
          <div class="text-danger" role="alert">{{ $message }}</div>
          @enderror
        </div>
        
        <div class="form-group">
          <label for="image">Thumbnail Image</label>
          <input type="file" name="image" class="form-control-file" id="image" aria-describedby="fileHelp">
          @error('image')
          <p class="text-danger">{{ $message }}</p>
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