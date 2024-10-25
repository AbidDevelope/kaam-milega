<?php
function certificates($user_id) {
$resultSheet = ResultSheet::with('users')->where('user_id', $user_id)->get();
$passingModulesCount = $resultSheet->filter(function ($value) {
$percentage = ($value->score / $value->total_questions) * 100;
return $percentage >= 60;
})->count();
if ($passingModulesCount >= 10) {
$data = true;
}else{
$data = false;
}
return $data;
}
?>
@extends('layouts.admin')
@section('title', $label.' List')
@section('right-btn')
<!-- <a href="{{ url($base_url.'/create') }}" style="margin: 0 10px;" type="button" class="float-right btn btn-primary">Add {{$label}}</a> -->
@endsection
@push('style')
<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css"/>
<link rel="stylesheet" href="{{ asset('website/datatables-bs4/css/dataTables.bootstrap4.css') }} ">
<style type="text/css">
  .design{
    padding: 7px 20px !important;
    font-size: 17px;
    margin-bottom: 15px;
  }
</style>
@endpush
@push('scripts')
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script>
$(document).ready(function() {
$('#datatable').DataTable( {
dom: 'Bfrtip',
buttons:
[
{
extend: 'excel',
title: 'Participants List',
text: 'Participants Download',
},
],
scrollX: true,
} );
} );
</script>
@endpush
@section('content')
<div class="col-sm-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">{{$label}} List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body" >
      <form action="" method="GET">
        <div class="row">
          <div class="form-group col-md-6">
            <label for="sel1">Each Utility Enrolled Candidates</label>
            <select name="organization"  class="form-control" id="organization">
              <option value="">--- Select Utility ---</option>
              @foreach($organization as $key => $value)
              <option value="{{ $value->company }}" {{ (isset($_GET['organization']) && $value->company == $_GET['organization']) ? 'selected' : '' }}>{{ $value->company }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="sel1">Each State Enrolled Candidates</label>
            <select name="state"  class="form-control" id="state">
              <option value="">--- Select State ---</option>
              @foreach($states as $key => $value)
              <option value="{{ $value->name }}" {{ (isset($_GET['state']) && $value->name == $_GET['state']) ? 'selected' : '' }}>{{ $value->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="sel1">Gender</label>
            <select name="gender" class="form-control" id="gender">
              <option value="{{ (isset($_GET['gender']) && $_GET['gender'] != '' ) ? $_GET['gender'] : '' }}"{{ (isset($_GET['gender']) && $_GET['gender'] != '' ) ? $_GET['gender'] : '' }}>{{ (isset($_GET['gender']) && $_GET['gender'] != '' ) ? $_GET['gender'] : '--Select Gender--' }}</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="sel1">Certificate</label>
            <select name="certificate" class="form-control" id="certificate">
              <option value="{{ (isset($_GET['certificate']) && $_GET['certificate'] != '' ) ? $_GET['certificate'] : '' }}"{{ (isset($_GET['certificate']) && $_GET['certificate'] != '' ) ? $_GET['certificate'] : '' }}>{{ (isset($_GET['certificate']) && $_GET['certificate'] != '' && $_GET['certificate'] == 'yes' ) ? 'Cleared' : ((isset($_GET['certificate']) && $_GET['certificate'] != '' && $_GET['certificate'] == 'no' ) ? 'Not Cleared' : 'Select Certificate') }}</option>
              <option value="yes">Cleared</option>
              <option value="no">Not Cleared</option>
            </select>
          </div>
          
          <div class="form-group col-md-6" style="margin-top:31px">
            <button type="submit"  class="btn  btn-info" >
           <i class="fa fa-search"></i>
            </button>
            @if(isset($_GET['state']))
            <a href="{{url('admin/users')}}"  class="btn btn-sm btn-danger design" >
              <del>FILTERS</del>
            </a>
            @endif
          </div>
        </div>
        
      </form>
      <div class="table-responsive">
        <table id="datatable" class="table table-bordered table-striped">
          <thead>
            <tr>
              <td>Id</td>
              <td>User Id</td>
              <td>Name</td>
              <td>Email</td>
              <td>Mobile</td>
              <td>Password</td>
              <td>Gender</td>
              <td>State</td>
              <!-- <td>Certificate </td> -->
              <td>ID Card</td>
              <td class="d-none">ID Card Link</td>
              <td>Level Of Officer</td>
              <td>Organization</td>
              <td>Date</td>
              <td>User Status</td>
              <!-- <td>Action</td> -->
            </tr>
          </thead>
          @foreach ($final_users as $key=>$data)
          <tr>
            <td>{{ ++$key }}</td>
            <td>{{$data['user_list']->user_id}}</td>
            <td>{{$data['user_list']->name}}</td>
            <td>{{$data['user_list']->email}}</td>
            <td>{{$data['user_list']->phone}}</td>
            <td>{{$data['user_list']->show_password}}</td>
            <td>{{$data['user_list']->gender}}</td>
            <td>{{$data['user_list']->state}}</td>
            <!-- <td>{{$data['certificates']}} -->
              <!-- @if($data['certificates'] == 'Yes')
              <a href="{{url('admins/generate-admin-pdf/'.$data['user_list']->user_id)}}" download="{{url('admins/generate-admin-pdf/'.$data['user_list']->user_id)}}">
                <button type="button" class="btn btn-warning">Show</button>
              </a>
              @else
              {{$data['certificates']}}
              @endif -->
            </td>
            <td> <a href="{{ URL::to('/public/id-card/' . $data['user_list']->upload_id_card) }}" target="_blank">
              <button type="button" class="btn btn-warning">Show</button>
            </a></td>
            <td class="d-none">{{ URL::to('/public/id-card/' . $data['user_list']->upload_id_card) }}</td>
            <td>{{$data['user_list']->level_officer}}</td>
            <td>{{$data['user_list']->organization}}</td>
            <td>{{$data['user_list']->created_at}}</td>
            <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                <form action="{{url('admins/change-status/'.$data['user_list']->id)}}" method="POST" onsubmit="return confirm('Do you really want to change to status?');">
                  {{csrf_field()}}
                  
                  <button type="submit" class="btn btn-{{ $data['user_list']->active == 1 ? 'success':'warning' }}">{{ $data['user_list']->active == 1 ? 'Active':'De active' }}</button>
                  
                </form>
              </div>
            </td>
            <!-- <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{ URL::to($base_url.'/' . $data['user_list']->id. '/edit') }}">
                  <button type="button" class="btn btn-warning">Edit</button>
                </a>&nbsp;
                <form action="{{url($base_url.'/'.$data['user_list']->id)}}" method="POST" onsubmit="return confirm('Do you really want to move to trash?');">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="submit" class="btn btn-danger" value="Delete"/>
                </form>
              </div>
            </td> -->
            
          </tr>
          @endforeach
          </tfoot>
        </table>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
</div>
@endsection