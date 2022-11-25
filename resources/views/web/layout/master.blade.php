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
        @include('web.layout.css')
        @yield('css')
        <!-- END: Custom CSS-->
    </head>
    <!-- END Head-->

    <!-- START: Body-->
    
    <body>
            
        <!-- START: Header-->
        @include('web.layout.header')
        <!-- END: Header-->

        
        <!-- START: Main Content-->
        @yield('content')
        <!-- END: Content-->
            
        @include('web.layout.footer')

        <!-- START: Template JS-->
        @include('web.layout.script')
        
        @yield('js')
        
    </body>
    <!-- END: Body-->
</html>
