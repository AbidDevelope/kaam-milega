@extends('layouts.admin')

@section('title', 'Job Seeker List')

@section('right-btn')

@endsection

@push('style')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('public/assets/datatables-bs4/css/dataTables.bootstrap4.css') }} ">
@endpush
@push('scripts')
<!-- DataTables -->
<script src="{{ asset('public/assets/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('public/assets/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
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
      <h3 class="card-title">Job Seeker  List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="datatable" class="table table-bordered table-striped">
          <thead>
              <tr>
                  <td>Id</td>
                  <td>Name</td>
                  <td>Email</td>
                  <td>Address</td>
                  <td>Phone</td>
                  <td>Pincode</td>
                  <td>Date</td>
                  <!-- <td>Action</td> -->
              </tr>
          </thead>    
              @foreach ($users as $key=>$user)
              <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->address }}</td>
                  <td>{{ $user->phone }}</td>
                  <td>{{ $user->pincode }}</td>
                  <td>{{ $user->created_at }}</td>
                 <!--  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="{{ URL::to('users/' . $user->id) }}">
                        <button type="button" style="border-radius:unset" class="btn btn-primary">View</button>
                      </a>
                      
                      <form action="{{url('users/'.$user->id)}}" method="POST" onsubmit="return confirm('Do you really want to move to trash?');">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" style="border-radius:unset" class="btn btn-danger" value="Delete"/>
                      </form>
                    </div>
                    
                  </td> -->
                  <!--<td>-->
                  
                  <!--    </td>-->
                 
              </tr>
              @endforeach
          </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
@endsection
