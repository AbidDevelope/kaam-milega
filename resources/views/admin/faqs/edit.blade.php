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
<style>
.dragDiv{
cursor: move; /* fallback if grab cursor is unsupported */
cursor: grab;
cursor: -moz-grab;
cursor: -webkit-grab;
padding-left:65px;
position:relative;
}
.dragDiv .ui-icon{
position:absolute;
left:0px;
top:50%;
transform:translateY(-50%);
font-size:25px;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@push('scripts')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$( function() {
$( "#sortable" ).sortable();
} );
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
    <form role="form" method="post" action="{{ url($base_url.'/'.$id) }}"  enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="PUT">
      <div class="card-body">
        <div class="form-group">
          <label for="sel1">Faq For</label>
          <select name="faq_for" class="form-control" id="faq_for">
              <option value="" @if(($faq_for) == '') selected @endif>--- Select Type ---</option>
              <option value="1" @if(($faq_for) == 1) selected @endif>Job Seeker</option>
              <option value="2" @if(($faq_for) == 2) selected @endif>Recruiter</option>
          </select>
          @error('faq_for')
          <div class="text-danger" role="alert">{{ $message }}</div>
          @enderror
      </div>
        <div class="form-group">
          <label for="title">  Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ $title }}" id="title" name="title" placeholder="Enter title">
          @error('title')
          <div class="text-danger"  role="alert">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="descriptions">  Description</label>
          <textarea  class="form-control @error('descriptions') is-invalid @enderror" value="" id="editor" name="descriptions" placeholder="Enter descriptions">{{ $descriptions }}</textarea>
          @error('descriptions')
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