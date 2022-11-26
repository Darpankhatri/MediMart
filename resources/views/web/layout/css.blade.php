<?php $favicon = App\Models\logo::where('name', 'favicon')
    ->where('is_active', 1)
    ->first();
?>

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


{{-- toaster --}}
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


<!-- Sweet Alert-->
<link href="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />