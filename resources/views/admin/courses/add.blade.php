@extends('layouts.admin')
@section('title', 'Add '.$label)
@section('right-btn')
<a href="{{ url($base_url) }}" type="button" class="float-right btn btn-primary">View {{$label}}</a>
@endsection
@push('style')
@endpush
@push('scripts')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'editor' ,{
filebrowserBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
filebrowserUploadUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
filebrowserImageBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
});
CKEDITOR.replace( 'editor1' ,{
filebrowserBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor1=ckeditor&fldr=',
filebrowserUploadUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor1=ckeditor&fldr=',
filebrowserImageBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=1&editor1=ckeditor&fldr='
});

</script>
<script type="text/javascript">
  $(document).ready(function() {
$('.js-example-basic-multiple').select2();
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
            <label for="module_name">Module Name</label>
            <input type="text" class="form-control @error('module_name') is-invalid @enderror" value="{{ old('module_name') }}" id="module_name" name="module_name" placeholder="Enter module_name ">
            @error('module_name')
            <div class="text-danger"  role="alert">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="professor_id">Sub Course Name</label>
            <select name="professor_id[]"  class="js-example-basic-multiple form-control" id="professor_id" multiple="multiple" placeholder="Select sub_course ">
                <option value="">--- Select Course ---</option>
                @foreach ($sub_course as $value)
                <option value="{{ $value->id }}" {{(@in_array($value->id,old('professor_id'))) ? 'selected':''}}>{{ $value->module_name }}</option>
                @endforeach
              </select>
            @error('professor_id')
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