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
    <div class="alert alert-danger">{{$errors}}Failed !</div>
    @endif
    @if (session()->has('error'))
    <div class="alert alert-danger">{{session('error')}} !</div>
    @endif
    <form role="form" method="post" action="{{ url($base_url) }}"  enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="card-body">
        <div class="form-group">
          <label for="sel1">Faq For</label>
          <select name="faq_for" class="form-control" id="faq_for">
            <option value="" >--- Select Type ---</option>
            <option value="1"> Job Seeker </option>
            <option value="2" > recruiter </option>
             
          </select>
          @error('faq_for')
          <div class="text-danger"  role="alert">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" id="title" name="title" placeholder="Enter title">
          @error('title')
          <div class="text-danger"  role="alert">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="descriptions">Descriptions</label>
          <textarea class="form-control @error('descriptions') is-invalid @enderror" id="editor"
          name="descriptions" placeholder="Enter descriptions">
          {{ old('descriptions') }}</textarea>
          @error('descriptions')
          <div class="text-danger" role="alert">{{ $message }}</div>
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