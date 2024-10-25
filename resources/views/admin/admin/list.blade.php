@extends('layouts.admin')
@section('title', 'Admin List')
@section('right-btn')
<a href="{{ url('admins/create') }}" style="margin: 0 10px;" type="button" class="float-right btn btn-primary">Add Admin</a>
{{-- <a href="{{ url('admins/trash') }}" type="button" class="float-right btn btn-danger">Trash</a> --}}
@endsection
@push('style')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }} ">
@endpush
@push('scripts')
<!-- DataTables -->
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
$('#datatable').DataTable({
"paging": true,
"lengthChange": true,
"searching": true,
"ordering": true,
"info": true,
"autoWidth": true,
});
</script>
@endpush
@section('content')
<div class="col-sm-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Admins List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="datatable" class="table table-bordered table-striped">
        <thead>
          <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Status</td>
            <td>Action</td>
          </tr>
        </thead>
        @foreach ($users as $key=>$user)
        <tr>
          <td>{{ ++$key }}</td>
          <td>{{ $user->name }}</td>
          
          <td>{{ $user->email }}</td>
          <td>
            <form action="{{url('admins/change-status/'.$user->id)}}" method="POST" onsubmit="return confirm('Do you really want to change to status?');">
              {{csrf_field()}}
              
              <button type="submit" class="btn btn-{{ $user->active == 1 ? 'success':'warning' }}">{{ $user->active == 1 ? 'Active':'De active' }}</button>
              
            </form>
            
          </td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic example">
              
              <a href="{{ URL::to('admins/' . $user->id . '/edit') }}">
                <button type="button" class="btn btn-warning">Edit</button>
              </a>&nbsp;
              <form action="{{url('admins/'.$user->id)}}" method="POST" onsubmit="return confirm('Do you really want to move to trash?');">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn btn-danger" value="Delete"/>
              </form>
            </div>
          </td>
        </tr>
        @endforeach
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
@endsection