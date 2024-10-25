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
        <form role="form" method="post" action="{{ url($base_url.'/'.$id) }}"  enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="card-body">
                <div class="form-group">
                    <label for="state_id">State</label>
                    <select class="form-control @error('state_id') is-invalid @enderror" id="title" name="state_id" >
                        @foreach($states as $state)
                        <option value="{{$state->id}}" {{ ($state->id == $state_id) ? 'selected':'' }}>{{$state->name}}</option>
                        @endforeach
                        
                    </select>
                    @error('state_id')
                    <div class="text-danger"  role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">City Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $name }}" id="title" name="name" placeholder="Enter name">
                    @error('title')
                    <div class="text-danger"  role="alert">{{ $message }}</div>
                    @enderror
                </div>
                
                
                <!-- 
                <div>
                    <img src="{{ asset('laravel/public/uploads/'.$logo) }}" class="imgThumb">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <input type="file" name="logo" class="form-control-file" id="logo" aria-describedby="fileHelp">
                    @error('logo')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div> -->
                <label class="checkbox-inline"><input type="hidden" name="is_popular" value="0"><input name="is_popular" type="checkbox" value="1" {{ $is_popular? 'checked' : '' }}>  Popular </label>
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