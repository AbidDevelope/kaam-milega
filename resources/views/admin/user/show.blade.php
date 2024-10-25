@extends('layouts.admin')

@section('title', 'Users Details')

@section('right-btn')
<a href="{{ url('users') }}" type="button" class="float-right btn btn-primary">Users List</a>
@endsection

@push('style')

@endpush

@push('scripts')

@endpush

@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"><strong>Date: </strong>{{ $user->created_at }}</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
          
          <h6><strong class="text-primary">Car Model: </strong>{{ $user->cars->model }}</h6>
          <h6><strong class="text-primary">Variant: </strong>{{ $user->variant->name }}</h6>
        <h6><strong class="text-primary">Name: </strong>{{ $user->user_name }}</h6>
        <h6><strong class="text-primary">Mobile: </strong>{{ $user->user_phone }}</h6>
        <h6><strong class="text-primary">Email: </strong>{{ $user->	user_email }}</h6>
        <h6><strong class="text-primary">Address: </strong>{{ $user->user_address }}</h6>
        <h6><strong class="text-primary">Preferred loan Amount in Percentage: </strong>{{ $user->location }}</h6>
        <h6><strong class="text-primary">Place of registration: </strong>{{ $user->place_of_registration }}</h6>
        <h6><strong class="text-primary">Description( Colour, or any other detail): </strong>{{ $user->description }}</h6>
        
      </div>
    </div>
    <!-- /.card -->
  </div>
@endsection
