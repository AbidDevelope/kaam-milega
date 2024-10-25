@extends('layouts.admin')
@section('title', 'Edit '.$label)
@section('right-btn')
<a href="{{ url($base_url) }}" type="button" class="float-right btn btn-primary">View {{ $label }}</a>
@endsection
@push('style')
<style>
.imgThumb {
width: 100%;
height: auto;
max-width: 100px;
max-height: 100px;
margin: 20px 0px;
}
</style>
@endpush
@push('scripts')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace('editor', {
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
        <form role="form" method="post" action="{{ url($base_url.'/'.$id) }}"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="card-body">
                <div>
                    <img src="{{ asset('public/uploads/'.$image) }}" class="imgThumb">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Certificate Image(Image size 2561*2593)</label>
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