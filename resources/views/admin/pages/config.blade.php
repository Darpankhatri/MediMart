@extends('admin.layout.master')

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Config</h4>
                        <div>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Website Setting</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('web.config') }}">Config</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Web Config</h4><br>

                            <form class="needs-validation" action="{{ route('update.config') }}" method="POST" novalidate>
                                @csrf
                                @foreach ($config as $key => $data )
                                    @if ($data->slug == "webemail")
                                        <div class="mb-3">
                                            <label for="email" class="form-label">{{ $data->name }}</label>
                                            <input type="email" class="form-control" name="{{ $data->slug }}" id="email"
                                                placeholder="{{ $data->name }}" value="{{ $data->value }}" required />
                                            <div class="invalid-feedback">
                                                Please Enter Valid {{ $data->name }}.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                    @else
                                        <div class="mb-3">
                                            <label for="validationCustom{{ $key+1 }}" class="form-label">{{ $data->name }}</label>
                                            <input type="text" class="form-control" name="{{ $data->slug }}" id="validationCustom{{ $key+1 }}"
                                                placeholder="{{ $data->name }}" value="{{ $data->value }}" required />
                                            <div class="invalid-feedback">
                                                Please Enter {{ $data->name }}.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    @endif
                                    
                                @endforeach
                                
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->

                </div>
            </div>

        </div> <!-- container -->

    </div> <!-- content -->
@endsection


@section('css')
@endsection

@section('js')
@endsection
