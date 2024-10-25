@extends('layouts.admin')
@section('title', 'Add '.$label)
@section('right-btn')
<a href="{{ url($base_url) }}" type="button" class="float-right btn btn-primary">View {{ $label }}</a>
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
    </script>
    <script>
        CKEDITOR.replace('editor', {
            filebrowserBrowseUrl: '{{ url('/') }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl: '{{ url('/') }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl: '{{ url('/') }}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
        });
        CKEDITOR.replace('editor1', {
            filebrowserBrowseUrl: '{{ url('/') }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl: '{{ url('/') }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl: '{{ url('/') }}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
        });
        CKEDITOR.replace('editor2', {
            filebrowserBrowseUrl: '{{ url('/') }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl: '{{ url('/') }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl: '{{ url('/') }}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
        });
        CKEDITOR.replace('editor3', {
            filebrowserBrowseUrl: '{{ url('/') }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl: '{{ url('/') }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl: '{{ url('/') }}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
        });
        CKEDITOR.replace('editor4', {
            filebrowserBrowseUrl: '{{ url('/') }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl: '{{ url('/') }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl: '{{ url('/') }}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
        });
        CKEDITOR.replace('editor5', {
            filebrowserBrowseUrl: '{{ url('/') }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl: '{{ url('/') }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl: '{{ url('/') }}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
        });
        CKEDITOR.replace('editor6', {
            filebrowserBrowseUrl: '{{ url('/') }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl: '{{ url('/') }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl: '{{ url('/') }}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
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
            <h3 class="card-title">{{ $label }} Details</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @if($errors->any())
            <div class="alert alert-danger">Failed !</div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }} !</div>
        @endif
        <form role="form" method="post" action="{{ url($base_url) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="course_details">Course Details</label>
                    <textarea class="form-control @error('course_details') is-invalid @enderror" id="editor"
                        name="course_details" placeholder="Enter course_details">
              {{ old('course_details') }}</textarea>
                    @error('course_details')
                        <div class="text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">Key Features Of The Course</label>
                    <input type="file" class="form-control @error('key_features_image') is-invalid @enderror"
                        value="{{ old('key_features_image') }}" id="key_features_image"
                        name="key_features_image" placeholder="Enter image">
                    @error('key_features_image')
                        <div class="text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div id="main-container">
                    <div class="form-group" id="main-container">
                        <label>Assessment And Certification</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image"> Title</label>
                                    <input type="text" name="assesment_certification[0][title]" data-cid="1"
                                        class="form-control" id="title" aria-describedby="linkHelp">
                                </div>
                            </div>
                        </div>
                        @error('assesment_certification')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
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
                    <label for="course_background">Course Background</label>
                    <textarea class="form-control @error('course_background') is-invalid @enderror" id="editor1"
                        name="course_background" placeholder="Enter course_background">
              {{ old('course_background') }}</textarea>
                    @error('course_background')
                        <div class="text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="first_title">First Title</label>
                    <input type="text" class="form-control @error('first_title') is-invalid @enderror"
                        value="{{ old('first_title') }}" id="first_title" name="first_title"
                        placeholder="Enter first_title  ">
                    @error('first_title')
                        <div class="text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="first_descriptions">First Description</label>
                    <textarea class="form-control @error('first_descriptions') is-invalid @enderror" id="editor2"
                        name="first_descriptions" placeholder="Enter first_descriptions">
                    {{ old('first_descriptions') }}</textarea>
                    @error('first_descriptions')
                        <div class="text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="second_title">Second Title</label>
                    <input type="text" class="form-control @error('second_title') is-invalid @enderror"
                        value="{{ old('second_title') }}" id="second_title" name="second_title"
                        placeholder="Enter second_title  ">
                    @error('second_title')
                        <div class="text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="second_descriptions">Second Description</label>
                    <textarea class="form-control @error('second_descriptions') is-invalid @enderror" id="editor3"
                        name="second_descriptions" placeholder="Enter second_descriptions">
                    {{ old('second_descriptions') }}</textarea>
                    @error('second_descriptions')
                        <div class="text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="third_title">Third Title</label>
                    <input type="text" class="form-control @error('third_title') is-invalid @enderror"
                        value="{{ old('third_title') }}" id="third_title" name="third_title"
                        placeholder="Enter third_title ">
                    @error('third_title')
                        <div class="text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="third_descriptions">Third Description</label>
                    <textarea class="form-control @error('third_descriptions') is-invalid @enderror" id="editor4"
                        name="third_descriptions" placeholder="Enter third_descriptions">
                    {{ old('third_descriptions') }}</textarea>
                    @error('third_descriptions')
                        <div class="text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fourth_title">Fourth Title</label>
                    <input type="text" class="form-control @error('fourth_title') is-invalid @enderror"
                        value="{{ old('fourth_title') }}" id="fourth_title" name="fourth_title"
                        placeholder="Enter fourth_title  ">
                    @error('fourth_title')
                        <div class="text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fourth_descriptions">Fourth Description</label>
                    <textarea class="form-control @error('fourth_descriptions') is-invalid @enderror" id="editor5"
                        name="fourth_descriptions" placeholder="Enter fourth_descriptions">
                    {{ old('fourth_descriptions') }}</textarea>
                    @error('fourth_descriptions')
                        <div class="text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fifth_title">Fifth Title</label>
                    <input type="text" class="form-control @error('fifth_title') is-invalid @enderror"
                        value="{{ old('fifth_title') }}" id="fifth_title" name="fifth_title"
                        placeholder="Enter fifth_title  ">
                    @error('fifth_title')
                        <div class="text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fifth_descriptions">Fifth  Description</label>
                    <textarea class="form-control @error('fifth_descriptions') is-invalid @enderror" id="editor6"
                        name="fifth_descriptions" placeholder="Enter fifth_descriptions">
                    {{ old('fifth_descriptions') }}</textarea>
                    @error('fifth_descriptions')
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
