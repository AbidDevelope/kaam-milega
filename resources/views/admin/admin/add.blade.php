@extends('layouts.admin')

@section('title', 'Add Admin')

@section('right-btn')
<a href="{{ url('admins') }}" type="button" class="float-right btn btn-primary">View Admins</a>
@endsection

@push('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script><script>
    $(document).ready(function() {
    $('.select2').select2();
});
</script>
@endpush

@section('content')
<div class="col-md-6">
    @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif 
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Admin Details</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" method="post" action="{{ url('/admins') }}">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="fullname" name="name" placeholder="Full Name">
                @error('name')
                    <div class="text-danger"  role="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="Enter email">
                @error('email')
                    <div class="text-danger"  role="alert">{{ $message }}</div>
                @enderror
            </div>
            
<div class="form-group">
                <label for="permissions">Permission</label>
                <select name="permissions" class="form-control select2 @error('permissions') is-invalid @enderror" multiple="true">
                    <option value=''>select permissions</option>
                    @foreach($modules as $value)
                    <option value='{{$value->Tables_in_carlelo_db}}'>{{strtoupper($value->Tables_in_carlelo_db)}}</option>
                    @endforeach
                </select>
                @error('permissions')
                    <div class="text-danger"  role="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" id="phone" placeholder="Enter phone">
                @error('phone')
                    <div class="text-danger"  role="alert">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                @error('password')
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
