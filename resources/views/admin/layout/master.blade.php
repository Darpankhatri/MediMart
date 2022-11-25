<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- START: Head-->
    <head>
        <meta charset="UTF-8">
        <title>{{isset($title)?$title:'Index'}}</title>

        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"> 
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- START: Template CSS-->
        @include('admin.layout.css')
        @yield('css')
        <!-- END: Custom CSS-->
    </head>
    <!-- END Head-->

    <!-- START: Body-->
    
    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "dark", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>
        <div id="wrapper">
            
            <!-- START: Header-->
            @include('admin.layout.header')
            <!-- END: Header-->

            <!-- START: Main Menu-->
            @include('admin.layout.sidebar')
            
            <!-- END: Main Menu-->
            {{-- @endauth --}}
            <!-- START: Main Content-->
            
            <div class="content-page">
                @yield('content')

                @include('admin.layout.footer')
            </div>
            
            <!-- END: Content-->
            

            <!-- START: Back to top-->
            <button type="button" class="btn btn-primary btn-floating btn-lg" id="btn-back-to-top">
                <i class="fas fa-arrow-up"></i>
            </button>
            <!-- END: Back to top-->
        </div>
        
        {{-- @include('admin.layout.right-sidebar') --}}
        

        <!-- START: Template JS-->
        @include('admin.layout.scripts')
        
        @yield('js')
        
    </body>
    <!-- END: Body-->
</html>
