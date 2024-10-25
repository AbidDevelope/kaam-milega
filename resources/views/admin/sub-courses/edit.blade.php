@extends('layouts.admin')
@section('title', 'Edit ' . $label)
@section('right-btn')
<a href="{{ url($base_url) }}" type="button" class="float-right btn btn-primary">View {{ $label }}</a>
@endsection
@push('style')
<style>
.imgThumb {
width: 100%;
height: auto;
max-width: 100px;
max-height: 100px;
margin: 20px 0px;
}
</style>
<style>
.dragDiv {
cursor: move;
/* fallback if grab cursor is unsupported */
cursor: grab;
cursor: -moz-grab;
cursor: -webkit-grab;
padding-left: 65px;
position: relative;
}
.dragDiv .ui-icon {
position: absolute;
left: 0px;
top: 50%;
transform: translateY(-50%);
font-size: 25px;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css"
    integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush
    @push('scripts')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"
    integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
    integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    $(function () {
    $("#sortable").sortable();
    });
    </script>
    <script type="text/javascript">
    $(document).on('click', '.addmore', function (ev) {
    var $clone = $(this).parent().parent().clone(true);
    var count = $(".copy").length + 1;
    var $newbuttons = `
    <div id="main-container" class="copy">
        <hr style="border-top-width: 5px;">
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="image"> Name</label>
                        <input type="text" name="professor_info[${count}][name]" data-cid="1" class="form-control" id="link" aria-describedby="linkHelp">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="image"> Company</label>
                        <input type="text" name="professor_info[${count}][company]" data-cid="1" class="form-control" id="image" aria-describedby="fileHelp">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="image"> Desgination</label>
                        <input type="text" name="professor_info[${count}][desgination]" data-cid="1" class="form-control" id="image" aria-describedby="fileHelp">
                    </div>
                </div>
            </div>
            <div class="col-md-4 btn-group tn-buttons">
                <button type="button" class="btn btn-info btn-sm addmore"><i class="fa fa-plus"></i>Add More File</button>
                <button type="button" class="btn btn-danger btn-sm removemore"><i class="fa fa-remove"></i>Remove</button>
            </div>
        </div>`;
        $('#packagingappendhere').append($newbuttons);
        });
        $(document).on('click', '.removemore', function () {
        $(this).parent().parent().remove();
        });
        function removeFile(id,_this){
        $("#"+id).remove();
        $(_this).remove();
        }
        </script>
        <script type="text/javascript">
        $(document).on('click', '.addmore1', function (ev) {
        var $clone = $(this).parent().parent().clone(true);
        var count = $(".copy1").length + 1;
        var $newbuttons = `
        <div id="main-container" class="copy1">
            <hr style="border-top-width: 5px;">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="image"> Link</label>
                            <input type="text" name="multiple_video_link[${count}][link]" data-cid="1" class="form-control" id="link" aria-describedby="linkHelp">
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 btn-group tn-buttons">
                    <button type="button" class="btn btn-info btn-sm addmore1"><i class="fa fa-plus"></i>Add More File</button>
                    <button type="button" class="btn btn-danger btn-sm removemore1"><i class="fa fa-remove"></i>Remove</button>
                </div>
            </div>`;
            $('#packagingappendhere1').append($newbuttons);
            });
            $(document).on('click', '.removemore1', function () {
            $(this).parent().parent().remove();
            });
            function removeFile1(id,_this){
            $("#"+id).remove();
            $(_this).remove();
            }
            </script>
            <script>
            CKEDITOR.replace('editor', {
            filebrowserBrowseUrl: '{{ url('/') }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl: '{{ url('/') }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl: '{{ url('/') }}/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
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
                        <h3 class="card-title">{{ $label }} Details</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @if($errors->any())
                    <div class="alert alert-danger">Failed !</div>
                    @endif
                    <form role="form" method="post" action="{{ url($base_url . '/' . $id) }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="module_name">Module Name</label>
                                <input type="text" class="form-control @error('module_name') is-invalid @enderror"
                                value="{{ $module_name }}" id="module_name" name="module_name" placeholder="Enter module_name">
                                @error('module_name')
                                <div class="text-danger" role="alert">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="img-box" id="sortable">
                                <label>Developing Expert/Institution</label>
                                <?php $gall_img = $professor_info;
                                ?>
                                @if(!empty($gall_img))
                                @foreach($gall_img as $key => $img)
                                <div class="bg-light p-4 mb-2 ui-state-default dragDiv" id="remove_{{ $key + 1 }}">
                                    <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                    <div class="row align-items-center copy">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="image">Name</label>
                                                <input type="text" name="professor_info[{{ $key }}][name]"
                                                value="{{ $img['name'] }}" data-cid="1"
                                                class="form-control" id="link" aria-describedby="linkHelp">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="image">Company</label>
                                                <input type="text" name="professor_info[{{ $key }}][company]"
                                                value="{{ $img['company'] }}" data-cid="1"
                                                class="form-control" id="link" aria-describedby="linkHelp">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="image">Desgination</label>
                                                <input type="text" name="professor_info[{{ $key }}][desgination]"
                                                value="{{ $img['desgination'] }}" data-cid="1"
                                                class="form-control" id="link" aria-describedby="linkHelp">
                                            </div>
                                        </div>
                                        <div class="col-md-4 tn-buttons">
                                            <button type="button" onclick="removeFile('remove_{{ $key + 1 }}',this)"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa fa-remove"></i>Remove </button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-md-4 btn-group tn-buttons">
                                    <button type="button" class="btn btn-info btn-sm addmore">
                                    <i class="fa fa-plus"></i> Add More File </button>
                                </div>
                                @else
                                <div id="main-container">
                                    <div class="row copy">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="image"> Name</label>
                                                <input type="text" name="professor_info[0][name]" data-cid="1"
                                                class="form-control" id="link" aria-describedby="linkHelp">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="image"> Company</label>
                                                <input type="text" name="professor_info[0][company]" data-cid="1"
                                                class="form-control" id="link" aria-describedby="linkHelp">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="image"> Desgination</label>
                                                <input type="text" name="professor_info[0][desgination]" data-cid="1"
                                                class="form-control" id="link" aria-describedby="linkHelp">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 btn-group tn-buttons">
                                        <button type="button" class="btn btn-info btn-sm addmore">
                                        <i class="fa fa-plus"></i> Add More File </button>
                                        <button type="button" class="btn btn-danger btn-sm removemore">
                                        <i class="fa fa-remove"></i>Remove </button>
                                    </div>
                                    @endif
                                    <div id="packagingappendhere"></div>
                                </div>
                            </div>
                            <div>
                                <a target="_blank" href="{{ asset('public/uploads/'.$presentaion_pdf) }}" class="imgThumb">Link</a>
                            </div>
                            <div class="form-group">
                                <label for="name">Presentation Pdf</label>
                                <input type="file" accept="application/pdf"
                                class="form-control @error('presentaion_pdf') is-invalid @enderror" value="{{ $presentaion_pdf }}"
                                id="presentaion_pdf" name="presentaion_pdf" placeholder="Enter presentaion_pdf">
                                @error('presentaion_pdf')
                                <div class="text-danger" role="alert">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Video Link</label>
                                <input type="text" class="form-control @error('video_link') is-invalid @enderror"
                                value="{{ $video_link }}" id="video_link" name="video_link" placeholder="Enter video_link">
                                @error('video_link')
                                <div class="text-danger" role="alert">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">QA Video Link</label>
                                <input type="text" class="form-control @error('qa_video_link') is-invalid @enderror"
                                value="{{ $qa_video_link }}" id="qa_video_link" name="qa_video_link" placeholder="Enter qa_video_link">
                                 
                            </div>
                            
                            <!-- <div class="img-box" id="sortable">
                                <label>Multiple Video Link</label>
                                <?php $gall_img = $multiple_video_link;
                                ?>
                                @if(!empty($gall_img))
                                @foreach($gall_img as $key => $img)
                                <div class="bg-light p-4 mb-2 ui-state-default dragDiv" id="remove1_{{ $key + 1 }}">
                                    <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                    <div class="row align-items-center copy1">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="image">Link</label>
                                                <input type="text" name="multiple_video_link[{{ $key }}][link]"
                                                value="{{ $img['link'] }}" data-cid="1"
                                                class="form-control" id="link" aria-describedby="linkHelp">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 tn-buttons">
                                            <button type="button" onclick="removeFile1('remove1_{{ $key + 1 }}',this)"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa fa-remove"></i>Remove </button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-md-4 btn-group tn-buttons">
                                    <button type="button" class="btn btn-info btn-sm addmore1">
                                    <i class="fa fa-plus"></i> Add More File </button>
                                </div>
                                @else
                                <div id="main-container">
                                    <div class="row copy1">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="image"> Link</label>
                                                <input type="text" name="multiple_video_link[0][link]" data-cid="1"
                                                class="form-control" id="link" aria-describedby="linkHelp">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4 btn-group tn-buttons">
                                        <button type="button" class="btn btn-info btn-sm addmore1">
                                        <i class="fa fa-plus"></i> Add More File </button>
                                        <button type="button" class="btn btn-danger btn-sm removemore1">
                                        <i class="fa fa-remove"></i>Remove </button>
                                    </div>
                                    @endif
                                    <div id="packagingappendhere1"></div>
                                </div>
                            </div> -->
                            
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