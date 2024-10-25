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
                <div class="form-group">
                    <label for="name">Second Title</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $name }}" id="name" name="name" placeholder="Enter name">
                    @error('name')
                    <div class="text-danger"  role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">Ratings</label>
                    <input type="text" class="form-control @error('ratings') is-invalid @enderror" value="{{ $ratings }}" id="ratings" name="ratings" placeholder="Enter ratings">
                    @error('ratings')
                    <div class="text-danger"  role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="descriptions">Comment</label>
                    <textarea  class="form-control @error('comment') is-invalid @enderror" value="" id="editor" name="comment" placeholder="Enter comment">{{ $comment }}</textarea>
                    @error('comment')
                    <div class="text-danger"  role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <img src="{{ asset('public/uploads/'.$logo) }}" class="imgThumb">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">  Logo</label>
                    <input type="file" name="logo" class="form-control-file" id="logo" aria-describedby="fileHelp">
                    @error('logo')
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