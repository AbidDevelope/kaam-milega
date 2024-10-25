@extends('layouts.admin')
@section('title', 'Add '.$label)
@section('right-btn')
<a href="{{ url($base_url) }}" type="button" class="float-right btn btn-primary">View {{ $label }}</a>
@endsection
@push('style')
@endpush
@push('scripts')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
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
                    <label for="exam_notes_descriptions">Notes Descriptions</label>
                    <textarea class="form-control @error('exam_notes_descriptions') is-invalid @enderror" id="editor"
                    name="exam_notes_descriptions" placeholder="Enter exam_notes_descriptions">
                    {{ old('exam_notes_descriptions') }}</textarea>
                    @error('exam_notes_descriptions')
                    <div class="text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="help_descriptions">Help Descriptions</label>
                    <textarea class="form-control @error('help_descriptions') is-invalid @enderror" id="editor1"
                    name="help_descriptions" placeholder="Enter help_descriptions">
                    {{ old('help_descriptions') }}</textarea>
                    @error('help_descriptions')
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