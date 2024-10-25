@extends('layouts.admin')
@section('title', 'Add '.$label)
@section('right-btn')
<a href="{{ url($base_url) }}" type="button" class="float-right btn btn-primary">View {{$label}}</a>
@endsection
@push('style')
@endpush
@push('scripts')
 
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
                    <label for="title">State Name</label>
                    <select class="form-control @error('state_name') is-invalid @enderror" value="{{ old('state_name') }}" id="state_name" name="state_name">
                        <option>Select State</option>
                        @foreach ($state as $key => $value) 
                        <option value="{{$value->name}}">{{$value->name}}</option>
                        @endforeach 
                    </select>
                    @error('state_name')
                    <div class="text-danger"  role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">Company Name</label>
                    <input type="text" class="form-control @error('company') is-invalid @enderror" value="{{ old('company') }}" id="company" name="company" placeholder="Enter Name">
                    @error('company')
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