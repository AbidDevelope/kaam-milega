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
          <label for="name">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror"
          value="{{ old('name') }}" id="name" name="name"
          placeholder="Enter name  ">
          @error('name')
          <div class="text-danger" role="alert">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="ratings">Ratings</label>
          <input type="text" class="form-control @error('ratings') is-invalid @enderror"
          value="{{ old('ratings') }}" id="ratings" name="ratings"
          placeholder="Enter ratings here  ">
          @error('ratings')
          <div class="text-danger" role="alert">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="comment">Comment</label>
          <textarea class="form-control @error('comment') is-invalid @enderror" id="editor"
          name="comment" placeholder="Enter comment">
          {{ old('comment') }}</textarea>
          @error('comment')
          <div class="text-danger" role="alert">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="logo">Logo</label>
          <input type="file" name="logo" class="form-control-file" id="logo" aria-describedby="fileHelp">
          @error('logo')
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