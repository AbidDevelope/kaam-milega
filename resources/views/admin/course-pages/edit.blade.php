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
<script type="text/javascript">
$(document).on('click', '.addmore', function (ev) {
var $clone = $(this).parent().parent().clone(true);
var count = $(".copy").length + 1;
var $newbuttons =`
<div id="main-container" class="copy">
  <hr style="border-top-width: 5px;">
  <div class="form-group">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="image"> Title</label>
          <input type="text" name="assesment_certification[${count}][title]" data-cid="1" class="form-control" id="link" aria-describedby="linkHelp">
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
  
  function removeFile(id,_this){
  $("#"+id).remove();
  $(_this).remove();
  }
  </script>
  <script>
  CKEDITOR.replace( 'editor' ,{
  filebrowserBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserUploadUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserImageBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
  });
  CKEDITOR.replace( 'editor1' ,{
  filebrowserBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserUploadUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserImageBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
  });
  CKEDITOR.replace( 'editor2' ,{
  filebrowserBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserUploadUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserImageBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
  });
  CKEDITOR.replace( 'editor3' ,{
  filebrowserBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserUploadUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserImageBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
  });
  CKEDITOR.replace( 'editor4' ,{
  filebrowserBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserUploadUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserImageBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
  });
  CKEDITOR.replace( 'editor5' ,{
  filebrowserBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserUploadUrl : '{{url('/')}}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
  filebrowserImageBrowseUrl : '{{url('/')}}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
  });
  CKEDITOR.replace( 'editor6' ,{
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
            <label for="course_details">Course Details</label>
            <textarea  class="form-control @error('course_details') is-invalid @enderror" value="" id="editor" name="course_details" placeholder="Enter course_details">{{ $course_details }}</textarea>
            @error('course_details')
            <div class="text-danger"  role="alert">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <img src="{{ asset('public/uploads/'.$key_features_image) }}" class="imgThumb">
          </div>
          <div class="form-group">
            <label for="name">Key Features Of The Course</label>
            <input type="file" class="form-control @error('key_features_image') is-invalid @enderror" value="{{ $key_features_image }}" id="key_features_image" name="key_features_image" placeholder="Enter key_features_image">
            @error('key_features_image')
            <div class="text-danger"  role="alert">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="img-box" id="sortable">
            <?php $gall_img = ($assesment_certification);    ?>
            @if(!empty($gall_img))
            @foreach($gall_img as $key=> $img)
            <div class="bg-light p-4 mb-2 ui-state-default dragDiv" id="remove_{{$key+1}}" >
              <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
              <div class="row align-items-center copy">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="image">Title</label>
                    <input type="text" name="assesment_certification[{{$key}}][title]" value="{{$img['title']}}" data-cid="1" class="form-control" id="link" aria-describedby="linkHelp">
                  </div>
                </div>
                
                <div class="col-md-4 tn-buttons">
                  <button type="button" onclick="removeFile('remove_{{$key+1}}',this)" class="btn btn-danger btn-sm">
                  <i class="fa fa-remove"></i>Remove </button>
                </div>
              </div>
            </div>
            @endforeach
            <div class="col-md-4 btn-group tn-buttons">
              <button type="button" class="btn btn-info btn-sm addmore">
              <i class="fa fa-plus"></i> Add More File </button>
            </div>
            @else
            <div id="main-container">
              <div class="row copy">
                 
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="image"> Title</label>
                    <input type="text" name="assesment_certification[0][title]" data-cid="1" class="form-control" id="link" aria-describedby="linkHelp">
                  </div>
                </div>
              </div>
              <div class="col-md-4 btn-group tn-buttons">
                <button type="button" class="btn btn-info btn-sm addmore">
                <i class="fa fa-plus"></i> Add More File </button>
                <button type="button" class="btn btn-danger btn-sm removemore">
                <i class="fa fa-remove"></i>Remove </button>
              </div>
              @endif
              <div id="packagingappendhere"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="course_background">Course Background</label>
            <textarea  class="form-control @error('course_background') is-invalid @enderror" value="" id="editor1" name="course_background" placeholder="Enter course_background">{{ $course_background }}</textarea>
            @error('course_background')
            <div class="text-danger"  role="alert">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="first_title">First Title</label>
            <input type="text" class="form-control @error('first_title') is-invalid @enderror" value="{{ $first_title }}" id="first_title" name="first_title" placeholder="Enter first_title">
            @error('first_title')
            <div class="text-danger"  role="alert">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="first_descriptions">First Description</label>
            <textarea  class="form-control @error('first_descriptions') is-invalid @enderror" value="" id="editor2" name="first_descriptions" placeholder="Enter first_descriptions">{{ $first_descriptions }}</textarea>
            @error('first_descriptions')
            <div class="text-danger"  role="alert">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="name">Second Title</label>
            <input type="text" class="form-control @error('second_title') is-invalid @enderror" value="{{ $second_title }}" id="second_title" name="second_title" placeholder="Enter second_title">
            @error('second_title')
            <div class="text-danger"  role="alert">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="descriptions">Second Description</label>
            <textarea  class="form-control @error('second_descriptions') is-invalid @enderror" value="" id="editor3" name="second_descriptions" placeholder="Enter second_descriptions">{{ $second_descriptions }}</textarea>
            @error('second_descriptions')
            <div class="text-danger"  role="alert">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="name">Third Title</label>
            <input type="text" class="form-control @error('third_title') is-invalid @enderror" value="{{ $third_title }}" id="third_title" name="third_title" placeholder="Enter third_title">
            @error('third_title')
            <div class="text-danger"  role="alert">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="descriptions">Third Description</label>
            <textarea  class="form-control @error('third_descriptions') is-invalid @enderror" value="" id="editor4" name="third_descriptions" placeholder="Enter third_descriptions">{{ $third_descriptions }}</textarea>
            @error('third_descriptions')
            <div class="text-danger"  role="alert">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="name">Fourth Title</label>
            <input type="text" class="form-control @error('fourth_title') is-invalid @enderror" value="{{ $fourth_title }}" id="fourth_title" name="fourth_title" placeholder="Enter fourth_title">
            @error('fourth_title')
            <div class="text-danger"  role="alert">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="descriptions">Fourth Description</label>
            <textarea  class="form-control @error('fourth_descriptions') is-invalid @enderror" value="" id="editor5" name="fourth_descriptions" placeholder="Enter fourth_descriptions">{{ $fourth_descriptions }}</textarea>
            @error('fourth_descriptions')
            <div class="text-danger"  role="alert">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="name">Fifth Title</label>
            <input type="text" class="form-control @error('fifth_title') is-invalid @enderror" value="{{ $fifth_title }}" id="fifth_title" name="fifth_title" placeholder="Enter fifth_title">
            @error('fifth_title')
            <div class="text-danger"  role="alert">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="descriptions">Fifth Description</label>
            <textarea  class="form-control @error('fifth_descriptions') is-invalid @enderror" value="" id="editor6" name="fifth_descriptions" placeholder="Enter fifth_descriptions">{{ $fifth_descriptions }}</textarea>
            @error('fifth_descriptions')
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