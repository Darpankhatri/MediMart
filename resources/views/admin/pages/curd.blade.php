@extends('admin.layout.master')

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{ ucwords($slug) }}</h4>
                        <div>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Extra</a></li> --}}
                                <li class="breadcrumb-item active">{{ Str::title($slug) }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card bg-dark shadow-none data-model-btn" style="cursor: pointer">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <h2 class="text-white mt-2">Add {{ Str::title($slug) }}</h2>
                                    {{-- <p class="text-white mb-0 text-truncate">{{ Auth::user()->name }}</p> --}}
                                </div>
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-light ms-auto">
                                        <i class="fe-layers font-24 avatar-title text-white"></i>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->
            </div>
        </div>

        {{-- <table id="basic-datatable" class="table activate-select dt-responsive nowrap w-100"> --}}
        {{-- <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100"> --}}

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{ Str::title($slug) }} Data<hr></h4>
                            {!! $table['body'] !!}

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>


        

    </div>


    <!--  Modal content for the Large example -->
    <div class="modal fade" id="data-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Add {{ Str::title($slug) }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <hr>
                <div class="modal-body">
                    {!! $form !!}
                    
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light add-data">Create</button>
                    </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection


@section('css')
    {{-- data table --}}
    <!-- third party css -->
    <link href="{{ asset('admin/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <style>
        .modal-content hr{
            margin: 5px 0 5px 0;
        }
    </style>
@endsection

@section('js')
    <!-- third party js -->
    <script src="{{ asset('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="{{ asset('admin/assets/js/pages/datatables.init.js') }}"></script>

    <script>
        $(document).ready(function() {

            {!! $table['script'] !!}

            $('.crdeate-btn').click(function(e) {
                e.preventDefault();
                $('.submit-form').submit();
            });


            $('.data-model-btn').click(function() {
                $("#generic-form")[0].reset();
                $('.add-data').text('Create');
                $('#edit_id').val('');
                $("#image").prop("required", true);
                $("#data-modal").modal("show");
                
            });

        });

        $(document).on('click', ".add-data", function() {
            var has_error = 0;
            $("#generic-form").find("select,textarea,input").each(function(i, e) {
                if ($(e).prop("required") == true) {
                    if ($(e).val() == "") {
                        has_error++;
                        console.log("done")
                        return false
                    }
                }
            })
            if (has_error == 0) {
                console.log("no error")
                $("#generic-form").submit();
            } else {
                toastr.error("Fill all required fields");
            }
        });

        $(document).on("click", ".delete-record", function() {
            var id = $(this).data("id");
            var table = $(this).data("table");
            var ele = $(this);
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: "{{ route('delete.record') }}",
                data: {
                    id: id,
                    table: table,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "debug": false,
                        "positionClass": "toast-bottom-right",
                    }
                    if (response.status == 0) {
                        toastr.error(response.message);
                    } else {
                        $(ele).closest('tr').remove();
                        toastr.success(response.message);
                    }
                }
            });
        })
    </script>
@endsection
