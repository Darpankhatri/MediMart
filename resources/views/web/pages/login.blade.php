<?php $favicon = App\Models\logo::where('name', 'favicon')
    ->where('is_active', 1)
    ->first();
?>
<!DOCTYPE html>
<html>

<head>
    <title> Login | Graphical Validator </title>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset("web/css/bootstrap.cs")}}s" rel="stylesheet" type="text/css">
    <link href="{{ asset("web/css/bootstrap.css.map")}}" rel="stylesheet" type="text/css">
    <link href="{{ asset("web/css/bootstrap.min.css.map")}}" rel="stylesheet" type="text/css">
    <link href="{{ asset("web/css/animate.css")}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" href="{{ asset($favicon->image)}}" type="image/png" sizes="">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset("web/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{ asset("web/css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{ asset("web/slick/slick.css")}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("web/css/slick-theme.css")}}" />
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">
    <link href="{{ asset("web/css/custom.css")}}" rel="stylesheet" type="text/css">
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
                <h1>Login</h1>
                <p>Welcome back you've <br> been missed!</p>
                <form action="" method="">
                    <input type="email" placeholder="Enter Your Email">
                    <input type="password" placeholder="Password">
                    <div class="recover">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <div class="slect-options">
                        <ul>
                            <!-- opacity ki class h ye "cl-op" -->
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>   
                </form>
                <button>Sign in</button>


                <div class="not-member">
                    Not a member?
                    <a href="{{ route('web.register') }}">Register Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- login section end -->

    <!--=============== scripts  ===============-->
    <script src="{{ asset("web/js/jquery-3.6.0.min.js")}}"></script>
    <script src="{{ asset("web/js/bootstrap.min.js")}}"></script>
    <script src="{{ asset("web/js/bootstrap.min.js.map")}}"></script>
    <script src="{{ asset("web/js/owl.carousel.min.js")}}"></script>
    <script type="text/javascript" src="{{ asset("web/slick/slick.js")}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
    <script src="{{ asset("web/js/custom.js")}}"></script>
</body>

</html>