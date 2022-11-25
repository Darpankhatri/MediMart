@extends('admin.layout.master')

@section('content')

    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Profile</h4>
                        <div>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Account</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('user.profile') }}">profile</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-12">
                    

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    
                                                    <div class="d-flex align-items-start">
                                                        <img src="{{ Auth::user()->image }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                                        <div class="w-100 ms-3">
                                                            <h4 class="my-0">{{ Auth::user()->name }}</h4>
                                                            <p class="text-muted">{{ Auth::user()->email }}</p>
                                                            {{-- <button type="button" class="btn btn-soft-primary btn-xs waves-effect mb-2 waves-light">Follow</button>
                                                            <button type="button" class="btn btn-soft-success btn-xs waves-effect mb-2 waves-light">Message</button> --}}
                                                        </div>
                                                    </div>
            
                                                    <div class="mt-3">
                                                        <h4 class="font-13 text-uppercase">About Me :</h4>
                                                        <p class="text-muted font-13 mb-3">
                                                            Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                                        </p>
                                                        <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">{{ Auth::user()->name }}</span></p>
                                                    
                                                        <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2">{{ Auth::user()->phone }}</span></p>
                                                    
                                                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2">{{ Auth::user()->email }}</span></p>
                                                    
                                                        <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ms-2">{{ Auth::user()->address }}</span></p>
                                                    </div>                                    
            
                                                    <ul class="social-list list-inline mt-3 mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-list-item text-center border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-list-item text-center border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-list-item text-center border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-list-item text-center border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                                        </li>
                                                    </ul>   
                                                </div>                                 
                                            </div> <!-- end card -->
                                        </div>

                                        <div class="col-lg-9">
                                            <div class="card">
                                                <div class="card-body">
                                                    <form class="needs-validation" action="{{ route('update.profile') }}" method="POST" novalidate>
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="validationCustom01" class="form-label">Name</label>
                                                            <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Name" value="{{ Auth::user()->name }}" required />
                                                            <div class="invalid-feedback"> Please provide a valid city. </div>
                                                            <div class="valid-feedback"> Looks good! </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="validationCustom02" class="form-label">Date</label>
                                                            <input class="form-control" id="validationCustom02" type="date" value="{{ Auth::user()->dob }}" name="dob" required/>
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">
                                                                Please Select Your age.
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="mb-3">
                                                            <label for="example-disable" class="form-label">Email</label>
                                                            <input type="text" class="form-control" id="example-disable" disabled="" value="{{ Auth::user()->email }}" required />
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="validationCustom04" class="form-label">Address</label>
                                                            <textarea class="form-control" id="validationCustom04" placeholder="address" name="address" rows="4" required>{{ Auth::user()->address }}</textarea>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid Address.
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="validationCustom06" class="form-label">Phone</label>
                                                            <input type="text" class="form-control" id="validationCustom06" name="phone" placeholder="phone" value="{{ Auth::user()->phone }}" required />
                                                            <div class="invalid-feedback"> Please provide a valid Phone Number. </div>
                                                            <div class="valid-feedback"> Looks good! </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="validationCustom05" class="form-label">Gender:</label>
                                                            <select id="validationCustom05" name="gender" class="form-select" required>
                                                                <option value="0" disabled>Choose..</option>
                                                                <option value="male" {{ Auth::user()->gender == 'male' ? 'selected' : '' }}>Male</option>
                                                                <option value="female" {{ Auth::user()->gender == 'female' ? 'selected' : '' }}>Female</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please Select Gender.
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-primary" type="submit">Update Profile</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>

        </div> <!-- container -->

    </div> <!-- content -->


@endsection


@section('css')
@endsection

@section('js')
@endsection
