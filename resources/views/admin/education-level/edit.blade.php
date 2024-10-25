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
      <div class="alert alert-danger">Failed !</div>
      @endif
      <form role="form" method="post" action="{{ url($base_url.'/'.$id) }}"  enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="card-body">
         
          <div class="form-group">
            <label for="name">Education Level Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $name }}" id="name" name="name" placeholder="Enter name">
            @error('name')
            <div class="text-danger"  role="alert">{{ $message }}</div>
            @enderror
          </div>
          <div>
                    <img src="{{ asset('public/uploads/'.$image) }}" class="imgThumb">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Icon</label>
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