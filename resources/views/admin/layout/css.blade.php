<?php $favicon = App\Models\logo::where('name', 'favicon')
    ->where('is_active', 1)
    ->first();
?>

<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset($favicon->image) }}">

<!-- App css -->
<link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
    id="bs-default-stylesheet" />
<link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

<link href="{{ asset('admin/assets/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css"
    id="bs-dark-stylesheet" />
<link href="{{ asset('admin/assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css"
    id="app-dark-stylesheet" />

{{-- data table --}}
{{-- <link href="{{ asset('admin/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('admin/assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}" rel="stylesheet"
    type="text/css" /> --}}
{{-- data table --}}



<!-- icons -->
<link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

{{-- toaster --}}
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


<!-- Sweet Alert-->
<link href="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />


<style>
    #btn-back-to-top {
        border-radius: 50%;
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
    }
</style>
