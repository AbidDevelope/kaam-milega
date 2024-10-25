@extends('layouts.admin')
@section('title', $label.' List')
@section('right-btn')
<a href="{{ url($base_url.'/create') }}" style="margin: 0 10px;" type="button"
class="float-right btn btn-primary">Add {{ $label }}</a>
@endsection
@push('style')
<!-- DataTables -->
<link rel="stylesheet"
    href="{{ asset('website/datatables-bs4/css/dataTables.bootstrap4.css') }} ">
    @endpush
    @push('scripts')
    <!-- DataTables -->
    <script src="{{ asset('website/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('website/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
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
                <h3 class="card-title">{{ $label }} List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Title</td>
                            <td>Duration</td>
                            <td>Video Link</td>
                            <td>Image</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    @foreach($learning_videos as $key=>$data)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->durations }}</td>
                        <td>{{ $data->video_link }}</td>
                        <td>
                            <img height="100px" width="150px"
                            src="{{ asset('public/uploads/'.$data->image) }}">
                        </td>
                        
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a
                                    href="{{ URL::to($base_url.'/' . $data->id. '/edit') }}">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                </a>&nbsp;
                                <form action="{{ url($base_url.'/'.$data->id) }}"
                                    method="POST" onsubmit="return confirm('Do you really want to move to trash?');">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-danger" value="Delete" />
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