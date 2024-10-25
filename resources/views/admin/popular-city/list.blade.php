@extends('layouts.admin')
@section('title', $label.' List')
@section('right-btn')
<a href="{{ url($base_url.'/create') }}" style="margin: 0 10px;" type="button" class="float-right btn btn-primary">Add {{$label}}</a>
@endsection
@push('style')
<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css"/>
<link rel="stylesheet" href="{{ asset('website/datatables-bs4/css/dataTables.bootstrap4.css') }} ">
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
$('#datatable').DataTable({
"paging": true,
"lengthChange": true,
"searching": true,
"ordering": true,
"info": true,
"autoWidth": true,
dom: 'Bfrtip',
buttons: [
'csv'
]
});
</script>
@endpush
@section('content')
<div class="col-sm-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">{{$label}} List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="datatable" class="table table-bordered table-striped">
        <thead>
          <tr>
            <td>Id</td>
            <td>City Name</td>
            <td>State Id</td>
            <td>State Name</td>
            <td>Action</td>
          </tr>
        </thead>
        @foreach ($district as $key=>$data)
        @foreach ($states as $value)
        @if($value->id == $data->state_id)
        <tr>
          <td>{{ ++$key }}</td>
          <td>{{$data->name}}</td>
          <td>{{$value->id}}</td>
          <td>{{$value->name}}</td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic example">
              <a href="{{ URL::to($base_url.'/' . $data->id. '/edit') }}">
                <button type="button" class="btn btn-warning">Edit</button>
              </a>&nbsp;
              <form action="{{url($base_url.'/'.$data->id)}}" method="POST" onsubmit="return confirm('Do you really want to move to trash?');">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn btn-danger" value="Delete"/>
              </form>
            </div>
          </td>
        </tr>
        @endif
        @endforeach
        @endforeach
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
@endsection