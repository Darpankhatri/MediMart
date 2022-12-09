<?php $favicon = App\Models\logo::where('name', 'favicon')
    ->where('is_active', 1)
    ->first();
?>
<!DOCTYPE html>
<html>

<head>
    <title> Register | Graphical Validator </title>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('web/css/bootstrap.cs') }}s" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/css/bootstrap.css.map') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/css/bootstrap.min.css.map') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" href="{{ asset($favicon->image) }}" type="image/png" sizes="">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('web/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/slick-theme.css') }}" />
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">
    <link href="{{ asset('web/css/custom.css') }}" rel="stylesheet" type="text/css">
    {{-- toaster --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Sweet Alert-->
    <link href="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

    <!--=============== scripts  ===============-->
    <script src="{{ asset('web/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('web/js/bootstrap.min.js.map') }}"></script>
    <script src="{{ asset('web/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('web/slick/slick.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
    <script src="{{ asset('web/js/custom.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('web/validation.js') }}"></script>
</head>

<body>
    <!--loader-->
    <div class="loader-wrap">
        <div class="pin">
            <div class="pulse"></div>
        </div>
    </div>
    <!--loader end-->

    <!-- login section start -->
    <section class="login-sec-wrap">
        <div class="container">
            <div class="wrapper">
                <h1>Active Account</h1>
                <p>Welcome to graphical <br> Verification</p>
                <form action="{{ route('user.active.send') }}" method="post">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <input type="email" placeholder="Enter Your Email" id="email" name="email" value="{{ old('email') }}"
                        required>
                        
                    <button type="submit">Active</button>
                </form>
            </div>
        </div>
    </section>

    <!-- login section end -->



    <script>
        
        
        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "debug": false,
                "positionClass": "toast-bottom-right",
            }
            toastr.error("{{ session('error') }}");
        @endif
    </script>
</body>

</html>
