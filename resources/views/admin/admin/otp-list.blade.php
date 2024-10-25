@extends('layouts.admin')
@section('title', 'Otp List')
@section('right-btn')
<!-- <a href="{{ url('admins/create') }}" style="margin: 0 10px;" type="button" class="float-right btn btn-primary">Add Admin</a> -->
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
      <h3 class="card-title">Otp List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="datatable" class="table table-bordered table-striped">
        <thead>
          <tr>
            <td>Id</td>
            <td>Mobile</td>
            <td>Otp</td>
            
          </tr>
        </thead>
        @foreach ($otp as $key=>$value)
        <tr>
          <td>{{ ++$key }}</td>
          <td>{{ $value->phone }}</td>
          <td>{{ $value->otp }}</td>
          
        </tr>
        @endforeach
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
@endsection