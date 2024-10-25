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
          <label for="image">Job Seeker Banner</label>
          <input type="file" name="image" class="form-control-file" id="image" aria-describedby="fileHelp">
          @error('image')
          <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="form-group">
          <label for="image">Recruiter Banner</label>
          <input type="file" name="rec_image" class="form-control-file" id="rec_image" aria-describedby="fileHelp">
          @error('rec_image')
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