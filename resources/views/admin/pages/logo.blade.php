<?php $logo = App\Models\logo::where('name','logo')->where('is_active',1)->first(); 
$favicon = App\Models\logo::where('name','favicon')->where('is_active',1)->first(); 
?>
@extends('admin.layout.master')

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Logo</h4>
                        <div>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Website Setting</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('web.logo') }}">Logo Management</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Web Logo <img class="logo-image" src="{{ asset($logo->image) }}" alt=""></h4>
                            <br>
                            <form class="needs-validation dropzone" id="dropzone" action="{{ route('update.logo') }}"
                                method="POST" enctype="multipart/form-data" novalidate>
                                @csrf
                                    <div class="upload-container">
                                        <input type="hidden" name="name" value="logo">
                                        <input type="file" name="image" id="file_upload" multiple />
                                    </div>

                                <button class="btn btn-primary logo-submit-btn" type="submit" style="display: none">Submit form</button>
                            </form>

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div>

                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Web Favicon <img class="logo-image" src="{{ asset($favicon->image) }}" alt=""></h4><br>

                            <form class="dropzone" id="dropzone" action="{{ route('update.logo') }}"
                                method="POST" enctype="multipart/form-data" novalidate>
                                @csrf
                                    <div class="upload-container">
                                        <input type="hidden" name="name" value="favicon">
                                        <input type="file" name="image" id="file_upload" multiple />
                                    </div>

                                <button class="btn btn-primary favicon-submit-btn" type="submit" style="display: none">Submit form</button>
                            </form>
                            
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div>
            </div>

        </div> <!-- container -->

    </div> <!-- content -->
@endsection


@section('css')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css"> --}}
        <style>
            .upload-container {
              position: relative;
            }
            .upload-container input {
              border: 1px solid #92b0b3;
              background: #f1f1f1;
              outline: 2px dashed #92b0b3;
              outline-offset: -10px;
              padding: 100px 0px 100px 250px;
              text-align: center !important;
              width: 100%;
            }
            .upload-container input:hover {
              background: #ddd;
            }
            .upload-container:before {
              position: absolute;
              bottom: 50px;
              left: 245px;
              content: " (or) Drag and Drop files here. ";
              color: #3f8188;
              font-weight: 900;
            }
            .upload-btn {
              margin-left: 300px;
              padding: 7px 20px;
            }

            .logo-image{
                float: right;
                width: 60px;
                margin-top: -20px;
            }
          </style>
@endsection

@section('js')

    <script>
        $(document).on('change','#file_upload', function(){
            // alert("yes");
            if (this.files && this.files[0] && this.files[0].name.match(/\.(jpg|jpeg|png|gif|ico)$/) ) {
                if(this.files[0].size>1048576) {
                    $(this).val(null);
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "File size is larger than 1MB!"
                    })
                    $(this).closest('.dropzone').find('.btn-primary').hide();
                }
                else {
                    // var reader = new FileReader();
                    // reader.onload = imageIsLoaded;
                    // reader.readAsDataURL(this.files[0]);
                    $(this).closest('.dropzone').find('.btn-primary').show();

                }
            } else {
                $(this).val(null);
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "This is not an image file!"
                })
                $(this).closest('.dropzone').find('.btn-primary').hide();
                
            }
        });

       
    </script>
@endsection
