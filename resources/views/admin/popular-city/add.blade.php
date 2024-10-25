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
    <form role="form" method="post" action="{{ url($base_url) }}"  enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="card-body">
        <div class="form-group">
          <label for="state_id">State</label>
          <select class="form-control @error('state_id') is-invalid @enderror" id="title" name="state_id" >
            <option value="">Select State</option>
            @foreach($states as $state)
            <option value="{{$state->id}}">{{$state->name}}</option>
            @endforeach
          </select>
          @error('state_id')
          <div class="text-danger"  role="alert">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="fullname">City Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="fullname" name="name" placeholder="Enter name">
          @error('name')
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